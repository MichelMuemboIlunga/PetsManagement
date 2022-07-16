<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Navbar Dropdown Login and Signup Form with Social Buttons</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <!-- style -->
    <link href="../assets/css/index.css" rel="stylesheet">

    <script>
        $(document).ready(function(){
            function alignModal(){
                var modalDialog = $(this).find(".modal-dialog");

                // Applying the top margin on modal to align it vertically center
                modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
            }
            // Align modal when it is displayed
            $(".modal").on("shown.bs.modal", alignModal);

            // Align modal when user resize the window
            $(window).on("resize", function(){
                $(".modal:visible").each(alignModal);
            });
        });
    </script>
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="../src/index.php"><i class="fa fa-paw" aria-hidden="true"></i>
                    Wisdom Pets</a></h1>
            <!-- For image logo-->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="logo" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#header">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#services">Afford Pets</a></li>
                        <li><a href="#services">Accommodate Your Pets</a></li>
                        <li><a href="#services">Educate Your Pets</a></li>

                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li>
                    <a id='btnlog' class="btn btn-dark btn-sm rounded" data-toggle="modal" data-target="#modalLogin">
                        Login
                    </a>
                </li>
                <li>
                    <a id='btnreg' class="btn btn-dark btn-sm rounded" data-toggle="modal" data-target="#modalRegister">
                        Register
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log In 🐶</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group ">
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="sr-only" for="inlineFormInputGroup">Password</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-lock"></i></i></div>
                            </div>
                            <input type="password" class="form-control" id="inlineForm" placeholder="Password">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnLogin" style="border-radius: 20px;">Login</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register 🐱</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group ">
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user" ></i></div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="inlineFormInputGroup">Password</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-lock"></i></i></div>
                            </div>
                            <input type="password" class="form-control" id="inlineForm" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="inlineFormInputGroup">Confirm Password</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-lock"></i></i></div>
                            </div>
                            <input type="password" class="form-control" id="inlineForm" placeholder="ConfirmPassword">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnRegister" style="border-radius: 20px;">Register</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>



