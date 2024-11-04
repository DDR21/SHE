<?php

$con = mysqli_connect('localhost','root', '', 'imgtes');


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>TEST</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
    <form method="POST" enctype="multipart/form-data">
    <label for="">Name:</label>
    <input type="text" name = "name"><br>
    <label for="">Price</label>
    <input type="text" name="price" id=""><br>
    <label for="">Image:</label>
    <input type="file" name="image" id=""><br>
    <button name="upload">Upload</button>
    </form>
    </center>

    <?php
    if(isset($_POST['upload'])){
        $NAME = $_POST['name'];
        $PRICE = $_POST['price'];
        $IMAGE = $_FILES['image'];
        print_r($_FILES['image']);
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        $img_des = "uploadImage/".$img_name;
        move_uploaded_file($img_loc,'uploadImage/' .$img_name);

        mysqli_query($con,"INSERT INTO `dtl`(`name`, `price`, `image`) VALUES ('$NAME','$PRICE','$img_des')");
    }
    ?>
    <?php
    $d = date("D");
    if($d == "Fri"){
        echo "Have a nice weekend!";
    } elseif($d == "Sun"){
        echo "Have a nice Sunday!";
    } else{
        echo "Have a nice day!";
    }
    ?>
    <table class="table">
        <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">PRICE</th>
        <th scope="col">IMAGE</th>
        </tr>
        </thead>
  <tbody>
    <?php
    include 'conn.php';
    $pic = mysqli_query($con,"SELECT * FROM `dtl`");
    while($row = mysqli_fetch_array($pic)){
       echo "
       <tr>
       <td>$row[id]</td>
       <td>$row[name]</td> 
       <td>$row[price]</td>
       <td><img src='$row[image]'></td>
       </tr>
       " ;
    }
    ?>
  </tbody>
</table>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>