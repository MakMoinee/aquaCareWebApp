<?php

namespace App\Http\Controllers;

use App\Models\Detections;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use function Laravel\Prompts\select;

class UserDetectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != 'user') {
                return redirect("/");
            }

            $detections = DB::table('detections')
                ->where('userID', '=', $user['userID'])
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $detectionResult = json_decode(DB::table('detection_results')->distinct()->get(), true);


            return view('user.detection', ['detections' => $detections, 'userType' => $user, 'detectionResult' => $detectionResult]);
        }
        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != 'user') {
                return redirect("/");
            }
            if ($request->btnAddFish) {
                $files = $request->file('imagePath');
                $fileName = "";

                if ($files) {
                    $mimeType = $files->getMimeType();
                    if ($mimeType == "image/png" || $mimeType == "image/jpg" || $mimeType == "image/JPG" || $mimeType == "image/JPEG" || $mimeType == "image/jpeg" || $mimeType == "image/PNG") {
                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/detections';
                        $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                        $isFile = $files->move($destinationPath,  $fileName);
                        chmod($destinationPath, 0755);
                    }

                    if ($fileName != "") {
                        $fileName = "/data/detections/" . $fileName;
                        $newDetection = new Detections();
                        $newDetection->fishName = $request->fishName;
                        $newDetection->remarks = $request->remarks;
                        $newDetection->userID = $user['userID'];
                        $newDetection->imagePath = $fileName;
                        $isSave = $newDetection->save();
                        if ($isSave) {
                            session()->put("successAddFish", true);
                        } else {
                            session()->put("errorAddFish", true);
                        }
                    } else {
                        session()->put("errorAddFileFish", true);
                    }
                } else {
                    session()->put("imageRequired", true);
                }
            }
            return redirect("/user_detection");
        }
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != 'user') {
                return redirect("/");
            }

            $detection = DB::table('detections')
                ->where('detectionID', '=', $id)->get();
            $myArr = $detection->toArray();
            if (count($myArr) == 0) {
                return redirect("/user_detection");
            }
            $result = json_decode(DB::table('detection_results')->where('detectionID', '=', $id)->limit(1)->get(), true);
            if (count($result) > 0) {
            } else {
                $this->callApi($myArr[0]->imagePath, $id);
                $result = json_decode(DB::table('detection_results')->where('detectionID', '=', $id)->limit(1)->get(), true);
            }

            return view('user.result', ['detections' => $myArr[0], 'isFetch' => count($result) > 0 ? 1 : 0]);
        }
        return redirect("/");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != 'user') {
                return redirect("/");
            }

            if ($request->btnDeleteFish) {

                $deleteCount = DB::table('detections')->where('detectionID', '=', $id)->delete();
                if ($deleteCount > 0) {
                    try {
                        $originalDirectoryPath = $request->imagePath;
                        if ($originalDirectoryPath) {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT']  . $originalDirectoryPath;
                            File::delete($destinationPath);
                        }
                    } catch (Exception $e1) {
                    }

                    session()->put("successDelete", true);
                } else {
                    session()->put("errorDelete", true);
                }
            }
            return redirect("/user_detection");
        }
        return redirect("/");
    }

    public function callResult(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != 'user') {
                return redirect("/");
            }

            $id = $request->query('id');

            $result = json_decode(DB::table('detection_results')->where('detectionID', '=', $id)->limit(1)->get(), true);
            if (count($result) > 0) {
                return response()->json(['result' =>  $result[0]], 200);
            } else {
                return response()->json([], 404);
            }
        }
        return redirect("/");
    }

    private function callApi(string $imagePath, int $id): void
    {
        $client = new Client();
        $response = $client->post('http://localhost:5000/detect', [
            'multipart' => [
                [
                    'name' => 'image',
                    'contents' => 'http://localhost:8443' . $imagePath . ''
                ],
                [
                    'name' => 'id',
                    'contents' => $id
                ],
            ]
        ]);

        // var_dump($response->getBody()->getContents());
    }
}
