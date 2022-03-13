<!DOCTYPE html>
<html lang="en">

<!-- meta data -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Entry</title>
    <!-- style sheets -->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../entryform.css" rel="stylesheet" />
    <link href="../style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include("./includes/connection.php")?>
    <?php include "./post-process.php" ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <!-- ractive navbar -->
    <?php include_once("./includes/navbar.html"); ?>

    <main class="container-form">

        <!-- Post entry form-->
        <form id="postEntry" name="postForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="row">

                <!-- Title input -->
                <div class="row mb-3">

                    <label for="inputTitle " class="col-sm-2 col-form-label">Title:</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="title" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid.</div>
                    </div>

                </div>


            </div>

            <div class="row">

                <!-- Description input -->
                <div class="row mb-3">

                    <label for="inputDescription" class="col-sm-2 col-form-label">Description:</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputDescription" name="description" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid.</div>
                    </div>

                </div>


            </div>

            <div class="row">

                <!-- Image input -->
                <div class="row mb-3">

                    <label for="inputImage" class="col-sm-2 col-form-label">Image:</label>

                    <div class="col-sm-10">
                        <input type="file" class="form-control"  accept="image/png, image/gif, image/jpeg" id="inputImage" name="image" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid.</div>
                    </div>

                </div>


            </div>

            <div class="row">

                <!-- Approved  checkbox input -->
                <div class="row mb-3">

                    <label for="inputApproved " class="col-sm-2 col-form-label">Approve:</label>

                    <div class="col-sm-10">
                        <input type="checkbox" class="" id="inputApproved" name="approve" value="1" required>
                    </div>

                </div>


            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Post</button>
            </div>

        </form>

    </main>

    <!--Footer  -->
    <?php /* include_once("./includes/footer.html"); */ ?>

    <!-- Script -->
    <script src="./scripts/form-validation.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>