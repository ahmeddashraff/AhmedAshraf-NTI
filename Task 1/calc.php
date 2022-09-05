<?php 
    $message = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST)
    {
      $firstNum = $_POST['number_one'];
      $secondNum = $_POST['number_two'];
      $operand = $_POST['operand'];

      if($operand == "+")
      {
        $message = (int)$firstNum + (int)$secondNum;
      }
      elseif($operand == "-")
      {
        $message = (int)$firstNum - (int)$secondNum;
      }
      elseif($operand == "*")
      {
        $message = (int)$firstNum * (int)$secondNum;
      }
      else
      {
        $message = (int)$firstNum / (int)$secondNum;
      }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
        <div class="text-center mt-5 w-100">
            <h1>Calculator</h1>
        </div>
        <form method = "post" class="w-100">
            <div class="form-group d-flex flex-column justify-content-center align-items-center w-100">
                <div class="w-100 d-flex justify-content-around">
                    <input type="text" class="form-control w-25" name="number_one" id="number_one" value="<?php echo isset($_POST['number_one'])? $_POST['number_one'] : '' ?>">
                    <input type="text" class="form-control w-25" name="number_two" id="number_two" value="<?php echo isset($_POST['number_two']) ? $_POST['number_two'] : '' ?>">
                </div>
                <div>
                    <input type="submit" class="form-control" name='operand' id="addition" value="+">
                    <input type="submit" class="form-control" name="operand" id="subtraction" value="-">
                    <input type="submit" class="form-control" name="operand" id="multiplication" value="*">
                    <input type="submit" class="form-control" name="operand" id="division" value="/">
                </div>

            </div>
            <div class="w-100 d-flex justify-content-center">
                <div class="alert alert-primary" role="alert">
                    <strong><?php echo $message; ?> </strong>
                </div>
        </div>
        </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>