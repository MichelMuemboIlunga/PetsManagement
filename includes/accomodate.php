<?php

require_once ('../controller/authLoginController.php');


// registering user to the database
if (isset($_POST['submitReg'])) {
    // checking character in the input field
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $petName = mysqli_real_escape_string($conn, $_POST['petName']);
    $petImage = mysqli_real_escape_string($conn, $_POST['petImage']);
    $category = mysqli_real_escape_string($conn, $_POST['myCategories']);
    $dtTime = mysqli_real_escape_string($conn, $_POST['dTime']);
    $ptTime = mysqli_real_escape_string($conn, $_POST['pTime']);
    $petDesc = mysqli_real_escape_string($conn, $_POST['petDesc']);

    // validating form
    if (empty($username)) { array_push($errors, "Full name is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }
    if (empty($phone)) { array_push($errors, "Phone is required"); }


    // inserting user details in the database table.
    $statement = "INSERT INTO tPetAccomodation (username, address, phone, image, category, timeFrom, timeTo, description)
            VALUES('$username', '$address', '$phone', '$petName', '$petImage', '$category', '$dtTime', '$ptTime', '$petDesc')";



    // running query in the database
    mysqli_query($conn, $statement);
    // redirecting to the login page
    header('location: ../src/index.php');

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Services</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="../assets/img/dog-paw.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- style -->
    <link href="../assets/css/services.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../assets/js/main.js" defer></script>

</head>
<body>
<section class="showcase">
    <div class="video-container">
        <video src="../assets/video/back.mp4" autoplay muted loop></video>
    </div>
    <div class="content">
        <h1>Accommodate Your Pets</h1>
        <h3>Always taking care of your wonderful pet because it matter to us.</h3>
        <a type="button" class="btn1"  data-toggle="modal" data-target="#exampleModal">Register your Pet</a>
        <a href="../src/index.php" class="btn2">Go back</a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Register your Pets</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:blue;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action=""  method="POST" id="postData">
                        <div class="form-group">
                            <input type="text" class="form-control" id="recipient-name"  name="username" value="<?php echo $_SESSION['email'];?>" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="recipient-address" placeholder="Your address" name="address">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="recipient-phone" placeholder="Your phone number" name="phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="pet-name" placeholder="Pet name" name="petName">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="pet-image" accept="image/*" placeholder="Pet image" name="petImage">
                        </div>
                        <div class="form-group">
                            <input list="category" name="myCategories" id="pet-category" class="form-control" style="width: 468px" placeholder="Pet category"/>

                            <datalist id="category">
                                <option value="Dogs">
                                <option value="Cats">
                                <option value="Birds">
                                <option value="Horses">
                            </datalist>
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" class="form-control" id="recipient-name" placeholder="Dropping time" name="dTime">
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" class="form-control" id="recipient-name" placeholder="Picking time" name="pTime">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message-text" placeholder="Please Describe your Pets in 200 words" name="petDesc"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btnRegPet" name="submitReg" id="savePet" >Register Pet</button>
                        </div>
                    </form>

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

<script type="text/javascript">
$(document).ready(function() {

  // Sending Form data to the server
  $("#postData").submit(function(e) {
    alert("Please data");
    // e.preventDefault();
    // $.ajax({
    //   url: '../../controller/dogServiceController.php',
    //   method: 'post',
    //   data: $('form').serialize() + "&action=order",
    //   success: function(response) {
    //     $("#order").html(response);
    //   }
    // });
  });
});


</script>

</html>
