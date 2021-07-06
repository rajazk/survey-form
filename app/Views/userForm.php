<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  Display: flex;
  justify-content: center;
  border-radius: 5px;
  padding: 20px;
}

.container form{
    background-color: #f2f2f2;
    padding: 15px;
}

.h3tt{
    display: flex;
    justify-content: center;
}
span { 
  color: red;
}
</style>
</head>
<body>

<h3 class="h3tt">Survey Form
  <span>
  <?php 
        if($validation){
          echo $validation; 
        }
      ?>
  </span>


</h3>

<div class="container">

  <form action="<?php echo site_url('Home/addRecord');  ?>" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="lname">Email Address</label>
    <input type="text" id="lname" name="email" placeholder="Enter your email">

    <label for="fcolor">Favourite colour </label>
    <select id="color" name="fcolor">
    <option value="select">Select :</option >
      <option value="Red">Red</option>
      <option value="blue">blue</option>
      <option value="Green">Green</option>
      <option value="orange"></option>
    </select>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
