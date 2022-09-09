<?php     include "layouts/session.php";
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
                    <td><input type="radio" id="cleanliness" name="cleanliness"></td>
                    <td><input type="radio" id="cleanliness" name="cleanliness"></td>
                    <td><input type="radio" id="cleanliness" name="cleanliness"></td>
                    <td><input type="radio" id="cleanliness" name="cleanliness"></td>
                </tr>
                <tr>
                    <th scope="row">Are you satisified with the service prices?</th>
                    <td><input type="radio" id="service_price" name="service_price"></td>
                    <td><input type="radio" id="service_price" name="service_price"></td>
                    <td><input type="radio" id="service_price" name="service_price"></td>
                    <td><input type="radio" id="service_price" name="service_price"></td>
                </tr>
                <tr>
                    <th scope="row">Are you satisfied with the nursing service?</th>
                    <td><input type="radio" id="nursing_service" name="nursing_service"></td>
                    <td><input type="radio" id="nursing_service" name="nursing_service"></td>
                    <td><input type="radio" id="nursing_service" name="nursing_service"></td>
                    <td><input type="radio" id="nursing_service" name="nursing_service"></td>
                </tr>
                <tr>
                    <th scope="row">Are satisfied with the level of the doctors?</th>
                    <td><input type="radio" id="doctor_level" name="doctor_level"></td>
                    <td><input type="radio" id="doctor_level" name="doctor_level"></td>
                    <td><input type="radio" id="doctor_level" name="doctor_level"></td>
                    <td><input type="radio" id="doctor_level" name="doctor_level"></td>
                </tr>
                <tr>
                    <th scope="row">Are you satisfied with the calmness in the hospital?</th>
                    <td><input type="radio" id="calmness" name="calmness"></td>
                    <td><input type="radio" id="calmness" name="calmness"></td>
                    <td><input type="radio" id="calmness" name="calmness"></td>
                    <td><input type="radio" id="calmness" name="calmness"></td>
                </tr>
            </tbody>
        </table>

        <button class = "btn btn-dark w-100">submit</button>
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