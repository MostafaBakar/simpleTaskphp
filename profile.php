<?php include_once'include/header.php';  ?>
<?php include_once'include/navbor.php';  ?>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto border p-2 my-5">
                <h2 class="border my-2 bg-success p-2"> Name: <?php echo  sessionGet('auth')['name']?></h2>
                <h2 class="border my-2 bg-primary p-2"> Email: <?php echo  sessionGet('auth')['email']?></h2>
    
            </div>
        </div>
    </div>
<?php include_once'include/footer.php';  ?>

  