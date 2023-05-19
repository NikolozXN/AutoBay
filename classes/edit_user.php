<?php
include_once 'database.php';

class Edit extends Dbconn
{
    private $id;
    private $fullname;
    private $email;
    private $age;
    private $feedback;

    public function __construct($id, $fullname, $email, $age, $feedback)
    {
        $id = $this->id;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->age = $age;
        $this->feedback = $feedback;
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $sql = "UPDATE myuser SET fullname = :fullname, email = :email, age = :age, feedback = :feedback WHERE id = :id";
            
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindValue(':id', $this->id);
            $stmt->bindValue(':fullname', $this->fullname);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':age', $this->age);
            $stmt->bindValue(':feedback', $this->feedback);
            $result = $stmt->execute();
            return $result;
        }
    }
}
?>