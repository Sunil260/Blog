<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta data -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- end meta data -->

  <!-- Title -->
  <title>Blog Post</title>

  <!-- style sheets -->
  <link href="../css/bootstrap.css" rel="stylesheet" />
  <link href="../style.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- ractive navbar -->
  <?php include_once("./includes/navbar.html"); ?>

  <!-- Page content-->
  <main class="flex-shrink-0 main-page">

    <!-- headliner post -->
    <div class="position-relative overflow-hidden p-3 p-md-4 m-md-3 text-center ">

      <?php

      include("./includes/connection.php");

      $sql = "SELECT * FROM Blog_Posts.TBL_Blog_Post ORDER BY \"Post_id\" DESC LIMIT 4 ";

      date_default_timezone_set('Eastern');


      $result = ($connection->query($sql));


      $rows = $result->fetch_all(MYSQLI_ASSOC);
      // var_dump($rows);
      // foreach ($rows as $row) {
      //     printf("%s (%s)\n", $row["Title"], $row["Date_stamp"]);
      // }
      ?>

      <?php


      include("./includes/headliner.php");

      ?>


    </div>

    <!-- list of posts -->
    <?php

    include("./includes/list.php")

    ?>

  </main>
  <!-- End of page content-->

  <!--Footer  -->
  <?php include_once("./includes/footer.html"); ?>

  <!-- Script -->
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>