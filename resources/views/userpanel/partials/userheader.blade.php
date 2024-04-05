<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KMD</title>

    {{-- Bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <header id="header" class="">

        <div class="container-fluid bg-white text-dark">
            <div>
                <i class="bi bi-telephone-plus-fill fs-4"></i>
                <a href="" class="btn">+959 428 055 067</a>,
                <a href="" class="btn"> +959 262 600 450</a>
                <div class="float-end fs-4 me-2">
                    <a href=""><i class="bi bi-facebook"></i></a>
                </div>
            </div>

        </div>

        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://kmd.com.sg/images/logo/logo1.png" alt="KMD" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                                href="{{ url('/') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">COMPANY</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                LINE OF BUSINESS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Education</a></li>
                                <li><a class="dropdown-item" href="#">Exam Services</a></li>
                                <li><a class="dropdown-item" href="#">Retail Sales</a></li>
                                <li><a class="dropdown-item" href="#">Distribution</a></li>
                                <li><a class="dropdown-item" href="#">Enterprise Solutions</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">JOB OPENINGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('userpanel.index') }}">
                                NEWS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">CONTACT US</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

    </header>
