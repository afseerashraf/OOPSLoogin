<?php
class Signup extends dbh{
    protected function checkuser($uid, $email){
        $stmt = $this -> connect() -> prepare('SELECT id from oops_signup-login where id = ? OR email = ?;');

        if(!$stmt->execute(array($uid, $email))){
            $stmt = null;
            header('location: ../index.php?error=smtfailed');
            exit();

        }
       $resultcheck;
        if($stmt -> rowcount() > 0){
            $resultcheck = false;

        }else{
             $resultcheck = true;
        }
            return $resultcheck;
    }
}
?>