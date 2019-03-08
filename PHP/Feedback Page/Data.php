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

        echo "<br><h2>Connected To The dataBase Successfully ... <br><br>DataBase - </h2>";

        $sql = "SELECT * FROM ind";
        $result = $conn->query($sql);
        echo "<p style='color:white;'>";
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $value2 = $row["input1"];
                $value3 = $row["input2"];
                $value4 = $row["input3"];
                $value5 = $row["input4"];
                echo "<br><h4>Name - $value2 <br>Mobile No. - $value3 <br>E-mail - $value4 <br>Comment - $value5 <br><br></h4>";  
            }
        } else {
            echo "<br><h4>Empty DataBase</h4>";
        }
        echo "</p>";
        $conn->close();
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
