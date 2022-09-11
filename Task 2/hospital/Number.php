<?php 

    include "layouts/session.php";
    include "layouts/header.php";
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST)
    {
        $errors = [];

        if(empty($_POST['phone_number'])){
            $errors['phone_number'] = "Enter your phone number";
        }
        else
        {
            $_SESSION['phone_number'] = $_POST['phone_number'];
            header('location:Review.php');
        }
    }

?>


      <div class="row w-100">
        <div class="col-4 offset-4 mt-5">
            <form method = 'post'>
                <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="text" class="form-control mb-2" name="phone_number" id="phone_number" aria-describedby="helpId" placeholder="Enter your phone number">
                <small id="helpId" class=" text-danger"><?= $errors['phone_number'] ?? "" ?></small>

                <button>submit</button>
                </div>
            </form>

        </div>
      </div>
      <?php include "layouts/scripts.php"?>
