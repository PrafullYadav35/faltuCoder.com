<?php
include 'db2.php';
if(isset($_POST['submit'])){

  $c1= $_POST['practice1'];
  $c2= $_POST['practice2'];
  $c3= $_POST['practice3'];
  $c4= $_POST['practice4'];
  $c5= $_POST['practice5'];
 


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <center><h1>JAVASCRIPT</h1></center>
<br><br><br>
<div class="container">
    
<table class="table table-hover table-bordered" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Topics</th>
      <th scope="col">Practice Code A</th>
      <th scope="col">Exercises</th>
    </tr>
  </thead>
  <form action="" method="post">
  <tbody>
   <?php  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     
  
  ?>


    <tr>
      <th scope="row">1</th>
      <td>Basics</td>
      <td><input type="checkbox"  checked  onclick="return false"  name="practice1" id="" class="form-check-input"   style=" height:17px; width:20px;  "></td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Loops</td>
      <td><input type="checkbox" checked onclick="return false"    name="practice2" id="" class="form-check-input" style=" height:17px; width:20px;"></td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Function</td>
      <td> <input type="checkbox"     name="practice3" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td >Array</td>
      <td><input type="checkbox"     name="practice4" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td >Objects</td>
      <td><input type="checkbox"   name="practice5" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td >Input Output</td> 
       <!-- 10 -15 day -->
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td >Array Functions 1</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td >Array Functions 2</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td >CLI Apps </td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td >DOM Manipulation 1</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td >DOM Manipulation 2</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td > DOM Manipulation 3</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td > DOM Manipulation 4</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td >DOM Manipulation 5</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td >Events</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td >Scope </td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td >Hoisting </td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td >String </td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td >Number </td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td >Date & Time</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">21</th>
      <td >PROJECT</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">22</th>
      <td >ASYNC JS Fundamental  1</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">23</th>
      <td >ASYNC JS Fundamental 2</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">24</th>
      <td >API Request</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">25</th>
      <td >Promises 1</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">26</th>
      <td >Promises 2</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">27</th>
      <td >Fetch </td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">28</th>
      <td >OOP 1</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">29</th>
      <td >OOP 2</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">30</th>
      <td >Prototype 1</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">31</th>
      <td >Prototype 2</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">33</th>
      <td >Call This</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">34</th>
      <td >Bind</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">35</th>
      <td >Object</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">36</th>
      <td >Stack Overflow</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">37</th>
      <td >Closure</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">38</th>
      <td >Project 2</td>
      <td> <input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " ></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">39</th>
      <td >Project 2</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">40</th>
      <td >Start Learning Framework of JS</td>
      <td><input type="checkbox"   name="practice" id="" class="form-check-input" style=" height:17px; width:20px; " > </td>
      <td></td>
    </tr>
  </tbody>
  <?php 
      }
    } else {
      echo "0 results";
    }

   
   ?>

 <input type="submit" value="submit" name="submit">
  </form>
</table>
    
</div>
</body>
</html>


<?php  

echo $row;

echo $c5;
?>