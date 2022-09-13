<?php
    include "layouts/session.php";
    include "middlewares/auth.php";
    include "layouts/header.php";
?>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Question</th>
                <th scope="col">Reviews</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">Are you satisfied with the level of cleanliness?</th>
                <td><?= $_SESSION['result']['resultInWords'][0] ?></td>
            </tr>
            <tr>
                <th scope="row">Are you satisified with the service prices?</th>
                <td><?= $_SESSION['result']['resultInWords'][1] ?></td>
            </tr>
            <tr>
                <th scope="row">Are you satisfied with the nursing service?</th>
                <td><?= $_SESSION['result']['resultInWords'][2] ?></td>
            </tr>
            <tr>
                <th scope="row">Are satisfied with the level of the doctors?</th>
                <td><?= $_SESSION['result']['resultInWords'][3] ?></td>
            </tr>
            <tr>
                <th scope="row">Are you satisfied with the calmness in the hospital?</th>
                <td><?= $_SESSION['result']['resultInWords'][4] ?></td>

            </tr>
        </tbody>
    </table>
    <?php
        if($_SESSION['result']['resultInNum'] < 25)
        {
            echo "    <div class='alert alert-info text-center alert-dismissible fade show' role='alert'>
                        Total Result is <strong class='text-danger'>BAD</strong>

                    </div>
 <div class='alert alert-danger text-center alert-dismissible fade show' role='alert'>
                         We will call you later on this phone <strong>{$_SESSION['phone_number']}</strong>
                    </div>";
        }
        else
        {
            echo "
            <div class='alert alert-info text-center alert-dismissible fade show' role='alert'>
                        Total Result is <strong class='text-info'>GOOD</strong>

                    </div> 
            <div class='alert alert-success text-center alert-dismissible fade show' role='alert'>
                         THANKS!
                    </div>";
        }
    ?>

<?php include "layouts/scripts.php"?>
