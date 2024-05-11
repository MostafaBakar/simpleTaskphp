<?php include_once'include/header.php';  ?>
<?php include_once'include/navbor.php';  ?>
<?php include_once "core/session.php"?>

     <div class="container">
        <div class="row">
            <div class="col-8 mx-auto my-5">
                <h2 class="border p-2 my-2 text-center">Register</h2>
                <form action="handeler/handelersRegister.php" method="POST" class="border p-3">
                <?php foreach(sessionGet('errors')as $errors):?>
                    <div class="alert alert-danger text-center">
                        <?php echo $errors;?>
                    </div>

                <?php endforeach;?>
                <?php removeSession('errors')?>
                <div class="form-group p-2 my-1">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group p-2 my-1">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group p-2 my-1">
                    <label for="name">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group p-2 my-1">
                    
                    <input type="submit" value="Register"  class="form-control">
                </div>
                
                




                </form>
            </div>
        </div>
     </div>
    
<?php include_once'include/footer.php';  ?>

  