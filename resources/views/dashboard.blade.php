<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title>GD5_X_YYYYY</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    
    <style>
        .container{
            object-fit: cover;
        }
        .offcanvas {
            background-color: #1C0414;
        }
        .offcanvas-header{
            padding-bottom: 0;
        }
        .offcanvas-body {
            padding-top: 0;
            flex-grow: 0;
            letter-spacing: 1px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .offcanvas-body img {
            width: 300px;
            height: 226px;
            object-fit: contain;
            margin-bottom: 40px;
        }

        .transparent-bg {
            background-color: transparent !important;
            color: white !important;
        }

        .header-option {
            font-family: goldenbook, serif;
            font-style: normal;
            font-size: 24px;
            text-decoration: none;
            color: white;
        }

        .header-option p {
            margin: 26px 0;
            
        }
        .header-option:hover {
            color: #D6B56E;
        }

        .header-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-dark transparent-bg pt-0">
            <div class="ms-3 mt-3">
                <button class="btn btn-outline transparent-bg"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                    aria-controls="offcanvasTop">
                    <i class="fa-solid fa-bars-staggered fa-xl" style="color:#FFFFFF;"></i>
                </button>
            </div>
        </nav>
        
        <div class="offcanvas offcanvas-top h-100" tabindex="-1"
        id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <button style="float:left;" class="btn btn-outline transparent-bg ms-2 mt-2"
                    data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-xl" style="color: #ffffff;"></i>
                </button>
            </div>

            <div class="offcanvas-body">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <a href="{{ url('/') }}" class="header-option">
                    <div>
                        <p>HOME</p>
                    </div>
                </a>
                <a href="{{ url('/merch') }}" class="header-option">
                    <div>
                        <p>ABOUT</p>
                    </div>
                </a>
                <a href="{{ url('/ticket') }}" class="header-option">
                    <div>
                        <p>GET THE TICKETS</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="container">
            @yield('content')
        </div>

    </div>
    <!-- ... (scripts and assets) ... -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>