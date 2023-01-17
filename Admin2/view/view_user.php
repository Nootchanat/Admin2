
<?php
include_once "../model/db.php";
include_once "../model/User.php";
$obj_name=new User();
$rs2= $obj_name->getUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">

<h1 class="text-center">จัดการบัญชีผู้ใช้</h1>
<hr>
<?php

?>
<table class="table table-striped table-hover">
    <thead>
        
        <tr>
        <th>ลำดับ</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>อีเมล</th>
        <th>รหัสผ่าน</th>
        <th>urole</th>
        <th>date</th>
        <th>แก้ไข</th>
        
    </tr>  
    </thead>


<tbody>

           <?php 
          foreach ($rs2 as $rs){
           ?>
    <tr>
    <td><?php echo $rs['id'];?></td>
        <td><?php echo $rs['firstname'];?></td>
        <td><?php echo $rs['lastname'];?></td>
        <td><?php echo $rs['email'];?></td>       
        <td><?php echo $rs['password'];?></td>
        <td><?php echo $rs['urole'];?></td>
        <td><?php echo $rs['create_at'];?></td>
        <td><a href="edit_form.php?id= <?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td></td>
        
        <form action="multipleDelete.php"method="POST"> 
       
    </tr>
    <?php }
    ?>
</tbody>
</table>






</div>
</body>

</html>