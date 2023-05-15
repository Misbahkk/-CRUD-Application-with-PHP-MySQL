<?php
$data_base = mysqli_connect("localhost","root" , "","nftp_2");

if(isset($_POST['save'])){
  $name = $_POST['name'];
  $fname = $_POST['fname'];
  $rool_num = $_POST['rollnum'];
  $department = $_POST['dep'];
  echo "value is come  ";

//   $sql = "INSERT INTO studentinfo(name , fname ,rollnum , department) VALUES('$name', '$fname' ,'$rool_num' , '$department')";

$result = mysqli_query($data_base,"INSERT INTO studentinfo(name , fname ,rollnum , department) VALUES('$name', '$fname' ,'$rool_num' , '$department')");


if($result){
    header("Location:stydent_info.php?a=1");
}
else{
    echo "error ";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="wrapper">
    <form action="" method="post">
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4>Student Informatio</h4>
            <hr>
            <section>
                <div class="form-row"> <input type="text" class="form-control" name="name" placeholder="Name"> </div>
                <div class="form-row"> <input type="text" class="form-control" name="fname" placeholder="Father Name"> </div>
                <div class="form-row"> <input type="text" class="form-control" name="rollnum" placeholder="Roll Number"> </div>
                <div class="form-row"> <input type="text" class="form-control" name="dep" placeholder="Department"> </div>
            </section> <!-- SECTION 2 -->
        <div class="row">
            <div class="col-md-4">

             <!-- <label for="" class="submit btn btn-success btn-block btn-lg" >   <input type="submit" name="save" value="Submit"><i class="fas fa-database"></i></input> </label>  -->
             <button class="submit btn btn-success btn-block btn-lg" name="save"><i class="fas fa-database"></i>submit</button>

            </div>
                
                <div class="col-md-8">
                <a href="stydent_info.php" class="btn btn-secondary btn-block btn-lg">
                <i class="fas fa-stream"></i>Back to list</a>
            </div>
        </div>
           
        </div>
    </form>
</div>
</body>
</html>

