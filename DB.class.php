<?php
class DB {
    public $tblName = 'videos';

    function __construct(){
        // Database configuration
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'codexworld';

        // Connect database
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        if($conn->connect_error){
            die("Failed to connect with MySQL: " . $conn->connect_error);
        }else{
            $this->db = $conn;
        }
    }

    function getRow($id = ''){
        $con = !empty($id)?" WHERE id = $id ":" ORDER BY id DESC LIMIT 1 ";
        $sql = "SELECT * FROM $this->tblName $con";
        $query = $this->db->query($sql);
        $result = $query->fetch_assoc();
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    function insert($title, $desc, $tags, $file_name){
        $sql = "INSERT INTO $this->tblName (title,description,tags,file_name) VALUES('".$title."','".$desc."','".$tags."','".$file_name."')";
        $insert = $this->db->query($sql);
        return $insert?$this->db->insert_id:false;
    }

    function update($id, $youtube_video_id){
        $sql = "UPDATE  $this->tblName SET youtube_video_id = '".$youtube_video_id."' WHERE id = ".$id;
        $update = $this->db->query($sql);
        return $update?true:false;
    }
}
?>
