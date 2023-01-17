


<?php
$user=array();
$user["us_id"]=$us_id;
$user["us_firstname"]=$us_firstname;
$user["us_lastname"]=$us_lastname;
$user["us_email"]=$us_email;
$user["us_password"]=$us_password;
$user["us_urole"]=$us_urole;
$user["us_create_at"]=$us_create_at;
print_r($user);
?>

<?php
include_once "../model/db.php";
include_once "../model/User.php";
$obj_name=new User();
echo $rs2= $obj_name->addUser($user);
?>
<?php
include "../view/view_user.php";
?>