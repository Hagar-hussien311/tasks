<?php
    function calculateDelivery ($city){
        switch ($city) {
            case 'cairo':
                return 0 ;
                break;
        
            case 'giza':
                return 30 ;
                break;
            case 'alex':
                return 50 ;
                break;
            case 'other':
                return 100 ;
                break;
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
        @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');

        body {
            height: 180vh;
            background: #555 url(images/bg.jpg) no-repeat;
            background-size: 100% 100%;
            background-blend-mode: multiply;
            background-size: cover;
        }

        .sn {
            font-size: 400%;
            font-family: 'Satisfy', cursive;
        }

        span {
            color: #9cc700;

        }
        .receipt{
            font-family: 'Satisfy', cursive;
            font-size: 150%;
            color: #9cc700;
        }

        .btn {
            background-color: #9cc700 !important;
            color: white;
            font-size: 115%;
            font-weight: 500;
        }

        .input {
            font-size: 120%;
            font-weight: 400;
            filter: drop-shadow(5px 5px 8px #ffffff);
        }
        .label {
            font-size: 105%;
            font-weight: 400;
        }
        .label1 {
            font-size: 105%;
            font-weight: 400;
            color: #9cc700;
        }
        th,
        td {
            font-size: 115%;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <h1 class=" text-center display-4 sn text-white"> <strong><span>Super</span>market</strong> </h1>
            </div>
            <div class="offset-3 col-6">
                <form method="post">
                    <div class="form-group mb-4">
                        <label for="name" class="text-white input">User Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php if (isset($_POST['name'])) {echo $_POST['name'];} ?>" placeholder="Please Enter Your Name" aria-describedby="helpId">
                    </div>
                    <div class="form-group mb-4 ">
                        <label for="city" class="text-white input">City</label>
                        <select class="form-select col-12" name="city" id="city" aria-label="Default select example">
                            <option <?php if (isset($_POST['city']) && $_POST['city'] == 'cairo' ){ echo 'selected';}?> value="cairo" selected>Cairo</option>
                            <option <?php if (isset($_POST['city']) && $_POST['city'] == 'giza' ){ echo 'selected';}?> value="giza">Giza</option>
                            <option <?php if (isset($_POST['city']) && $_POST['city'] == 'alex' ){ echo 'selected';}?> value="alex">Alex</option>
                            <option <?php if (isset($_POST['city']) && $_POST['city'] == 'other' ){ echo 'selected';}?> value="other">Others</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="var" class="text-white input">Number of varieties</label>
                        <input type="number" name="var" id="var" class="form-control" value="<?php if (isset($_POST['var'])) { echo $_POST['var'];} ?>" placeholder="Please Enter Number Of Varieties" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button name="product" class="btn rounded col-8 offset-2 d-grid"> Enter Products
                        </button>
                    </div>

            <?php
            if (isset($_POST['product'])) {
            ?>
                    <table class="table text-white text-center mt-5 mb-2">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantities</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= $_POST['var']; $i++) { ?>

                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name='pn<?= $i?>' id="pn" class="form-control" value="<?php if (isset($_POST['pn'])) {echo $_POST['pn'];} ?>" aria-describedby="helpId">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" name='price<?= $i?>' id="price" class="form-control" value="<?php if (isset($_POST['price'])) {echo $_POST['price'];} ?>" aria-describedby="helpId">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" name='quan<?= $i?>' id="quan" class="form-control" value="<?php if (isset($_POST['quan'])) {echo $_POST['quan'];} ?>" aria-describedby="helpId">
                                        </div>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <button name="receipt" class="btn rounded col-6 offset-3 d-grid"> Get Receipt
                        </button>
                    
            <?php
            }
                if (isset($_POST['receipt'])) {
            ?>
                        <table class="table table-striped text-white text-center my-5">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantities</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $totalproduct =0;
                                for ($i = 1; $i <= $_POST['var']; $i++) { 
                                $tprice = $_POST['price'.$i] * $_POST['quan'.$i];
                                $totalproduct += $tprice;
                            ?>
                                    <tr>
                                        <td>
                                            <?= $_POST['pn'.$i]; ?>
                                        </td>
                                        <td>
                                            <?= $_POST['price'.$i]; ?>
                                        </td>
                                        <td>
                                            <?= $_POST['quan'.$i]; ?>
                                        </td>
                                        <td>
                                            <?= $tprice; ?>
                                        </td>
                                    </tr>
                            <?php }
                                if ($totalproduct < '1000') {
                                    $discount = 0.0;
                                    $afterDiscount = 0;
                                    $total = $totalproduct - $afterDiscount;
                                    $delivery = calculateDelivery($_POST['city']);
                                    $totalAfterDelivery = $total + $delivery;
                                } elseif ($totalproduct >= '1000' && $totalproduct < '3000') {
                                    $discount = 0.1;
                                    $afterDiscount = $totalproduct * $discount;
                                    $total = $totalproduct - $afterDiscount;
                                    $delivery = calculateDelivery($_POST['city']);
                                    $totalAfterDelivery = $total + $delivery;
                                } elseif ($totalproduct >= '3000' && $totalproduct < '4500') {
                                    $discount = 0.15;
                                    $afterDiscount = $totalproduct * $discount;
                                    $total = $totalproduct - $afterDiscount;
                                    $delivery = calculateDelivery($_POST['city']);
                                    $totalAfterDelivery = $total + $delivery;
                                } elseif ($totalproduct >= '4500') {
                                    $discount = 0.2;
                                    $afterDiscount = $totalproduct * $discount;
                                    $total = $totalproduct - $afterDiscount;
                                    $delivery = calculateDelivery($_POST['city']);
                                    $totalAfterDelivery = $total + $delivery;
                                }
                            ?>
                            </tbody>
                        </table>
                <div class="col-12">
                        <h5 class="my-4 receipt">Your Receipt Details</h5>
                        <div class="form-group row mb-2">
                            <label for="" class="label text-white col-4">Client Name</label>
                            <input class="form-control offset-1 col-5" type="txt" value="<?= $_POST['name']?>" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="" class="label text-white col-4">City</label>
                            <input class="form-control offset-1 col-5" type="txt" value="<?= $_POST['city']?>" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="" class="label text-white col-4">Total</label>
                            <input class="form-control offset-1 col-5" type="txt" value="<?= $totalproduct .'  EGP'?>" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="" class="label text-white col-4">Discount</label>
                            <input class="form-control offset-1 col-5" type="txt" value="<?= $afterDiscount .'  EGP'?>" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="" class="label text-white col-4">Total After Discount</label>
                            <input class="form-control offset-1 col-5" type="txt" value="<?= $total .'  EGP'?>" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="" class="label text-white col-4">Delivery</label>
                            <input class="form-control offset-1 col-5" type="txt" value="<?= $delivery .'  EGP'?>" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="" class="label1 col-4">Net Total</label>
                            <input class="form-cotrol offset-1 col-5" type="text" value="<?= $totalAfterDelivery .'  EGP'?>" aria-label="Disabled input example" disabled readonly>
                        </div>
                        </div>
                </form>
            </div>
            <?php }
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