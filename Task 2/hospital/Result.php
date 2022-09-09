<?php
    include "layouts/session.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
            echo " <div class='alert alert-danger text-center alert-dismissible fade show' role='alert'>
                         We will call you later on this phone <strong>{$_SESSION['phone_number']}</strong>
                    </div>";
        }
        else
        {
            echo " <div class='alert alert-success text-center alert-dismissible fade show' role='alert'>
                         THANKS!
                    </div>";
        }
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>