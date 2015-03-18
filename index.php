<?php
require_once "php/factorial.php";
$factor = new Factorial();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Factorial! Calculator</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <nav>
    </nav>
</header>
<section>
    <div class="container-fluid">
        <div class="col-md-offset-4 col-md-4">
            <h1 class="text-center">Factorial Calculator</h1>

            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="number">Please enter a number to get the factorial. A factorial calculation is n! =
                        n(n-1)(n-2)...</label>
                    <input class="form-control" type="int" id="number" name="number" placeholder="Please enter a number"
                           value="<?php echo $factor->getUserNumber() ?>">

                    <div class="text-center">
                        <button class="btn btn-danger" type="submit">Enter</button>
                    </div>
                </div>
            </form>
            <h1 class="text-center">The answer is: <?php echo $factor->calculate($_GET["number"]); ?></h1>
        </div>
    </div>
</section>
<footer>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>