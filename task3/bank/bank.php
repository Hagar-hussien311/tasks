<?php

// $num1  num2  num3
if (isset($_POST['result'])) {
    if ($_POST['year'] <= '3') {
        $interest = 0.1;
        $afterInterest = $_POST['amount'] * $interest * $_POST['year'];
        $total = $afterInterest + $_POST['amount'];
        $totalMonthly = $total / ($_POST['year'] * 12);
    } elseif ($_POST['year'] > '3') {
        $interest = 0.15;
        $afterInterest = $_POST['amount'] * $interest * $_POST['year'];
        $total = $afterInterest + $_POST['amount'];
        $totalMonthly = $total / ($_POST['year'] * 12);
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background: #555 url(images/bank1.jpg) no-repeat;
            background-blend-mode: multiply;
            background-size: cover;
        }

        .bank {
            font-size: 400%;
            color: transparent;
            -webkit-text-stroke: 3px white;
            font-family: Arial, Helvetica, sans-serif;

        }

        label {
            font-size: 130%;
            font-weight: 500;
            filter: drop-shadow(5px 5px 8px #ffffff);
        }
        th , td {
            font-size: 115%;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <h1 class=" text-center display-4 bank "> <strong>HSB Bank</strong> </h1>
            </div>
            <div class="offset-4 col-4">
                <form method="post">
                    <div class="form-group mb-4">
                        <label for="name" class="text-white">User Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php 
                        if (isset($_POST['name'])) {
                            echo $_POST['name'];
                        }?>" placeholder="Please Enter Your Name" aria-describedby="helpId">
                    </div>
                    <div class="form-group mb-4">
                        <label for="amount" class="text-white">Loan Amount</label>
                        <input type="number" name="amount" id="amount" class="form-control" value="<?php 
                        if (isset($_POST['amount'])) {
                            echo $_POST['amount'];
                        }?>" placeholder="Please Enter The Amount Of Your Loan" aria-describedby="helpId">
                    </div>
                    <div class="form-group mb-5">
                        <label for="year" class="text-white">Loan Years</label>
                        <input type="number" name="year" id="year" class="form-control" value="<?php 
                        if (isset($_POST['year'])) {
                            echo $_POST['year'];
                        }?>" placeholder="Please Enter Number Of Years" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button name="result" class="btn btn-primary rounded col-6 offset-3 d-grid"> Calculate
                        </button>
                    </div>
                </form>
            </div>
            <?php
                if (isset($totalMonthly)) {
                ?>
                    <table class="table text-white text-center col-8 offset-2 my-5">
                        <thead>
                            <tr>
                                <th scope="col">UserName</th>
                                <th scope="col">Interest Rate</th>
                                <th scope="col">Loan After Interest</th>
                                <th scope="col">Monthly</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td scope="row"><?=$_POST['name']; ?></td>
                                    <td ><?=$afterInterest; ?></td>
                                    <td ><?=$total; ?></td>
                                    <td ><?=$totalMonthly; ?></td>
                                </tr>
                                
                        </tbody>
                    </table>
                <?php
                }
                ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>