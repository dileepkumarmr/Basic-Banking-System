<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System | The Sparks Bank</title>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container-fluid">

        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3>Welcome to</h3>
                    <h1>Sparks Bank 💸</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2" style="max-width: 50%; padding:50px;">
            </div>
        </div>


        <div class="row activity text-center">
            <div class="col-md act">
                <img src="img/user.png" class="img-fluid" style="max-width: 50%; padding:50px;">
                <br>
                <a href="addUser.php"><button>Add new Customer</button></a>
            </div>
            <div class="col-md act">
                <img src="img/transfer.png" class="img-fluid" style="max-width: 50%; padding:50px;">
                <br>
                <a href="transfermoney.php"><button>Make a Transaction</button></a>
            </div>
            <div class="col-md act">
                <img src="img/history.png" class="img-fluid" style="max-width: 50%; padding:60px;">
                <br>
                <a href="transactionhistory.php"><button>Transaction History</button></a>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-2">
        <!-- <p>&copy 2023. <br> The Sparks Foundation</p>-->


        <footer class="section-p1">
            <div class="sectin">
                <div class="col">
                    <h4>Contacts</h4>
                    <p><strong>Address: </strong> Welligngton Road</p>
                    <p><strong>Phone: </strong>+91 2222 365</p>
                </div>

                <div class="col">
                    <h4>About</h4>
                    <a href="">About Us</a>
                    <a href="">Privacy Policy</a>
                    <a href="">Terms & Conditions</a>
                    <a href="">Contact Us</a>
                </div>

                <div class="col">
                    <h4>My account</h4>

                    <a href="">Help</a>
                </div>
            </div>
            <div class="copyright">
                <p>© 2023. All Rights Reserved. The Sparks Foundation </p>
            </div>
        </footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>






</body>

</html>