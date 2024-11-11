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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/./css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
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

        #spinner {
            opacity: 100 !important;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="show container">

            <div class="row">
                <div class="col-lg-12">
                    <center>
                        Scanning Your Image ...
                    </center>
                </div>
            </div>
            <br>
            <center>
                <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only"></span>
                </div>
            </center>
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
                    <h1 class="mb-4">Detection Results</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex">
                    <img id="imgResult" class="me-5" style="height: 450px; width: 350px;"
                        src="{{ $detections->imagePath }}" alt="" srcset="">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12 content" id="content">
                                <h1>Result: <b id="resultText" class="text-danger">White Spot Detected</b></h1>
                                <div id="content2">
                                    <h2>Next Steps for Managing White Spot Disease</h2>

                                    <div class="alert">
                                        <p><strong>White spots detected on your fish. This may indicate Ich disease.
                                                Follow
                                                the steps below to manage it effectively.</strong></p>
                                    </div>

                                    <h2>1. Confirm the Diagnosis</h2>
                                    <ul>
                                        <li>Ensure that the white spots are not part of the natural pattern or an
                                            unrelated
                                            condition.</li>
                                        <li>If unsure, consult with an expert (veterinarian or aquarium professional).
                                        </li>
                                    </ul>

                                    <h2>2. Quarantine the Affected Fish</h2>
                                    <ul>
                                        <li>Move the affected fish to a separate quarantine tank to prevent the spread
                                            of
                                            the disease.</li>
                                        <li>Ensure the quarantine tank has proper water conditions (temperature, pH,
                                            salinity, etc.).</li>
                                    </ul>

                                    <h2>3. Adjust Water Conditions</h2>
                                    <ul>
                                        <li><strong>Increase Temperature:</strong> Raise the water temperature to about
                                            28-30°C (82-86°F) to speed up the life cycle of the parasite.</li>
                                        <li><strong>Increase Aeration:</strong> Ensure proper oxygenation to reduce
                                            stress
                                            on the fish.</li>
                                    </ul>

                                    <h2>4. Treat the Disease</h2>
                                    <ul>
                                        <li>Use an <strong>anti-Ich medication</strong> specifically designed for white
                                            spot
                                            disease.</li>
                                        <li>Follow the manufacturer's instructions carefully regarding dosage and
                                            treatment
                                            duration.</li>
                                    </ul>

                                    <h2>5. Monitor the Fish’s Health</h2>
                                    <ul>
                                        <li>Observe the affected fish for signs of improvement or worsening of symptoms.
                                        </li>
                                        <li>Look for additional symptoms like lethargy, loss of appetite, or abnormal
                                            swimming behavior.</li>
                                    </ul>

                                    <h2>6. Improve Water Quality</h2>
                                    <ul>
                                        <li>Perform a partial water change (25-30%) in both the quarantine and main
                                            tanks to
                                            reduce parasite load.</li>
                                        <li>Regularly test water parameters (ammonia, nitrites, nitrates, pH) to ensure
                                            optimal conditions.</li>
                                    </ul>

                                    <h2>7. Follow Up</h2>
                                    <ul>
                                        <li>After the treatment period, evaluate whether the white spots are gone.</li>
                                        <li>If necessary, repeat treatment or consult an expert.</li>
                                        <li>Gradually acclimate the recovered fish back into the main tank, ensuring
                                            that
                                            water parameters are similar between tanks.</li>
                                    </ul>

                                    <h2>8. Prevent Future Outbreaks</h2>
                                    <ul>
                                        <li>Clean and disinfect all equipment (nets, decorations, filters) that came
                                            into
                                            contact with the infected fish.</li>
                                        <li>Quarantine new fish for at least 2-3 weeks before introducing them to the
                                            main
                                            tank.</li>
                                        <li>Maintain good tank hygiene by performing regular water changes and
                                            monitoring
                                            water quality.</li>
                                    </ul>

                                    <div class="next-steps">
                                        <p><strong>By following these steps, you'll help ensure the recovery of your
                                                fish
                                                and prevent further outbreaks.</strong></p>
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main2.js"></script>
    @include('modal.logout')
    <script></script>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const imagePath = "{{ $detections->imagePath ?? '' }}"; // Retrieve image path from Laravel variable
            const imageContainer = document.getElementById("image-container"); // The container to display the image
            const maxRetries = 3; // Maximum number of retries
            const retryDelay = 5000; // Delay in milliseconds between retries
            let retries = 0;

            function fetchImageWithRetry() {
                fetch('http://localhost:5000/show_results')
                    .then(response => response.json())
                    .then(data => {
                        imgSlice = imagePath.split("/")
                        console.log(imgSlice)
                        if (data.images && data.images.includes(imgSlice[3])) {
                            imgSlice = imagePath.split("/")
                            console.log(`Image ${imgSlice[2]} is present in the results.`);

                            // Create an image element
                            const img = document.getElementById("imgResult");
                            img.src = `http://localhost:5000/display_image/${imgSlice[3]}`;
                            img.alt = "Detected White Spot Image";

                            // Append the image to the container
                            // imageContainer.appendChild(img); 
                            document.getElementById('spinner').setAttribute("style", "opacity: 0 !important;");
                            document.getElementById('spinner').removeAttribute("class");
                            document.getElementById('spinner').setAttribute("class",
                                "bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
                            );
                            return;
                        } else {
                            console.log(`Image ${imagePath} is not found in the results.`);
                            // imageContainer.innerHTML = "<p>Image not found in the results.</p>";
                            retries++;
                            if (retries < maxRetries) {
                                setTimeout(fetchImageWithRetry, retryDelay);
                            } else {
                                console.log("Max retries reached. Could not fetch image.");
                                document.getElementById('spinner').setAttribute("style",
                                    "opacity: 0 !important;");
                                document.getElementById('spinner').removeAttribute("class");
                                document.getElementById('spinner').setAttribute("class",
                                    "bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
                                );
                                document.getElementById('resultText').innerHTML = "No White Spot Detected";
                                document.getElementById('resultText').setAttribute("style",
                                    "color: green !important;");

                                document.getElementById('content2').setAttribute("style",
                                    "opacity: 0 !important;");
                            }
                        }
                    })
                    .catch(error => {
                        retries++;
                        console.error("Error fetching images:", error);

                        // Retry with delay if maximum retries are not reached
                        if (retries < maxRetries) {
                            setTimeout(fetchImageWithRetry, retryDelay);
                        } else {
                            console.log("Max retries reached. Could not fetch image.");
                            document.getElementById('spinner').setAttribute("style", "opacity: 0 !important;");
                            document.getElementById('spinner').removeAttribute("class");
                            document.getElementById('spinner').setAttribute("class",
                                "bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
                            );
                            document.getElementById('resultText').innerHTML = "No White Spot Detected";
                                document.getElementById('resultText').setAttribute("style",
                                    "color: green !important;");
                            document.getElementById('content2').setAttribute("style",
                                "opacity: 0 !important;");
                        }
                    });
            }

            // Start the first fetch attempt
            fetchImageWithRetry();
        });
    </script>
</body>

</html>
