<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . './../includes/meta.php') ?>
</head>

<body>

    <?php include(__DIR__ . './../includes/menu.php') ?>

    <form action="login.php" method="POST">
        <section class="vh-100 gradient-custom bg-secondary">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                    <div class="mb-3">
                                        <label class="form-label" for="emaillogin">Email</label>
                                        <input type="email" id="emaillogin" class="form-control form-control-lg" name="email" />
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>




    </div>

    <?php include(__DIR__ . './../includes/scripts.php') ?>
</body>

</html>