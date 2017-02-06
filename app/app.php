<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Triangle.php";

    $app = new Silex\Application();
    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
          <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <!-- <link rel='stylesheet' href='../css/style.css' type='text/css'> -->
            <title>Triangle Check</title>
          </head>

          <body>
            <div class='container'>
              <h1>Triangle Checker</h1>
              <form action='/triangle'>
                <div class='form-group'>
                <label for='length_one'>Type length of first triangle side</label>
                <input id='length_one' name='length_one' type='number' class='form-control'>
                </div>
                <div class='form-group'>
                <label for='length_two'>Type length of second triangle side</label>
                <input id='length_two' name='length_two' type='number' class='form-control'>
                </div>
                <div class='form-group'>
                <label for='length_three'>Type length of third triangle side</label>
                <input id='length_three' name='length_three' type='number' class='form-control'>
                </div>
                <button class='btn' type='submit'>Calculate!</button>
              </form>
            </div>
          </body>
        </html>
      ";
    });


    $app->get("/triangle", function(){
        $userTriangle = new Triangle($_GET["length_one"], $_GET["length_two"], $_GET["length_three"]);
        $userTriangleType = $userTriangle->triangleType();

        return "

        <!DOCTYPE html>
        <html>
          <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <!-- <link rel='stylesheet' href='../css/style.css' type='text/css'> -->
            <title>Triangle Check</title>
          </head>
          <body>
            <h1>Results are here</h1>
            <p>Length One:". $userTriangle->getLengthOne(). "</p>
            <p>Length Two:". $userTriangle->getLengthTwo(). "</p>
            <p>Length Three:". $userTriangle->getLengthThree()."</p>
            <p>Your triangle type is $userTriangleType.</p>
            <a href='/'>
              <button class='btn btn-success'>Back to Home</button>
            </a>
          </body>
          ";
    });






    return $app;

 ?>
