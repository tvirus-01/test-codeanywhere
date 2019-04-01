<?php
if(isset($_GET['un'])){
  $un = $_GET['un'];
}else{
  $un = 'world';
}
header('refresh:4; home.php?un='.$un);
?>
<link rel="stylesheet" href="css/load.css" type="text/css"> 
<link rel="stylesheet" href="css/style.css" type="text/css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="js/main.js"></script>
<div class="container">
  <div class="row justify-content-center">
    <div class="col">
      <h1 id="wellcome" class="text-success">
        wellcome
      </h1>
      <div class="loader mar-25" id="mar"></div>
    </div>
  </div>
</div>