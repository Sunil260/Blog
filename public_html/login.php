<!DOCTYPE html>
<html lang="en">

<!-- meta data -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- include to process login -->
    <?php include("./includes/connection.php")?>
    <?php include("./login-process.php")?>
    <title>Login</title>
   <!-- style sheets -->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
    <!-- ractive navbar -->
    <?php include_once("./includes/navbar.html"); ?>
    

    <main class=" flex-shrink-0 main-page">
        <!-- login form-->
        <section class=" mb-5">
            
            <div>
                <?php echo $post_editor;?>
            </div>

            <!-- needs-validation is a name not css class -->
            <form class="needs-validation" name="Login" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
                <h1 class="text-center">Login</h1>
                <h3 class="text-center"><?php if(isset($error)){ echo $error;} ?></h3>
                
                <!-- Email input -->
                <div class="row mb-3">

                    <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid email address.</div>
                    </div>
                    
                </div>

                <!-- Password input -->
                <div class="row mb-3">

                    <label for="inputPassword" class="col-sm-2 col-form-label" >Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword"  name="password" required >
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid password.</div>
                    </div>

                </div>

                <!-- login submit button -->
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </section>
        <!-- end of login form -->

    </main>

    <!--Footer  -->
    <?php include_once("./includes/footer.html"); ?>

    <!-- Script -->
    <script src="./scripts/form-validation.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>