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
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/#about" class="nav-item nav-link">About</a>
                        <a href="/#service" class="nav-item nav-link">Services</a>
                        <a href="/#faqs" class="nav-item nav-link">FAQs</a>
                        <a href="/#team" class="nav-item nav-link">Our Team</a>
                        <a href="/user_detection" class="nav-item nav-link">Detection</a>
                        <a style="cursor: pointer" class="nav-item nav-link" data-bs-toggle="modal"
                            data-bs-target="#logoutModal">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/about-img.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div>
                    <h1 class="mb-4">Passionate About Fish Health, Driven by AI</h1>
                    <p class="mb-4">At Aqua Care, we blend passion with technology to protect your aquatic friends.
                        Our AI-powered tool is designed to help fish owners detect white spot disease early, ensuring
                        healthier, happier fish.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5" id="service">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div>
                    <h1 class="mb-4">Your Go-To Solution for White Spot Disease Detection</h1>
                    <p class="mb-4">With Aqua Care, you get precise white spot detection at your fingertips. Just
                        upload an image, and we’ll help you spot signs of disease early.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-robot fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Quick & Easy Detection</h5>
                                        <p>Upload a photo, and our AI instantly analyzes it for white spots, delivering
                                            results within seconds.</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-power-off fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">User-Friendly Experience</h5>
                                        <p>Designed for all skill levels, Aqua Care makes fish health monitoring simple
                                            and accessible.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-graduation-cap fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Peace of Mind for Fish Owners</h5>
                                        <p>Get reassurance about your fish’s health with each scan, helping you keep
                                            their environment disease-free</p>
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




    <!-- FAQs Start -->
    <div class="container-fluid py-5" id="faqs">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
                <h1 class="mb-4">Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What is white spot disease?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    White spot disease, or "Ich," is a common fish illness caused by a parasite that
                                    appears as small white spots on the fish’s body and fins. Early detection is key to
                                    effective treatment and recovery.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does Aqua Care detect white spots?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Aqua Care uses an AI-driven model trained to recognize signs of white spot disease.
                                    Just upload a clear image of your fish, and our technology will analyze it to detect
                                    any visible white spots.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How accurate is Aqua Care’s detection?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Our AI model is developed with high accuracy in mind, specifically trained to
                                    recognize white spots on fish. While it’s a reliable tool, it’s important to consult
                                    a professional if you notice any other unusual signs in your fish.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Do I need to pay for white spot detection?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Currently, Aqua Care offers free access to white spot detection to help fish owners
                                    keep their pets healthy. Future updates may include premium features to enhance the
                                    detection experience.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    What should I do if white spots are detected?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    If Aqua Care detects white spots, we recommend isolating the affected fish and
                                    consulting an aquatic veterinarian. Early treatment is essential to prevent the
                                    spread of disease in your aquarium.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Can Aqua Care detect other fish diseases?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Aqua Care is focused on detecting white spot disease at this time. However, we are
                                    constantly working to expand our AI’s capabilities and may add more detection
                                    features in the future.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    What type of image should I upload for the best results?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="headingSeven" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    For accurate detection, please upload a clear, high-quality image where the fish is
                                    fully visible. Avoid blurry or obstructed images, as they may affect detection
                                    accuracy.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    Is my data secure when I upload photos to Aqua Care?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="headingEight" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Absolutely. Aqua Care prioritizes your privacy and security. All uploaded images are
                                    processed securely, and we do not store any personal data beyond what is necessary
                                    for detection.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->


    @include('team')


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

    <script>
        function togglePasswordVisibility2() {
            var passwordField = document.getElementById("password2");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }

        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var confirmPasswordField = document.getElementById("confimpass");
            if (passwordField.type === "password" && confirmPasswordField.type === "password") {
                passwordField.type = "text";
                confirmPasswordField.type = "text";
            } else {
                passwordField.type = "password";
                confirmPasswordField.type = "password";
            }
        }
    </script>
    @if (session()->pull('successLogin'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Login Successfully',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successLogin') }}
    @endif
    @if (session()->pull('existingUsername'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Existing Username, Please Try Again Later',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('existingUsername') }}
    @endif
    @if (session()->pull('errorCreateAccount'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Create Account, Please Try Again Later',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('errorCreateAccount') }}
    @endif
    @if (session()->pull('errorPasswordNotMatch'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Password Doesn\'t Match, Please Try Again',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('errorPasswordNotMatch') }}
    @endif
    @if (session()->pull('wrongUsernameOrPass'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Wrong Username or Password',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('wrongUsernameOrPass') }}
    @endif
</body>

</html>
