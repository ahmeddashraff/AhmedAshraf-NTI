<?php 
    
    $message = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST)
    {
      //var_dump($_POST);
      $firstNum = $_POST['number_one'];
      $secondNum = $_POST['number_two'];
      $operand = $_POST['operand'];

      if($operand == "+")
      {
        $message = (float)$firstNum + (float)$secondNum;
      }
      elseif($operand == "-")
      {
        $message = (float)$firstNum - (float)$secondNum;
      }
      elseif($operand == "*")
      {
        $message = (float)$firstNum * (float)$secondNum;
      }
      else
      {
        $message = (float)$firstNum / (float)$secondNum;
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <div class="text-center mt-5 w-100">
    <h1 class="text-primary my-5">Calculator</h1>
  </div>
  <form method="post" class="w-100 d-flex justify-content-center align-items-center">
    <div class="form-group d-flex justify-content-center align-items-center">
        <input type="text" class="form-control w-25" name="number_one" id="number_one"
          value="<?php echo isset($_POST['number_one'])? $_POST['number_one'] : '' ?>">


          <input type="submit" class="btn btn-primary  mx-2" name='operand' id="addition" value="+">
        <input type="submit" class="btn btn-primary  mx-2" name="operand" id="subtraction" value="-">
        <input type="submit" class="btn btn-primary  mx-2" name="operand" id="multiplication" value="*">
        <input type="submit" class="btn btn-primary  mx-2" name="operand" id="division" value="/">


        <input type="text" class="form-control w-25" name="number_two" id="number_two"
          value="<?php echo isset($_POST['number_two']) ? $_POST['number_two'] : '' ?>">

        <h4> =</h4>

        <div class="mx-2 mt-2 alert alert-primary <?php echo ($message == "")? "d-none" : "d-flex" ?>" role="alert">
          <strong><?php echo $message; ?> </strong>
        </div>
    </div>
  </form>

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