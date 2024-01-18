<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PITZO | Admin Dashboard</title>
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
                                                <h2 class="fw-bold">Dashboard</h2>
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

                                                        <div class="col-12 admin_navbar">
                                                            <div class="row">

                                                                <div class="col-6 col-md-4 col-lg-3 d-grid">
                                                                    <div class="row">
                                                                        <button class="admin_navbar_btn" id="orders_btn">Orders</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-4 col-lg-3 d-grid">
                                                                    <div class="row">
                                                                        <button class="admin_navbar_btn" id="bookings_btn">Bookings</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-4 col-lg-3 d-grid">
                                                                    <div class="row">
                                                                        <button class="admin_navbar_btn" id="messages_btn">Messages</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-4 col-lg-3 d-grid">
                                                                    <div class="row">
                                                                        <button class="admin_navbar_btn" id="foods_btn">Foods</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-4 col-lg-3 d-grid">
                                                                    <div class="row">
                                                                        <button class="admin_navbar_btn" id="stocks_btn">Stocks</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-12 mt-4 admin_content_div">
                                                            <div class="row">

                                                                <!-- orders -->
                                                                <div class="col-12 orders_div" id="orders_div">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <h3 class="fw-bold">ORDERS</h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-2">
                                                                            <div class="row">
                                                                                <h5>Total new orders : 10</h5>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 orders_table">
                                                                            <div class="row">
                                                                                <div class="col-12 border border-1 table_div">
                                                                                    <div class="row">
                                                                                        <table class="tbl">
                                                                                            <tr class="border border-1">
                                                                                                <th>Id</th>
                                                                                                <th>Food</th>
                                                                                                <th>Qty</th>
                                                                                                <th>address</th>
                                                                                                <th>Status</th>
                                                                                                <th></th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>Chiken Pizza</td>
                                                                                                <td>5</td>
                                                                                                <td>Bulugahapitiya,Eheliyagoda</td>
                                                                                                <td>new order</td>
                                                                                                <td class="d-grid"><button class="admin_orders_finish_btn">Finished</button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- orders -->

                                                                <!-- bookings -->
                                                                <div class="col-12 orders_div" id="bookings_div">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <h3 class="fw-bold">BOOKINGS</h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-2 orders_table">
                                                                            <div class="row">
                                                                                <div class="col-12 border border-1 table_div">
                                                                                    <div class="row">
                                                                                        <table class="tbl">
                                                                                            <tr class="border border-1">
                                                                                                <th>Id</th>
                                                                                                <th>Date</th>
                                                                                                <th>Time</th>
                                                                                                <th>Persons</th>
                                                                                                <th>Name</th>
                                                                                                <th>Email</th>
                                                                                                <th>Contact</th>
                                                                                                <th>Status</th>
                                                                                                <th></th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>2023.01.30</td>
                                                                                                <td>8:00 PM </td>
                                                                                                <td>5</td>
                                                                                                <td>Achira</td>
                                                                                                <td>achira@gmail.com</td>
                                                                                                <td>0714512456</td>
                                                                                                <td>new</td>
                                                                                                <td class="d-grid"><button>Accept</button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-5">
                                                                            <div class="row">
                                                                                <h4>Today bookings : 2023.01.10</h4>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-2 orders_table">
                                                                            <div class="row">
                                                                                <div class="col-12 border border-1 table_div">
                                                                                    <div class="row">
                                                                                        <table class="tbl">
                                                                                            <tr class="border border-1">
                                                                                                <th>Id</th>
                                                                                                <th>Time</th>
                                                                                                <th>Persons</th>
                                                                                                <th>Name</th>
                                                                                                <th></th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>8:00 PM </td>
                                                                                                <td>5</td>
                                                                                                <td>Achira</td>
                                                                                                <td class="d-grid"><button>Cancel</button></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- bookings -->

                                                                <!-- messages -->
                                                                <div class="col-12 orders_div" id="messages_div">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <h3 class="fw-bold">MESSAGES</h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <div class="row"></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- messages -->

                                                                <!-- foods -->
                                                                <div class="col-12 orders_div" id="foods_div">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <h3 class="fw-bold">FOODS</h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-2">
                                                                            <div class="row">
                                                                                <div class="col-6 col-md-4 col-lg-3">
                                                                                    <div class="row">
                                                                                        <button class="admin_food_addnew_btn" id="admin_food_addnew_btn">Add new</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-3">
                                                                            <div class="row">

                                                                                <div class="col-12 col-md-6 mb-3 mb-md-0">
                                                                                    <div class="row px-2">
                                                                                        <div class="col-12">
                                                                                            <div class="row">

                                                                                                <div class="col-8">
                                                                                                    <div class="row">
                                                                                                        <input type="text" placeholder="Type here...">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-4">
                                                                                                    <div class="row">
                                                                                                        <button>Search</button>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-12 col-md-6">
                                                                                    <div class="row px-2">
                                                                                        <div class="col-12">
                                                                                            <div class="row">

                                                                                                <div class="col-8">
                                                                                                    <div class="row">
                                                                                                        <select class="admin_food_select_catogery">
                                                                                                            <option value="">All</option>
                                                                                                            <option value="">Pizza</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-4">
                                                                                                    <div class="row">
                                                                                                        <button>Search</button>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-5 orders_table">
                                                                            <div class="row">
                                                                                <div class="col-12 border border-1 table_div">
                                                                                    <div class="row">
                                                                                        <table class="tbl">
                                                                                            <tr class="border border-1">
                                                                                                <th>Id</th>
                                                                                                <th>Catogery</th>
                                                                                                <th>Name</th>
                                                                                                <th>Description</th>
                                                                                                <th>Price</th>
                                                                                                <th>Stock</th>
                                                                                                <th>Qty</th>
                                                                                                <th></th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>Pizza</td>
                                                                                                <td>Chiken pizza</td>
                                                                                                <td>Fried chiken, Onion, Eggs with extra Chease</td>
                                                                                                <td>1000.00</td>
                                                                                                <td>In stock</td>
                                                                                                <td>10</td>
                                                                                                <td class="d-grid">
                                                                                                    <div class="col-12">
                                                                                                        <div class="row">

                                                                                                            <div class="col-12">
                                                                                                                <div class="row">
                                                                                                                    <button class="admin_food_edit_btn">Edit</button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-12">
                                                                                                                <div class="row">
                                                                                                                    <button class="admin_food_disable_btn">Dissable</button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-12">
                                                                                                                <div class="row">
                                                                                                                    <button class="admin_food_delete_btn">Delete</button>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- foods -->

                                                                <!-- add new food modal box -->
                                                                <div class="modal" tabindex="-1" role="dialog" id="add_new_food_modal">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Add new food</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="add_new_food_modal_close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <div class="col-12">
                                                                                    <div class="row">

                                                                                        <div class="col-12">
                                                                                            <div class="row">
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <span class="form-label">Select Catogery</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <select class="form-select">
                                                                                                            <option value="">Select</option>
                                                                                                            <option value="">Pizza</option>
                                                                                                            <option value="">Burger</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12 mt-2">
                                                                                            <div class="row">
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <span class="form-label">Name</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <input type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12 mt-2">
                                                                                            <div class="row">
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <span class="form-label">Description</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12 mt-2">
                                                                                            <div class="row">
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <span class="form-label">Price</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <input type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12 mt-2">
                                                                                            <div class="row">
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <span class="form-label">Qty</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <input type="number" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12 mt-2">
                                                                                            <div class="row">
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <span class="form-label">Select photo</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="row">
                                                                                                        <input type="file" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="add_new_food_modal_cancel">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- add new food modal box -->

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