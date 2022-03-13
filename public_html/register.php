<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- style sheets -->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../style.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- connect to server -->
    <?php include("./includes/connection.php");
    ?>
    <!-- process register -->
    <?php include("./register-process.php") ?>

</head>

<body>
    <!-- ractive navbar -->
    <?php include_once("./includes/navbar.html"); ?>

    <main class=" flex-shrink-0 main-page">
        <section class="mb-5">

        <!-- <form  name="register" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" > -->

            <form class="needs-validation" name="register" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="registerForm">

                <div class="container">
                    <div class="h1 text-center">Register</div>
                    <div class="question text-center py-3">Already have an account? <a href="./login.php">Login</a></div>

                    <?php echo $message; ?>

                    <!-- First Name -->
                    <div class="row center-input mb-3">
                        <!-- <label for="inputFirstName" class="col-sm-2 col-form-label">First Name:</label> -->
                        <div class="col-sm-10">
                            <i class="fas fa-user"></i>
                            <input required name="first_Name" type="text" class="" id="inputFirstName" placeholder="First Name">
                            <i class="fas fa-exclamation-circle invalid-feedback"></i>
                            <i class="far fa-check-circle valid-feedback"></i>
                            <div class="error"></div>
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div class="row center-input  mb-3">
                        <!-- <label for="inputLastName" class="col-sm-2 col-form-label">Last Name:</label> -->
                        <div class="col-sm-10">
                            <i class="fas fa-user"></i>
                            <input required name="last_Name" type="text" class="" id="inputLastName" placeholder="Last Name">
                            <i class="fas fa-exclamation-circle invalid-feedback"></i>
                            <i class="far fa-check-circle valid-feedback"></i>
                            <div class="error"></div>
                        </div>
                    </div>

                    <!--Email-->
                    <div class="row center-input  mb-3">
                        <!-- <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label> -->
                        <div class="col-sm-10">
                            <i class="fas fa-envelope"></i>
                            <input required name="email" type="email" class="" id="inputEmail" placeholder="Email">
                            <i class="fas fa-exclamation-circle invalid-feedback"></i>
                            <i class="far fa-check-circle valid-feedback"></i>
                            <div class="error"></div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="row center-input  mb-3">
                        <!-- <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label> -->
                        <div class="col-sm-10">
                            <i class="fas fa-lock"></i>
                            <input required name="password" type="password" class="" id="inputPassword" placeholder="Password">
                            <i class="fas fa-exclamation-circle invalid-feedback"></i>
                            <i class="far fa-check-circle valid-feedback"></i>
                            <div class="error"></div>
                        </div>
                    </div>

                    <!-- Password Confirmation -->
                    <div class="row center-input  mb-3">
                        <!-- <label for="inputPasswordConfirm" class="col-sm-2 col-form-label">Password Confirmation:</label> -->
                        <div class="col-sm-10">
                            <i class="fas fa-lock"></i>
                            <input required name="password_Confirm" type="password" class="" id="inputPasswordConfirm" placeholder="Password">
                            <i class="fas fa-exclamation-circle invalid-feedback"></i>
                            <i class="far fa-check-circle valid-feedback"></i>
                            <div class="error"></div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button  formmethod="post" formaction="<?php echo $_SERVER['PHP_SELF']; ?>"type="submit" class="btn btn-primary">Register</button>
                    </div>

                </div>
            </form>

        </section>
    </main>

    <!--Footer  -->
    <?php include_once("./includes/footer.html"); ?>

    <!-- Script -->
    <script src="./scripts/register-form-validation.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f75178d2af.js" crossorigin="anonymous"></script>


</body>

</html>