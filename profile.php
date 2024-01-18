<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PITZO | Profile</title>
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
                                                <h2 class="fw-bold">Profile</h2>
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

                                                <div class="col-12 profile">
                                                    <div class="row py-5">

                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="profile_img_div">
                                                                    <img src="resources/user_icon.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mt-2 new_img_uplord">
                                                            <div class="row">
                                                                <input class="d-none" type="file" id="profile_img_chooser" accept="img/*">
                                                                <label class="btn btn-danger" for="profile_img_chooser">Add new photo</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mt-5">
                                                            <div class="row">

                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <span class="form-label">First Name</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 mt-2 mt-md-0">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <span class="form-label">Last Name</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-2">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <span class="form-label">Contact No</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 mt-2 mt-md-0">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <span class="form-label">Address Line1</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-2">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <span class="form-label">Address Line2</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 mt-2 mt-md-0">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <span class="form-label">City</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <select class="form-select">
                                                                                                    <option value="">Select a city</option>
                                                                                                    <option value="">Colombo</option>
                                                                                                    <option value="">Rathnapura</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-2">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <span class="form-label">Email</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <input type="email" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 mt-2 mt-md-0">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <span class="form-label">Password</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="row">
                                                                                                <input type="password" class="form-control">
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

                                                        <div class="col-12 mt-4">
                                                            <div class="row">
                                                                <label class="btn btn-secondary profile_save_changes_btn">Save changes</label>
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