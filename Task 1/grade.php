<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST)
{
  define("totalGrades", 500);
  define("percentage", 100);

  $grade = (((float)$_POST['mathematics'] + (float)$_POST['physics'] + (float)$_POST['chemistry'] + (float)$_POST['biology'] + (float)$_POST['computer']) / totalGrades) * percentage; // 500 and 100 should be constants

  if($_POST['physics'] > 100 || $_POST['chemistry'] > 100 || $_POST['biology'] > 100 || $_POST['mathematics'] > 100 || $_POST['computer'] > 100)
  {
    $grade = "Wrong input";
  }
  else{
    if($grade >=90)
    {
      $grade .= '% A';
    }
    elseif(90 > $grade && 80 <= $grade)
    {
      $grade .= '% B';
    }
    elseif(80 > $grade && 70 <= $grade)
    {
      $grade .= '% C';
    }
    elseif(70 > $grade && 60 <= $grade)
    {
      $grade .= '% D';
    }
    elseif(60 > $grade && 50 <= $grade)
    {
      $grade .= '% D';
    }
    else
    {
      $grade .= '% F';
    }
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
    <h1 class = "text-center mt-5 text-primary">Grade Calculator</h1>
        <form method="post">
            <div class="form-group d-flex justify-content-center mt-5 flex-column align-items-center">
                <input type="text" class="form-control w-25 mb-2" name="physics" id="physics" aria-describedby="helpId" placeholder="physics">
                <input type="text" class="form-control w-25 mb-2" name="chemistry" id="chemistry" aria-describedby="helpId" placeholder="chemistry">
                <input type="text" class="form-control w-25 mb-2" name="biology" id="biology" aria-describedby="helpId" placeholder="biology">
                <input type="text" class="form-control w-25 mb-2" name="mathematics" id="mathematics" aria-describedby="helpId" placeholder="mathematics">
                <input type="text" class="form-control w-25 mb-2" name="computer" id="computer" aria-describedby="helpId" placeholder="computer">
                <button class = "btn btn-primary">Calculate grade</button>
            </div>
            <div class="w-100 <?php echo ($grade == null)? "d-none" : "d-flex" ?> justify-content-center">
                <div class="alert alert-<?php echo ($grade == "Wrong input") ? "danger" : "primary" ?>" role="alert">
                    <strong> <?php echo $grade ?? "";?> </strong>
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