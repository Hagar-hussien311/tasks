<?php

define('surcharge', 0.20);

if ($_POST) {
    // $bill = $_POST['num'] * 
    switch ($_POST['num']) {
        case $_POST['num'] <= 50:
            $unit = 0.5;
            break;
        case $_POST['num'] > 50 && $_POST['num'] <= 150:
            $unit = 0.75;
            break;
        case $_POST['num'] > 150 && $_POST['num'] <= 250:
            $unit = 1.2;
            break;
        case $_POST['num'] > 250 && $_POST['num'] <= 150:
            $unit = 1.5;
            break;
    }
    $bill =$_POST['num'] * $unit ;
    $total = $bill + ($bill * surcharge);

}

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
                <h1 class="text-danger text-center display-4"> Calculate Electricity Bill </h1>
            </div>
            <div class="offset-3 col-6">
                <form method="post">
                    <div class="form-group mb-4">
                        <!-- <label for="num">Please Enter Electricity Unit Charges</label> -->
                        <input type="number" required name="num" id="num" class="form-control" placeholder="Please Enter Electricity Unit Charges" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button name="check" class="btn btn-success rounded d-grid col-12">Calculate The Bill</button>
                    </div>
                </form>
                <?php
                if (isset($total)) {
                    echo "<h4>Your Total Bill Is <strong> $total EGP </strong> </h4>";
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