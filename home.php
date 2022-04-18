<?php 
    require_once("auth.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="assets/gaming.png">
    <script src="https://unpkg.com/typeit@8.4.0/dist/index.umd.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".preloader").delay(5000).fadeOut();
        })
    </script>

    <style>
        preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }

        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    </style>

    <title>Welcome - <?php echo $_SESSION["user"]["fullname"] ?>!</title>
</head>

<body>
    <!-- <div class="preloader">
        <div class="loading">
            <img src="assets/9844-loading-40-paperplane.gif" width="350">
            <p class="text-center text-dark">Loading ...</p>
        </div>
    </div> -->
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="assets/53943-gamer.gif" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <h5>Welcome, <?php echo $_SESSION["user"]["fullname"]; ?>!</h5>
                </div>
                <div class="mb-3">
                    <a href="game/index.html"><button class="btn btn-outline-primary">Play Games!</button></a>
                    <a href="logout.php" class="text-decoration-none text-dark"><button
                            class="btn btn-outline-danger">Exit Games...</button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(".preloader").delay(5000).fadeout();
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>