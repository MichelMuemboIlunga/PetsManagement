<?php
session_start();

// creating connection to the database

// include '../config/db.php';
$conn = mysqli_connect('localhost', 'root', '', 'PetManagement'); //TODO: Find a way to include connection file
$status="";


if(isset($_POST["add_to_cart"])) {
    if (isset($_POST['code']) && $_POST['code'] != "") {
        $code = $_POST['code'];
        $result = mysqli_query($conn, "SELECT * FROM tDogsProduct WHERE code='$code'");
        $row = mysqli_fetch_assoc($result);
        $name = $row['productName'];
        $code = $row['code'];
        $price = $row['price'];
        $image = $row['image'];

        $cartArray = array(
            $code => array(
                'name' => $name,
                'code' => $code,
                'price' => $price,
                'quantity' => 1,
                'image' => $image)
        );

        if (empty($_SESSION["shopping_cart"])) {
            $_SESSION["shopping_cart"] = $cartArray;
            $status = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                          <strong>Great !</strong> Product successfully Added to your Cart.
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>";
        } else {
            $array_keys = array_keys($_SESSION["shopping_cart"]);
            if (in_array($code, $array_keys)) {
                $status = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                          <strong>OOPS !</strong> Product Already Added to your Cart.
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>";
            } else {
                $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray);
                $status = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                          <strong>Great !</strong> Product successfully Added to your Cart.
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>";
            }

        }
    }
}
?>
