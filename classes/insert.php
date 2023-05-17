<?php include_once 'database.php';?>
<?php include_once 'check_empty.php'?>
<?php 


class Create extends Dbconn {
    private $fullname;
    private $email;
    private $age;
    private $feedback;

    public function __construct($fullname, $email, $age, $feedback) {
       $this->fullname = $fullname;
       $this->email = $email;
       $this->age = $age; 
       $this->feedback = $feedback;
    }


    public function insert() {
        if(isset($_POST['submit'])) {
        $sql = "INSERT INTO myuser (fullname, email, age, feedback) VALUES (:fullname, :email, :age, :feedback)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(':fullname', $this->fullname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':age', $this->age);
        $stmt->bindValue(':feedback', $this->feedback);
        $stmt->execute();
        header('Location: index.php');
    }
    }
    
};