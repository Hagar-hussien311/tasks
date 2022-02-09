<?php

if ($_POST) {
    $total = $_POST['ph'] + $_POST['ch'] + $_POST['bio'] + $_POST['math'] + $_POST['comp'];
    $percentage = ($total / 250) * 100;
    // echo $percentage;
    if($_POST['ph']<= 50 && $_POST['ch']<= 50 && $_POST['bio']<= 50 && $_POST['math']<= 50 && $_POST['comp']<= 50){
    switch ($percentage) {
        case $percentage >= 90 && $percentage <= 100:
            $grade = 'A';
            // echo $percentage;
            break;
        case $percentage >= 80 && $percentage < 90:
            $grade = 'B';
            break;
        case $percentage >= 70 && $percentage < 80:
            $grade = 'C';
            break;
        case $percentage >= 60 && $percentage < 70:
            $grade = 'D';
            break;
        case $percentage >= 50 && $percentage < 60:
            $grade = 'E';
            break;
        case $percentage >= 40 && $percentage < 50:
            $grade = 'F';
            break;
        // case $percentage >= 100:
        //     $percentage = 'You Entered Wrong Marks';
        //     $grade = '';
        //     break;
        default:
            # code...
            break;
    }
    if (isset($percentage)) {
        $msg = 'Your Percentage ----> '. $percentage . '%' . '<br>' . '
        Your Grade Is ----> '. $grade ;
    }
}
else{
    $msg = 'You Entered Wrong Marks , Maximum mark is "50"';
}
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
                <h1 class="text-danger text-center display-6"> Student's Percentage And Grade </h1>
            </div>
            <div class="offset-3 col-6">
                <h4 class="mb-4">Please Enter Your Marks Of These Subjects :</h4>
                <form method="post">
                    <div class="form-group mb-2">
                        <input type="number" name="ph" id="num1" class="form-control" required placeholder="Your Physics Mark" aria-describedby="helpId">
                    </div>
                    <div class="form-group mb-2">
                        <input type="number" name="ch" id="num2" class="form-control" required placeholder="Your Chemistry Mark" aria-describedby="helpId">
                    </div>
                    <div class="form-group mb-2">
                        <input type="number" name="bio" id="num3" class="form-control" required placeholder="Your Biology Mark" aria-describedby="helpId">
                    </div>
                    <div class="form-group mb-2">
                        <input type="number" name="math" id="num3" class="form-control" required placeholder="Your Mathematics Mark" aria-describedby="helpId">
                    </div>
                    <div class="form-group mb-4 ">
                        <input type="number" name="comp" id="num3" class="form-control" required placeholder="Your Computer Mark" aria-describedby="helpId">
                    </div>
                    <div class="form-group col-10 offset-1">
                        <button name="grade" class="btn btn-success rounded">Get The Grade</button>
                    </div>
                </form>
                <!-- <?php
                    if (isset($percentage)) {
                        echo "<div class='alert alert-success'>Your Percentage is <strong> $percentage % </strong><br>
                        Your Grade Is <strong> $grade </strong> </div>";
                    }

                ?> -->
                <?php
                    if (isset($msg)) {
                        echo "<div class='alert alert-success'>$msg</div>";
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