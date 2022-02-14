<?php
$title = "Home";
include_once "layouts/header.php";
// if ($_POST) {
//     $_SESSION['$key'] = $result;
//     if(isset($_POST['bad'])){
//         $result +=0;
//     }
//     elseif (isset($_POST['good'])) {
//         $result += 3;
//     }
//     elseif (isset($_POST['verygood'])) {
//         $result += 5;
//     }
//     elseif (isset($_POST['ex'])) {
//         $result += 10;
//     }
//     header("location:Result.php");
// }

?>



<div class="container bg">
    <h2 class="mt-5">Tell Us What You Think Of Our Hospital</h2>
    <h4 class="mt-5">Choose Your Answer</h4>
    <form action="" method="post">
        <div class="row">
            <div class="col-5 mt-3">
                <h6>Are you satisfied with the level of cleanliness?</h6>
            </div>
            <div class="row  col-5 mt-3">
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="bad" name="clean" id="b">
                    <label class="form-check-label" for="b">
                        Bad
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="good" name="clean" id="g">
                    <label class="form-check-label" for="g">
                        Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="verygood" name="clean" id="vg">
                    <label class="form-check-label" for="vg">
                        Very Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="excelent" name="clean" id="ex">
                    <label class="form-check-label" for="ex">
                        Excelent
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5 mt-3">
                <h6>Are you satisfied with the service prices?</h6>
            </div>
            <div class="row  col-5 mt-3">
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="bad" name="q2" id="b">
                    <label class="form-check-label" for="b">
                        Bad
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="good" name="q2" id="g">
                    <label class="form-check-label" for="g">
                        Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="verygood" name="q2" id="vg">
                    <label class="form-check-label" for="vg">
                        Very Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="excelent" name="q2" id="ex">
                    <label class="form-check-label" for="ex">
                        Excelent
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5 mt-3">
                <h6>Are you satisfied with the nursing service</h6>
            </div>
            <div class="row  col-5 mt-3">
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="bad" name="q3" id="b">
                    <label class="form-check-label" for="b">
                        Bad
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="good" name="q3" id="g">
                    <label class="form-check-label" for="g">
                        Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="verygood" name="q3" id="vg">
                    <label class="form-check-label" for="vg">
                        Very Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="excelent" name="q3" id="ex">
                    <label class="form-check-label" for="ex">
                        Excelent
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5 mt-3">
                <h6>Are you satisfied with the level of the doctor?</h6>
            </div>
            <div class="row  col-5 mt-3">
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="bad" name="q4" id="b">
                    <label class="form-check-label" for="b">
                        Bad
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="good" name="q4" id="g">
                    <label class="form-check-label" for="g">
                        Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="verygood" name="q4" id="vg">
                    <label class="form-check-label" for="vg">
                        Very Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="excelent" name="q4" id="ex">
                    <label class="form-check-label" for="ex">
                        Excelent
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5 mt-3">
                <h6>Are you satisfied with the calmness in the hospital?</h6>
            </div>
            <div class="row  col-5 mt-3">
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="bad" name="q5" id="b">
                    <label class="form-check-label" for="b">
                        Bad
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="good" name="q5" id="g">
                    <label class="form-check-label" for="g">
                        Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="verygood" name="q5" id="vg">
                    <label class="form-check-label" for="vg">
                        Very Good
                    </label>
                </div>
                <div class="form-check text-center col-3">
                    <input class="form-check-input" type="radio" value="excelent" name="q5" id="ex">
                    <label class="form-check-label" for="ex">
                        Excelent
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button name="data" class="btn btn-success rounded d-grid offset-5 col-2 mt-4"><strong>Get Result</strong></button>
        </div>
    </form>
    <?php
                if (isset($result)) {
                    // echo "<h5>Answer <strong> $result </strong> </h5>";
                    echo "<h5 class='alert alert-primary'>Answer is <strong> $result </strong></h5>";
                }
                ?>
</div>


<?php
include_once "layouts/footer.php";
include_once "layouts/scripts.php";
?>