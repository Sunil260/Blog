<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">


    <div class="row align-items-start p-4">
        <div class="col">

            <h1 class="h1"><?php echo $rows[1]["Title"];?></h1>
            <p class="h5"><?php echo date_format( new Datetime($rows[1]["Date_stamp"]),"D, F j, Y"); ?></p>
            <p class="p"><?php echo $rows[1]["Description"];?></p>

        </div>
        <div class="col">
            <img src="../resources/<?php echo $rows[1]["Images"];?>" class="img-fluid  rounded-3 text-center" alt="" />
        </div>
    </div>



    <div class="row align-items-start p-4">
        <div class="col">
            <img src="../resources/<?php echo $rows[2]["Images"];?>" class="img-fluid  rounded-3 text-center" alt="" />
        </div>
        <div class="col">
            <h1 class="h1"><?php echo $rows[2]["Title"];?></h1>
            <p class="h5"><?php echo date_format( new Datetime($rows[2]["Date_stamp"]),"D, F j, Y"); ?></p>
            <p class="p"><?php echo $rows[2]["Description"];?></p>
        </div>
    </div>



    <div class="row align-items-start p-4">
        <div class="col">
            <h1 class="h1"><?php echo $rows[3]["Title"];?></h1>
            <p class="h5"><?php echo date_format( new Datetime($rows[3]["Date_stamp"]),"D, F j, Y"); ?></p>
            <p class="p"><?php echo $rows[3]["Description"];?></p>
        </div>
        <div class="col">
            <img src="../resources/<?php echo $rows[3]["Images"];?>" class="img-fluid  rounded-3 text-center" alt="" />
        </div>
    </div>


</div>