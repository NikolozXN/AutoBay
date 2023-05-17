<?php 
class Check {
    
    public function check() {
    if (isset($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
    } else {
        $fullname = "";
    }
    
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = "";
    }
    
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        $age = "";
    }
    
    if (isset($_POST['feedback'])) {
        $feedback = $_POST['feedback'];
    } else {
        $feedback = "";
    }
}
};
?>