<!-- use php to retrive data required for the headliner : Main image, Title, Topic sentence, Date (maybe) -->







<!-- responsive headliner -->
<section class="  mx-auto my-3 container">

    <div class="masthead rounded-3 " style="background-image: url('../resources/<?php echo $rows[0]["Images"];?>')">
        <div class="rounded-3 color-overlay d-flex justify-content-center align-items-center">
            
        <div class="container py-4">
        <h1 class="h1"><?php echo $rows[0]["Title"];?></h1>
            <p class="h6"><?php echo date_format( new Datetime($rows[0]["Date_stamp"]),"D, F j, Y"); ?></p>
           
            <p class="p"><?php echo $rows[0]["Description"];?></p>
        </div>

        </div>

    </div>
</section>

<!-- responsive headliner -->
<section class="  mx-auto my-3 container">
   

   
</section>
