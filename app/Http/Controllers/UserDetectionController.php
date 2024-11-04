<?php

namespace App\Http\Controllers;

use App\Models\Detections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            return view('user.detection', ['detections' => $detections]);
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
        //
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
    public function destroy(string $id)
    {
        //
    }
}
