<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Industrial Training</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="shit.css">
</head>
<body>
    <?php require_once("navbar.php"); ?>
    <br>
    <div class = "container">
        <div style="justify-content: center;align-items: center;">
        <img src="feedback.jpg" alt="FeedBack" height="600" width="100%">
        <br><br>
        <form action="ind.php" method="post">
            <div class="row">
                <h3 class="col-sm-3" style="color: white">Name: </h3><input class="col-sm-5" type="text" name="input1" />
            </div>
            <div class="row">
                <h3 class="col-sm-3" style="color: white">Mobile Number:</h3> <input class="col-sm-5" type="number" name="input2" />
            </div>
            <div class="row">
                <h3 class="col-sm-3" style="color: white">E-Mail : </h3><input class="col-sm-5" type="email" name="input3" />
            </div>
            <div class="row">
                <h3 class="col-sm-3" style="color: white">Comment : </h3><input class="col-sm-5"type="text" name="input4" />
            </div>
            <br>
            <center><button type="submit" class="btn btn-dark">Send Feedback</button></center>
        </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>