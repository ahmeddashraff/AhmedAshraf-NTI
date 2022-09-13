
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <form method="post">
        <div class="row w-100">
            <div class="col-4 offset-4 mt-5">
                <div class="form-group">
                    <label for="username">User name:</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId"
                        placeholder="Enter your name" value="<?= $_POST['username'] ?? "" ?>">

                    <label for="loan_amount">Loan amount:</label>
                    <input type="number" class="form-control" name="loan_amount" id="loan_amount" aria-describedby="helpId"
                        placeholder="Enter your loan amount" value="<?= $_POST['loan_amount'] ?? "" ?>">

                    <label for="loan_years">Loan years:</label>
                    <input type="number" class="form-control" name="loan_years" id="loan_years"
                        aria-describedby="helpId" placeholder="Enter loan years"
                        value="<?= $_POST['loan_years'] ?? "" ?>">


                    <button class=" btn btn-primary mt-2">Calculate</button>
                </div>
            </div>
        </div>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == 'POST' && $_POST)
    {
        ?>
    
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">User name</th>
                <th scope="col">Interest rate</th>
                <th scope="col">Loan after interest</th>
                <th scope="col">Monthly installment</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td><?= $_POST['username'] ?></td>
                <td><?php 
                    if($_POST['loan_years'] <= 3)
                    {
                        echo $interestRate = $_POST['loan_amount'] * 0.10 * $_POST['loan_years'];
                    }
                    else
                    {
                        echo $interestRate = $_POST['loan_amount'] * 0.15 * $_POST['loan_years'];
                    }
                ?></td>
                <td><?= $interestRate + $_POST['loan_amount']; ?></td>

                <td><?= ($interestRate + $_POST['loan_amount'])/($_POST['loan_years']* 12) ?></td>
        </tbody>
    </table>
    <?php } ?>

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