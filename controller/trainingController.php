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
    if (empty($petImage)) { array_push($errors, "petImage is required");}
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

    $petImage = $_FILES['petImage']['name'];  // find out how to send image to db
    // image file directory
    $target = "../assets/img/upload".basename($petImage);




    $petBreed= mysqli_real_escape_string($conn, $_POST['petBreed']);
    $petDescription = mysqli_real_escape_string($conn, $_POST['petDescription']);

    if(empty($name || $email || $address || $phone || $petName || $petImage || $petBreed || $petDescription)){
        echo '<script>alert("Please fill up all the form");</script>';
    }
    else if (mysqli_query($conn, "INSERT INTO tbl_pet_train(first_name, email, address, phone, pet_name, pet_category,petImage, pet_breed, pet_description)
         VALUES('" . $name . "', '" . $email . "', '" . $address . "', '" . $phone . "', '" . $petName . "', '" . $petCategory . "', '" . $petImage . "', '" . $petBreed . "', '" . $petDescription . "')")) {
        echo '<script>alert("Great you are successfully register your Pet 🐕‍");</script>';
    } else {
        echo '<script>alert("OOPS! Failed to register your Pet 🐕‍");</script>';
    }


}
?>
