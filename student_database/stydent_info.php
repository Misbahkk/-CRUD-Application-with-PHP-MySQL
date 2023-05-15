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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>

<div class="wrapper">
<div id="wizard">
<div class="container mt-3">
  <h2>Student Information</h2>
  <hr>
  <br>
  <!-- <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>             -->
  <from method="post">
  <table class="table " " bgcolor="white" cellpadding="10">
    <thead>
      <tr>
        
        <th>No.</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Roll No.</th>
        <th>Department</th>
        <th colspan="2">
            <a href="index.php" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i>ADD NEW
            </a>
        </th>
      </tr>
    </thead>
    <tbody>

    <?PHP
    $result = mysqli_query($data_base , "SELECT * FROM studentinfo");
    if($result->num_rows==0){
        echo "no data found";
    }
    else{

        while($r = mysqli_fetch_assoc($result)){
           ?>
            <tr>
            <td><?php echo $r['SNo'];?></td>
            <td><?php echo $r['name'];?></td>
            <td><?php echo $r['fname'];?></td>
            <td><?php echo $r['rollnum'];?></td>
            <td><?php echo $r['department'];?></td>
            <td>

            <!-- <a href="delete.php?id=<?php echo $r['SNo'];?>" class="btn">
                        <i class="far fa-trash-alt fa-lg text-danger float-right"></i>

                    </a> -->
              <a class="btn" href="delete.php?id=<?php echo $r['SNo'];?>"> <i class="fa fa-trash-o" style="color:red"></i></a></td>
             <td><a class="btn " href="update.php?id=<?php echo $r['SNo'];?>"><i class="fas fa-edit"></i></a></td>
            <!-- <a href="update.php?id=<?php echo $r['SNo'];?>" class="btn text-secondary px-0" >
                    <i class="far fa-edit fa-lg"></i>
                </a> -->
              <!-- </td> -->
          </tr>
          
          <?php
        }
    }
    ?>
     
     
    </tbody>
  </table>
  </from>
</div>
</div>
</div>
</body>
</html>

