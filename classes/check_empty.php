<?php 
class Check {
    
    public function check() {
    if (isset($_POST['fullname'])) {
        $sanitizedName = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        $fullname = "";
    }
    
    if (isset($_POST['email'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    } else {
        $email = "";
    }
    
    if (isset($_POST['age'])) {
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    } else {
        $age = "";
    }
    
    if (isset($_POST['feedback'])) {
        $feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        $feedback = "";
    }
}
};
?>