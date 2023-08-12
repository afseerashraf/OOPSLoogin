<?php

class Signupcontr{
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;
    

    public function __construct($uid, $pwd, $pwdrepeat,$email)
    {
        $this -> uid = $uid;
        $this -> pwd = $pwd;
        $this -> pwdrepeat = $pwdrepeat;
        $this -> email = $email;



    }

    private function empty(){
        $result;
        if(empty(    $this -> uid ||   $this -> pwd ||         $this -> pwdrepeat ||     $this -> email)){
            $result = true;

        }else{
            $result = false;
        }
        return $result;
    }

    private function invaliduid(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$", $this->uid)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidemile(){
        $result;
        if(!filter_var($this -> email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function putMatch(){
        $result;
        if($this -> pwd !== $this -> pwdrepeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    


}
?>