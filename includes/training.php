<?php





// creating connection to the database
include '../config/db.php';
$errors = array();
// validation

// validating form
if(isset($_POST['next'])){
    if (empty($name)) { array_push($errors, "Full name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }
    if (empty($phone)) { array_push($errors, "Phone is required");}
    if (empty($petName)) { array_push($errors, "Pet Name is required");}
    if (empty($petCategory)) { array_push($errors, "petCategory is required");}
    if (empty($petBreed)) { array_push($errors, "Pet breed is required");}
    if (empty($petDescription)) { array_push($errors, "Pet description is required");}
}


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $petName = mysqli_real_escape_string($conn, $_POST['petName']);
    $petCategory = mysqli_real_escape_string($conn, $_POST['petCategory']);

    // $petImage = $_FILES['petImage']['name'];  // find out how to send image to db
    // // image file directory
    // $target = "../assets/img/upload".basename($petImage);




    $petBreed= mysqli_real_escape_string($conn, $_POST['petBreed']);
    $petDescription = mysqli_real_escape_string($conn, $_POST['petDescription']);

    if(empty($name || $email || $address || $phone || $petName || $petImage || $petBreed || $petDescription)){
        echo '<script>alert("Please fill up all the form");</script>';
    }
    else if (mysqli_query($conn, "INSERT INTO tTrain(first_name, email, address, phone, pet_name, pet_category, pet_breed, pet_description)
         VALUES('" . $name . "', '" . $email . "', '" . $address . "', '" . $phone . "', '" . $petName . "', '" . $petCategory . "', '" . $petBreed . "', '" . $petDescription . "')")) {
        echo '<script>alert("Great you are successfully register your Pet 🐕‍");</script>';
    } else {
        echo '<script>alert("OOPS! Failed to register your Pet 🐕‍");</script>';
    }


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accommodate Pets</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

    <!-- style -->
    <link href="../assets/css/services.css" rel="stylesheet">

    <!-- javascript -->
    <script src="../assets/js/form.js" defer></script>



    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        #train_form fieldset:not(:first-of-type) {
            display: none;
        }
        .submit:hover {
            background-color: deepskyblue;
        }

    </style>

</head>
<body>

<section class="showcase">
    <div class="video-container">
        <video src="../assets/video/Train.mp4" autoplay muted loop></video>
    </div>
    <div class="content">
        <h1>Train Your Pets</h1>
        <h3>Always taking care of your wonderful pet because it matter to us.</h3>
        <a type="button" class="btn1"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Register your Pet</a>
        <a href="../src/index.php" class="btn2">Go back</a>

        <br>
        <br>
        <div class="collapse" id="collapseExample" style="background-color: transparent !important;">
            <div class="card card-body" >
                <div class="container" style="background-image: linear-gradient(to right, #ec77ab 0%, #7873f5 100%);">

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <form id="train_form" novalidate action="Training.php"  method="post">
                        <?php
                        // including errors.php file
                        include('errors.php');
                        ?>
                        <fieldset>
                            <h2>Owner details</h2>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control"  id="name" name="name" placeholder="Your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <input type="button" class="next btn btn-info btn-sm" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2>Owner details</h2>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Your Address">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" name="phone" id="last_name" placeholder="your phone number">
                            </div>
                            <input type="button" name="previous" class="previous btn btn-secondary btn-sm" value="Previous" />
                            <input type="button" name="next" class="next btn btn-info btn-sm" value="Next"/>
                        </fieldset>

                        <fieldset>
                            <h2>Pet details</h2>
                            <div class="form-group">
                                <label for="petName">Pet name</label>
                                <input type="text" class="form-control" name="petName" id="petName" placeholder="Your pet name">
                            </div>
                            <div class="form-group">
                                <label for="petCategory">Pet category</label>
                                <input list="category" name="petCategory" id="petCategory" class="form-control"  placeholder="Your pet category"/>

                                <datalist id="category">
                                    <option value="Dogs">
                                    <option value="Cats">
                                    <option value="Birds">
                                    <option value="Horses">
                                </datalist>

                            </div>
                            <input type="button" name="previous" class="previous btn btn-secondary btn-sm" value="Previous" />
                            <input type="button" name="next" class="next btn btn-info btn-sm" value="Next" name="next" />

                        </fieldset>
                        <fieldset>
                            <h2>Pet details</h2>
                            <div class="form-group">
                                <label for="petImage">Pet image</label>
                                <input type="file" class="form-control" name="petImage" id="petImage" placeholder="Your pet picture"/>
                            </div>
                            <input type="button" name="previous" class="previous btn btn-secondary btn-sm" value="Previous" />
                            <input type="button" name="next" class="next btn btn-info btn-sm" value="Next"/>

                        </fieldset>
                        <fieldset>
                            <h2>Pet details</h2>
                            <div class="form-group">
                                <label for="petBreed">Pet breed</label>
                                <input type="text" class="form-control" name="petBreed" id="petBreed" placeholder="Your Pet Breed">
                            </div>
                            <div class="form-group">
                                <label for="petDescription">Training description</label>
                                <textarea  class="form-control" name="petDescription" placeholder="What Kind of Training You want for your pet? " id="petDescription"></textarea>
                            </div>
                            <input type="button" name="previous" class="previous btn btn-secondary btn-sm" value="Previous" />
                            <input type="submit" name="submit" class="submit btn btn-success btn-sm" value="Submit" />
                        </fieldset>
                    </form>
                   <br>
                </div>
            </div>
        </div>

    </div>
</section>

</body>

<!-- Javascript -->
<script src="../assets/js/jquery-1.11.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.backstretch.min.js"></script>
<script src="../assets/js/scripts.js"></script>
<script>

</script>
</html>
