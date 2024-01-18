<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PITZO | Cart</title>
    <link rel="icon" href="resources/logo.png">

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 mb-2 bg bg-dark dark_div">
                <div class="row">
                    <?php require "header.php"; ?>
                </div>
            </div>

            <div class="col-12" id="cart_page">
                <div class="row">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 sec1">
                                <div class="row py-4">
                                    <div class="content">
                                        <div class="col-12">
                                            <div class="row px-2">
                                                <h2 class="fw-bold">Cart</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 sec2">
                                <div class="row">
                                    <div class="content">
                                        <div class="col-12">
                                            <div class="row px-2">

                                                <div class="col-12">
                                                    <div class="row py-5">

                                                        <div class="col-12 border border-1 table_div">
                                                            <div class="row">
                                                                <table class="tbl">
                                                                    <tr class="border border-1">
                                                                        <th>Item</th>
                                                                        <th>Name</th>
                                                                        <th>Qty</th>
                                                                        <th>Price</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="resources/pizza.jpeg" class="img1"></td>
                                                                        <td>Chiken Pizza</td>
                                                                        <td>5</td>
                                                                        <td>Rs.5000.00</td>
                                                                        <td><img src="resources/remove_icon.png" class="img2"></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 total_div">
                                                            <div class="row pt-4">
                                                                <div class="d1">
                                                                    <table>
                                                                        <tr>
                                                                            <th>Sub Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                                            <td>Rs.5000.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Delivery</th>
                                                                            <td>Rs.0.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="2"><hr></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Total</th>
                                                                            <td>Rs.5000.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="2"><button style="width: 100%;">Checkout</button></th>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <?php require "footer.php" ?>

        </div>
    </div>


    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>

</html>