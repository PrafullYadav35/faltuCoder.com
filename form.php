<?php
if(isset($_POST["fname"])){
$server="localhost";
$username="root";
$password="";

$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to database faled due to" .mysqli_connect_error());
}

// echo "Succesfully conected to db";
$fName = $_POST["fname"];
$lName = $_POST["lname"];
$email = $_POST["email"];
$phoneNo = $_POST["mob"];
$password = $_POST["password"];
$Adress = $_POST["adress"];


// echo $fName."<br>";
// echo $lName."<br>";
// echo $phoneNo."<br>";


$sql=  "INSERT INTO `onlinestudy`. `user` ( `Name`, `Lastname`, `Email`, `Phoneno`, `password`, `Adress`) VALUES ( '$fName', '$lName', '$email', '$phoneNo', '$password', '$Adress')";

// INSERT INTO `user` (`Srno`, `Name`, `Lastname`, `Email`, `Phoneno`, `Job`, `Adress`) VALUES ('2', 'Prafull', 'Yadav', 'praful@google.com', '6388756174', 'Student', 'Renukoot UP');

// echo $sql;

if($con->query($sql) == true){
    echo "Successfully inserted";}

    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
        <div class="alert alert-success" role="alert">
   Your account is created now You can Log in
</div>
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center" style="padding:100px;">
                    <h2>Register </h2>
                    <form class="form-card"  method="post" action="form.php" style="width: 600px;">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> 
                                          <br>
                                <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> 

                                <br>
                                <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">email<span class="text-danger"> *</span></label> 
                                <br>
                                <input type="text" id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <br>
                                <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">

                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Password <span class="text-danger"> *</span></label> 
                                <br>
                                <input type="password" name="password" id="password"> </div>
                        </div>

                        

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Adress <span class="text-danger"> *</span></label> 
                                <br>
                                <input type="text" id="adress" name="adress" placeholder="" onblur="validate(6)"> </div>
                        </div>
                        
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> 
                                <br>
                                <input type="submit" value="submit">
                             </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>