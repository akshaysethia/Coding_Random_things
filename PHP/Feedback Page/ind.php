<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stored Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="shit.css" />
</head>
<body>
    <?php require_once("navbar.php"); ?>
    <?php   
        $server = "localhost";
        $user = "root";
        $pass = "";
        $name = "feedback";

        $conn = mysqli_connect($server , $user , $pass , $name);
        if (!$conn) {
            die("Connection Failed : " . mysqli_connect_error());
        }

        sleep(5);
        echo "<center><br><h1>Processed Your Request<br></h1></center>";

        $value1 = $_POST['input1'];
        $value2 = $_POST['input2'];
        $value3 = $_POST['input3'];
        $value4 = $_POST['input4'];

        $sql = "INSERT INTO ind (input1 , input2 , input3 , input4) VALUES ('$value1' , '$value2' , '$value3' , '$value4')";

        if ($conn->query($sql) === TRUE) {
            echo "<center><br><br><br><br><br><br><br><br><br><br><br><br><h2>Feedback Stored Successfully</h2></center>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
