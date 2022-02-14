<?php
$title = "Home";
include_once "layouts/header.php";

if ($_POST) {
    // validation
    $errors = '';
    if (empty($_POST['num'])) {
        $errors =  "<div class='alert alert-success ml-auto col-5'> Phone Number Is Required </div>";
    }
    if (empty($errors)) {
        header("location:Review.php");
        die;
    }
}

?>



<div class="container bg">
    <div class="row">
        <div class="col-12 my-5">
            <h6 class="text-danger text-center display-4"> Welcome To Our Hospital </h6>
        </div>
        <div class="offset-3 col-6">
            <form method="post">
                <div class="form-group mb-4 row">
                    <label for="num" class="col-4"><strong> Enter Your Number</strong></label>
                    <input type="tel" class="col-8" name="num" id="num" class="form-control" autofocus placeholder="You Phone Number" aria-describedby="helpId">
                    <?php
                    if (!empty($errors)) {
                        echo $errors;
                    }
                    ?>
                </div>
                <div class="form-group">
                    <button name="check" class="btn btn-success rounded d-grid col-12">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include_once "layouts/footer.php";
include_once "layouts/scripts.php";
?>