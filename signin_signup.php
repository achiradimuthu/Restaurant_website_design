<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PITZO | Signin & Signup</title>
    <link rel="icon" href="resources/logo.png">

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 signin_signup">
                <div class="row">
                    <div class="col-12 opcity">
                        <div class="row">
                            <div class="content">
                                <div class="col-12 mb-5">
                                    <div class="row px-2 pb-5">

                                        <div class="col-12 mt-5">
                                            <div class="row pt-5">

                                                <div class="col-12 col-md-6 text-center mt-5 ldiv">
                                                    <div class="row p-4">
                                                        <h1>PITZO Restaurant</h1>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6 rdiv" id="signin_box">
                                                    <div class="row p-4">

                                                        <div class="col-12 form_div">
                                                            <div class="row px-4 py-4">

                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <span class="sp1">Signin</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>Email</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="email">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-2">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>Password</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="password">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row">

                                                                                <div class="col-12 col-md-6">
                                                                                    <div class="row ps-2">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input remember_me_input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Remember
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6 text-md-end">
                                                                                    <div class="row">
                                                                                        <a href="#" id="fogot_password_btn">Fogot Password</a>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row px-2">
                                                                        <button id="a">Signin</button>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 text-center mt-4">
                                                                    <div class="row">
                                                                        <span class="sp2">If you don't have an account, <span class="sp3" id="signup_span">Signup</span> in here.</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- fogot password modal box -->
                                                <div class="modal" tabindex="-1" role="dialog" id="fogot_password_modal_box">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Add new password</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="fogot_password_modal_box_close">
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
                                                                                        <span class="form-label">Enter your email</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="row">
                                                                                        <input type="email" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-2">
                                                                            <div class="row">
                                                                                <div class="col-6 offset-6">
                                                                                    <div class="row">
                                                                                        <button class="btn btn-secondary">Send code</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-4">
                                                                            <div class="row">
                                                                                <div class="col-6">
                                                                                    <div class="row">
                                                                                        <span class="form-label">Enter the code</span>
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
                                                                                        <span class="form-label">New password</span>
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
                                                                                        <span class="form-label">Confirm password</span>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="fogot_password_modal_box_cancel">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- fogot password modal box -->

                                                <div class="col-12 col-md-6 rdiv" id="signup_box">
                                                    <div class="row p-4">

                                                        <div class="col-12 form_div">
                                                            <div class="row px-4 py-4">

                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <span class="sp1">Signup</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>First Name</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="text">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>Last Name</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="text">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>Contact No</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="text">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>Address Line1</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="text">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>Address Line2</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="text">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>City</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="text">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>Email</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="email">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-2">
                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <span>Password</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row px-2">
                                                                                <input type="password">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3">
                                                                    <div class="row px-2">
                                                                        <button>Register</button>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 text-center mt-4">
                                                                    <div class="row">
                                                                        <span class="sp2">Already have an account, <span class="sp3" id="signin_span">Signin</span> in here.</span>
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

                            <div class="col-12 text-center text-white tm_div">
                                <div class="row py-4">
                                    <span>Copyright ©2022 All rights reserved | Design by <a href="#" class="a1">Achira Dimuthu</a></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>

</html>