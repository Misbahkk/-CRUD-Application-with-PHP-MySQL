<?php
$data_base = mysqli_connect("localhost", "root", "", "nftp_2");

if (isset($_POST['save'])) {
    $S_no = $_GET['id'];
    $name = mysqli_real_escape_string($data_base, $_POST['name']);
    $fname = mysqli_real_escape_string($data_base, $_POST['fname']);
    $rollnum = mysqli_real_escape_string($data_base, $_POST['rollnum']);
    $dep = mysqli_real_escape_string($data_base, $_POST['dep']);

    $result = mysqli_query($data_base, "UPDATE studentinfo SET name = '$name', fname = '$fname', rollnum = '$rollnum', department = '$dep' WHERE SNo = '$S_no'");

    if ($result) {
       echo 'data update';
       header("Location:stydent_info.php?a=2");
    } else {
        echo "Error: ";
    }
}
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
if (isset($_GET['id'])) {
    $S_no = $_GET['id'];
    $result = mysqli_query($data_base, "SELECT * FROM studentinfo WHERE SNo = '$S_no'");
    $r = mysqli_fetch_assoc($result);
}
?>
<div class="wrapper">
    <form method="post">
        <div id="wizard">
            <h4>Update Student Information</h4>
            <hr>
            <section>
                <div class="form-row">
                    <input type="text" class="form-control" name="name" value="<?php echo $r['name']; ?>"
                           placeholder="Name">
                </div>
                <div class="form-row">
                    <input type="text" class="form-control" name="fname" value="<?php echo $r['fname']; ?>"
                           placeholder="Father Name">
                </div>
                <div class="form-row">
                    <input type="text" class="form-control" name="rollnum" value="<?php echo $r['rollnum']; ?>"
                           placeholder="Roll Number">
                </div>
                <div class="form-row">
                    <input type="text" class="form-control" name="dep" value="<?php echo $r['department']; ?>"
                           placeholder="Department">
                </div>
            </section> <!-- SECTION 2 -->
            <button type="submit" class="btn btn-primary" name='save'>Update</button>
            <a href="stydent_info.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
