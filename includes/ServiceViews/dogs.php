<?php
include('../../controller/dogServiceController.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" type="image/png" href="../../assets/img/dog-paw.png">
    <title>Shopping Cart</title>
</head>
<body>
<!-- navbar-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="../../src/index.php"><i class="fa fa-paw" aria-hidden="true"></i>
        Wisdom Pets</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="dogs.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../petSelling.php">Categories</a>
            </li>

            <?php
            if(!empty($_SESSION["shopping_cart"])) {
            $cart_count = count(array_keys($_SESSION["shopping_cart"]));
            ?>
            <li class="nav-item">
                <a class="nav-link" href="cartDogs.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span id="cart-item" class="badge badge-danger">

                      <?php echo $cart_count; ?>

                    </span>
                </a>
            </li>
                <?php
            }
            ?>
        </ul>
    </div>
</nav>
<!-- navbar-->
<div class="container">
    <div id="message"> <?php echo $status; ?> </div>
    <div class="row mt-4 pb-2">
        <?php
        $result = mysqli_query($conn,"SELECT * FROM tDogsProduct");
        while($row = mysqli_fetch_assoc($result)):
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="card-deck">
                    <div class="card p-2 border-secondary mb-2">
                        <img src="<?= $row['image'] ?>" alt="Product Image" class="card-img-top img-responsive" height="250"/>

                        <div class="card-body p-1">
                            <h4 class="card-title text-center text-info"><?= $row['productName']?></h4>
                            <h5 class="card-text text-center text-danger">

                                R <?= number_format($row['price'], 2)?></h5>
                        </div>
                        <div class="card-footer p-1">
                            <form method="POST" >
                                <input type="hidden" name="code" value="<?= $row['code'] ?>"/>
                                <input type="hidden" class="image" value="<?= $row['image'] ?>"/>
                                <input type="hidden" class="name" value="<?= $row['productName'] ?>"/>
                                <input type="hidden" class="price" value="<?= $row['price'] ?>"/>

                                <button class="btn btn-info btn-block addItemBtn" name="add_to_cart" > <i class="fa fa-cart-plus"></i> &nbsp; Add to Cart</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
