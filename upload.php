<?php 
if(isset($_FILES['pdf'])){
    echo "<pre>";
    // print_r($_FILES);
    echo "<pre>";

    $file_name=$_FILES['pdf']['name'];
    $file_size=$_FILES['pdf']['size'];
    $file_tmp =$_FILES['pdf']['tmp_name'];
    $file_type =$_FILES['pdf']['type'];

      // Database connection
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "admin";
  
      $conn = new mysqli($servername, $username, $password, $dbname);
  
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

   $result =move_uploaded_file($file_tmp,'Notes/'.$file_name);
   


    // Insert file information into the database
    $filepath='"Notes/".$file_name)';
    $sql = "INSERT INTO files (filename, filepath) VALUES ('$file_name', '$filepath')";
    $run = mysqli_query($conn,$sql);
    
 if($result){
    
header("location:upload.php");
echo "File Succesfully  Uploaded";
}
 else{
    echo "File Not Uploaded";
}
}


?>
<?php include"menu.php";?>
<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
  </head>
<body>
<h1 style="margin-bottom: 30px; ">Upload Notes</h1>

<form action="upload.php" method="post" enctype="multipart/form-data"   >
  Select file to upload: <br>

  <input type="file" name="pdf" id="fileToUpload">
  <input type="submit" value="Upload PDF" name="submit">
</form>
<br><br><br><br><br>
</body>
<?php include"footer.php";?>
</html>
