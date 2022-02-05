<?php
    if($_POST){

        if (isset($_POST['plus'])) {
            $result = $_POST['first'] + $_POST['second'];
        }
        elseif (isset($_POST['minus'])) {
            $result = $_POST['first'] - $_POST['second'];
        }
        elseif (isset($_POST['multi'])) {
            $result = $_POST['first'] * $_POST['second'];
        }
        elseif (isset($_POST['divid'])) {
            $result = $_POST['first'] / $_POST['second'];
        }
        elseif (isset($_POST['remainder'])) {
            $result = $_POST['first'] % $_POST['second'];
        }
    }


?>
<!doctype html>
<html lang="en">

<head>
    <title>calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="col-12 mt-5 text-primary">Calculator</h2>
            <div class="col-5 mt-4">
                <form method="post">
                    <div class="form-group row">
                        <label class="col-4" for="First">First Number :</label>
                        <input type="number" name="first" id="First" class="form-control col-8" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group row">
                        <label class="col-4" for="Second">Second Number :</label>
                        <input type="number" name="second" id="Second" class="form-control col-8" placeholder="" aria-describedby="helpId">
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-4" for="op">Operation :</label>
                        <select name="operation" class="form-control col-8" id="op">
                            <option value="plus">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </div> -->
                    <div class="row justify-content-center">
                    <div class="form-group col-5">
                    <button name="plus" class="btn btn btn-outline-primary rounded d-grid col-12">+</button>
                    </div>
                    <div class="form-group col-5">
                    <button name="minus" class="btn btn btn-outline-primary rounded d-grid col-12">-</button>
                    </div>
                    <div class="form-group col-5">
                    <button name="multi" class="btn btn btn-outline-primary rounded d-grid col-12">*</button>
                    </div>
                    <div class="form-group col-5">
                    <button name="divid" class="btn btn btn-outline-primary rounded d-grid col-12">/</button>
                    </div>
                    <div class="form-group col-5">
                    <button name="remainder" class="btn btn btn-outline-primary rounded d-grid col-12">%</button>
                    </div>
                    </div>
                </form>
                <?php
                if (isset($result)) {
                    // echo "<h5>Answer <strong> $result </strong> </h5>";
                    echo "<h5 class='alert alert-primary'>Answer is <strong> $result </strong></h5>";
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