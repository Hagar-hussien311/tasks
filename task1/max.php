<?php

// $num1  num2  num3
if (isset($_POST['result'])) {
    if($_POST['num1']>$_POST['num2'] && $_POST['num1']>$_POST['num3']){
        if($_POST['num2']>$_POST['num3'])
        {
            // echo "The Maximum Number Is ".$_POST['num1'] . "<br> The Minimum Number Is ".$_POST['num3'] ;
            $msg = "The Maximum Number Is ".$_POST['num1'] . "<br> The Minimum Number Is ".$_POST['num3'] ;
        }
        else{
            // echo "The Maximum Number Is ".$_POST['num1'] . "<br> The Minimum Number Is ".$_POST['num2'] ;
            $msg = "The Maximum Number Is ".$_POST['num1'] . "<br> The Minimum Number Is ".$_POST['num2'];
        }

    }
    elseif($_POST['num2']>$_POST['num1'] && $_POST['num2']>$_POST['num3']){
        if($_POST['num1']>$_POST['num3'])
        {
            // echo "The Maximum Number Is ".$_POST['num2'] . "<br> The Minimum Number Is ".$_POST['num3'] ;
            $msg = "The Maximum Number Is ".$_POST['num2'] . "<br> The Minimum Number Is ".$_POST['num3'] ;
        }
        else{
            // echo "The Maximum Number Is ".$_POST['num2'] . "<br> The Minimum Number Is ".$_POST['num1'] ;
            $msg = "The Maximum Number Is ".$_POST['num2'] . "<br> The Minimum Number Is ".$_POST['num1'] ;
        }
    }
    elseif($_POST['num3']>$_POST['num1'] && $_POST['num3']>$_POST['num2']){
        if($_POST['num1']>$_POST['num2'])
        {
            // echo "The Maximum Number Is ".$_POST['num3'] . "<br> The Minimum Number Is ".$_POST['num2'] ;
            $msg = "The Maximum Number Is ".$_POST['num3'] . "<br> The Minimum Number Is ".$_POST['num2'] ;
        }
        else{
            // echo "The Maximum Number Is ".$_POST['num3'] . "<br> The Minimum Number Is ".$_POST['num1'] ;
            $msg = "The Maximum Number Is ".$_POST['num3'] . "<br> The Minimum Number Is ".$_POST['num1'] ;
        }
    }
}
// if (isset($_POST['min'])) {
//     if($_POST['num1'] < $_POST['num2'] && $_POST['num1'] < $_POST['num3']){
//         echo "number1 is the minimum";
//     }
//     elseif($_POST['num2'] < $_POST['num1'] && $_POST['num2'] < $_POST['num3']){
//         echo "number2 is the minimum";
//     }
//     else{
//         echo "number3 is the minimum";
//     }
// }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Buy Now</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-danger text-center display-4"> Max & Min </h1>
            </div>
            <div class="offset-4 col-4">
                <form method="post">
                    <div class="form-group mb-4">
                        <!-- <label for="num1">Please Enter The First Number</label> -->
                        <input type="number" name="num1" id="num1" class="form-control" placeholder="Please Enter The First Number" aria-describedby="helpId">
                    </div>
                    <div class="form-group mb-4">
                        <input type="number" name="num2" id="num2" class="form-control" placeholder="Please Enter The Second Number" aria-describedby="helpId">
                    </div>
                    <div class="form-group mb-5">
                        <input type="number" name="num3" id="num3" class="form-control" placeholder="Please Enter The Third Number" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                    <button name="result" class="btn btn-success rounded col-12 d-grid">Get Maximum And Minimum</button>
                        <!-- <button name="max" class="btn btn-success rounded">Get Maximum</button> -->
                        <!-- <button name="min" class="btn btn-success rounded">Get Minimum</button> -->
                    </div>
                </form>
                <?php
                    if (isset($msg)) {
                        echo "<div class='alert alert-success'> $msg </div>";
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>