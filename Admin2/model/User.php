<?php
class User{
    private $db;
    public function __construct(){
        $con = new db();
        $con->connect();
        $this->db = $con->conn;
    }

    public function getUser()
    {
         $sql = "SELECT * FROM users order by firstname asc";
        $query = $this->db->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

    public function getUserDetail($id)
    {
        $sql = "SELECT * FROM users where us_id = ".$id;
        $query = $this->db->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

    public function addUser($data_user)
    {
        $sql = "INSERT INTO `users` (`us_id`, `us_firstname`, `us_lastname`, `us_email`, `us_password`,`us_urole`,`us_create_at`)";
        $sql .= " VALUES ('', :us_firstname, :us_firstname, :us_email, :us_password);";
        $query = $this->db->prepare($sql);
        if( $query->execute($data_user)){
            return true;
        }else {
            return false;
        }
    }

    public function delUser($us_id)
    {
        $sql = "DELETE FROM `users` WHERE `users_id`='".$us_id."'";
        $query = $this->db->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function editUser($us_id, $us_firstname, $us_lastname, $us_email, $us_password)
    {
        $sql = "UPDATE `users` SET `users_id` = '". $us_firstname ."', `users_lastname` = '". $us_email ."', `users_email` = '". $us_password ."' WHERE `users_id` = '". $us_id ."'";
        $query = $this->db->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }
	
}
?>