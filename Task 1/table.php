<?php
// dynamic table
// dynamic rows //4 
// dynamic columns // 4
// check if gender of user == m ==> male // 1
// check if gender of user == f ==> female // 1

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],                                                                                       
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        'phone' => 1234,
        'devices' => ['asus', 'samsung'] 
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running'
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phone' => 1234,
        'devices' => ['macbook', 'nokia'] 
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running'
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phone' => 1234,
        'devices' => ['lenovo', 'oppo'] 
    ],
    (object)[
        'id' => 4,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running'
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phone' => 1234,
        'devices' => ['dell', 'iPhone'] 
    ]

];

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


    <table class="table table-striped table-inverse table-responsive">
        <tbody>
            <?php
            $headers = []; 
            foreach($users as $user){
                            echo "<tr>";
                            foreach($user as $info => $infoValue){
                                    $headers[$info] = $info;
                        ?>
            <td><?php 
                                        if(gettype($infoValue) == 'object' || gettype($infoValue) == 'array')
                                        {
                                            foreach($infoValue as $objectOrArrayValues)
                                            {
                                                if($info == 'gender')
                                                {
                                                    if($objectOrArrayValues == 'f')
                                                    {
                                                        echo "female";
                                                    }
                                                    else
                                                    {
                                                        echo "male";
                                                    }
                                                }
                                                else{
                                                    echo $objectOrArrayValues."<br>";
                                                }
                                            }
                                        }
                                        else
                                        {
                                            echo $infoValue;
                                        }
                                    ?></td>


            <?php }
                        echo "</tr>";
                     } ?>
        </tbody>
        <thead class="thead-inverse">
            <tr>
                <?php 
                    foreach($headers as $key)
                    {
                        echo "<th>{$key}</th>";
                    }
                ?>
            </tr>
        </thead>
    </table>
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