<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .navsec {
            position: relative;
            top: 0;
        }

        .header1 {
            background-color: white;
            color: #2582A1;
            width: 83%;
            margin: auto;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: 120px;
        }

        .header1 a i {
            color: #2582A1 !important;
        }

        .header1 img {
            max-width: 100%;
            height: auto;
        }

        .header1 input {
            padding: 6px;
            border-radius: 50px;
            outline: none;
            border: 1px solid #D020B0;
        }

        .header1 .social-icons i {
            color: #2582A1;
            font-size: 18px;
        }

        nav {
            width: 70%;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            margin: 0 auto;
            background-color: white !important;
            position: absolute !important;
            z-index: 99;
            left: 15%;
        }

        nav ul {
            width: 100%;
            justify-content: space-evenly;
        }

        .navbar-nav .nav-item .nav-link {
            color: #2582A1;
        }

        #slider .carousel-caption {
            left: 10%;
            right: 10%;
            top: 50%;
            transform: translateY(-50%);
            text-align: left;
        }

        #slider .carousel-caption h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2582A1;
        }

        #slider .carousel-caption p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 1rem;
        }

        #slider .carousel-caption .btn-primary {
            background-color: #2582A1;
            border-color: #2582A1;
        }

        #slider .carousel-caption .btn-secondary {
            background-color: #D020B0;
            border-color: #D020B0;
        }

        .headerlogo {
            display: none;
        }

        .headerlogo img {
            width: 215px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            display: none;
        }


        .dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 10px;
    background-color: inherit;
    color: #2582A1;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 500px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

        @media only screen and (max-width:768px) {
            nav {
                width: 100%;
            }

            .topheader {
                display: none;
            }

            .header1 {
                display: none;
            }

            .headerlogo {
                display: block;
            }

            nav {
                left: 0;
            }

            .carousel-item {
                margin-top: 92px;
            }
        }
    </style>
</head>

<body>

    <section class="navsec">
        <header class="header1">
            <div class="container-fluid topheader">
                <div class="row align-items-center">
                    <div class="col-12 col-md-2 text-center text-md-left">
                        <a href="#"><img src="Images/logo.jpg" class="img-fluid" alt="Logo"></a>
                    </div>
                    <div class="col-12 col-md-4 text-center my-2 my-md-0">
                        <input type="search" placeholder="Search your test" class="form-control">
                    </div>
                    <div class="col-12 col-md-3 text-center text-md-right">
                        <a href="tel:+917888030303" class="d-block d-md-inline-block"><i class="fa fa-phone"
                                aria-hidden="true"></i> +91-78880 30303</a>
                    </div>
                    <div class="col-12 col-md-3 text-center text-md-right">
                        <ul class="social-icons list-inline my-2 my-md-0">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"
                                        aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand headerlogo" href="#">
                    <img src="Images/logo.jpg" class="img-fluid" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto gap-2">
                        <li class="nav-item rounded">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <div class="nav-item dropdown">
                            <button class="dropbtn nav-link dropdown-toggle">Services</button>
                            <div class="dropdown-content">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#">Package</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navigation Section -->
</body>

</html>