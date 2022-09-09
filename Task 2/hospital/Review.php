<?php     include "layouts/session.php";

$totalInNum = 0;
$totalInWords = array();

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST)
{
    foreach($_POST as $surveyValues)
    {
        if($surveyValues == 0)
        {
            $totalInWords[] = 'Bad';
        }
        elseif($surveyValues == 3)
        {
            $totalInWords[] = 'Good';
        }
        elseif($surveyValues == 5)
        {
            $totalInWords[] = 'Very good';
        }
        else
        {
            $totalInWords[] = 'Excellent';
        }
        $totalInNum += (int)$surveyValues;
    }
    $_SESSION['result'] = ['resultInWords'=>$totalInWords, 'resultInNum'=>$totalInNum];
    header('location:Result.php');
}

 ?>

<!doctype html>
<html lang="en">

<head>
    <title>Review</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method='post'>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Question</th>
                    <th scope="col">Bad</th>
                    <th scope="col">Good</th>
                    <th scope="col">Very good</th>
                    <th scope="col">Excellent</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th scope="row">Are you satisfied with the level of cleanliness?</th>
                    <td><input type="radio" id="cleanliness1" name="cleanliness" value=0 checked></td>
                    <td><input type="radio" id="cleanliness2" name="cleanliness" value=3></td>
                    <td><input type="radio" id="cleanliness3" name="cleanliness" value=5></td>
                    <td><input type="radio" id="cleanliness4" name="cleanliness" value=10></td>
                </tr>
                <tr>
                    <th scope="row">Are you satisified with the service prices?</th>
                    <td><input type="radio" id="service_price1" name="service_price" value=0 checked></td>
                    <td><input type="radio" id="service_price2" name="service_price" value=3></td>
                    <td><input type="radio" id="service_price3" name="service_price" value=5></td>
                    <td><input type="radio" id="service_price4" name="service_price" value=10></td>
                </tr>
                <tr>
                    <th scope="row">Are you satisfied with the nursing service?</th>
                    <td><input type="radio" id="nursing_service1" name="nursing_service" value=0 checked></td>
                    <td><input type="radio" id="nursing_service2" name="nursing_service" value=3></td>
                    <td><input type="radio" id="nursing_service3" name="nursing_service" value=5></td>
                    <td><input type="radio" id="nursing_service4" name="nursing_service" value=10></td>
                </tr>
                <tr>
                    <th scope="row">Are satisfied with the level of the doctors?</th>
                    <td><input type="radio" id="doctor_level1" name="doctor_level" value=0 checked></td>
                    <td><input type="radio" id="doctor_level2" name="doctor_level" value=3></td>
                    <td><input type="radio" id="doctor_level3" name="doctor_level" value=5></td>
                    <td><input type="radio" id="doctor_level4" name="doctor_level" value=10></td>
                </tr>
                <tr>
                    <th scope="row">Are you satisfied with the calmness in the hospital?</th>
                    <td><input type="radio" id="calmness1" name="calmness" value=0 checked></td>
                    <td><input type="radio" id="calmness2" name="calmness" value=3></td>
                    <td><input type="radio" id="calmness3" name="calmness" value=5></td>
                    <td><input type="radio" id="calmness4" name="calmness" value=10></td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-dark w-100">Go to Result</button>
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