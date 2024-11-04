<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aqua Care</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/aqua.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .sticky-top {
            top: 0px !important;
            transition: .5s;
            background-color: #1363c6 !important;
        }

        td {
            color: black !important;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only"></span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-primary shadow-sm sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="/" class="navbar-brand">
                    <h1 class="text-white">Aqua<span class="text-dark"> </span>Care</h1>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link ">Home</a>
                        <a href="/#about" class="nav-item nav-link">About</a>
                        <a href="/#service" class="nav-item nav-link">Services</a>
                        <a href="/#faqs" class="nav-item nav-link">FAQs</a>
                        <a href="/#team" class="nav-item nav-link">Our Team</a>
                        <a href="/user_detection" class="nav-item nav-link active">Detection</a>
                        <a style="cursor: pointer" class="nav-item nav-link" data-bs-toggle="modal"
                            data-bs-target="#logoutModal">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5" id="service">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Detection</div>
                    <h1 class="mb-4">Upload Photos of Your Fish</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-lg-12">
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addFishModal">Add</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="table-responsive mb-5">
                                    <table class="table border mb-2" id="sortTable">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">
                                                <th class="text-center">
                                                    <img class="icon" src="/fish.svg" alt="" srcset="">
                                                </th>
                                                <th>Fish Name</th>
                                                <th class="text-center">Date Submitted</th>
                                                <th>Result</th>
                                                <th class="text-center">Remarks</th>
                                                <th>Action</th>
                                                <th class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($detections as $item)
                                                <tr class="align-middle">
                                                    <td class="text-center"></td>
                                                    <td>
                                                        {{ $item->fishName }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ (new DateTime($item->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                                    </td>
                                                    <td>
                                                        @if ($item->results)
                                                        @else
                                                            <button class="btn btn-success text-white"
                                                                onclick="startDetect({{ $item->detectionID }})">
                                                                Start Detect
                                                            </button>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $item->remarks }}
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#deleteFishModal"
                                                            onclick="deleteFish({{ $item->detectionID }},'{{ $item->imagePath }}')">
                                                            <img src="/delete.svg" alt="" srcset="">
                                                        </button>
                                                    </td>
                                                    <td class="text-center"></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <div class="col-lg-12">
                                    <div class="pagination">
                                        <ul class="pagination">
                                            @for ($i = 1; $i <= $detections->lastPage(); $i++)
                                                <li class="page-item ">
                                                    <a class="page-link {{ $detections->currentPage() == $i ? 'active' : 'text-dark' }}"
                                                        href="{{ $detections->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    @include('footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    @include('modal.logout')
    @include('modal.userdetect')
    <script>
        function startDetect(id) {
            window.location.href = `/user_detection/${id}`;
        }

        function deleteFish(id, imagePath) {
            let deleteForm = document.getElementById('deleteForm');
            deleteForm.action = `/user_detection/${id}`;

            let deleteImagePath = document.getElementById('deleteImagePath');
            deleteImagePath.value = imagePath;
        }

        function previewImage(event) {
            var files = event.currentTarget.files;
            if (files && files[0]) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('addPhoto');
                    if (output) {
                        output.src = reader.result;
                    }
                };
                reader.readAsDataURL(files[0]);
            }
        }
    </script>
    @if (session()->pull('successAddFish'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Fish Details',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successAddFish') }}
    @endif
    @if (session()->pull('errorAddFileFish'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Something Wrong Happend With The Image, Please Try Again Later',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('errorAddFileFish') }}
    @endif
    @if (session()->pull('errorAddFish'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Add Fish Details Please Try Again Later',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('errorAddFish') }}
    @endif
    @if (session()->pull('imageRequired'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Fish Image Is Required, Please Try Again',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('imageRequired') }}
    @endif
    @if (session()->pull('successDelete'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Fish Detail Record',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDelete') }}
    @endif
    @if (session()->pull('errorDelete'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Delete Fish Detail, Please Try Again',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('errorDelete') }}
    @endif
</body>

</html>
