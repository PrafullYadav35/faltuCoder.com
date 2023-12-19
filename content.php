
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="admin";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$sql ="SELECT * FROM files";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="about.css">
</head>
<body>
<?php
include "menu.php";
?> 
<h4 style="padding: 20px; margin:0px 40px;">Download Notes</h4>
<div class="container">
    <div class="row">
         <div class="col-md-10" style="min-height: 300px;">
         <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Topics</th>
     
      <th scope="col">Notes</th>
    </tr>
  </thead>
  <tbody>
  <?php
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
       
        $filename=$row['filename'];
        $filepath=$row['filepath'];
        // echo $filename;
        // echo "<br>";
        // echo $filepath;
    
    ?>
    <tr>
      <th scope="row">#</th>
      <td><?php echo $filename;?></td>
  
      <td><a href="Notes/<?php echo $filename;?>" target="" style="color:blue">Download Now</a></td>
    </tr>

   
    <?php 
    
      }
    } else {
      echo "0 results";
    }

   
   ?>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Javascript</td>
     
      <td><a href="php.pdf" style="color:blue">Download Now</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>React Js</td>
     
      <td><a href="php.pdf"  style="color:blue">Download Now</a></td>
    </tr> -->
  </tbody>
</table>
        </div>
 
        </div>
    </div>
</div>




<?php include 'footer.php'; ?>

 
</body>
</html>