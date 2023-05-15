<?php
$data_base = mysqli_connect("localhost","root" , "","nftp_2");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    $result = mysqli_query($data_base , "SELECT * FROM studentinfo");
    if($result->num_rows==0){
        echo "no data found";
    }
    ?>

<div class="wrapper">
    <form action="" method="post">
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4>Student Informatio</h4>
            <section>
<?php

if(isset($_GET['id']) ){
$S_no = $_GET['id'];
$result = mysqli_query($data_base ,'DELETE FROM studentinfo WHERE SNo ='.$S_no);
if($S_no){
    ?>
    <div class="card">
   
    <div class="card-body">
      <h5 class="card-title">Delete Info</h5>
      <p class="card-text">Are You sure delete this info ?</p>
      <a href="stydent_info.php" class="btn btn-primary" <?php $result ?>>Delete</a>
      <a href="stydent_info.php" class="btn btn-secondary">Cancel</a>

    </div>
  </div>
  <?php
}
else{
    echo 'not delete';
}
}
?>
            </section>
        </div>
    </form>
</div>