<?php include_once 'database.php';?>
<?php 
    class Fetch extends Dbconn {
        
        public function show() {
           $this->connect()->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
           $sql = "SELECT * FROM myuser"; 
           $stmt =  $this->connect()->prepare($sql);
           $stmt->execute();
           $user = $stmt->fetchAll();
           return $user;
        }
    }
?>