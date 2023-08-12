<?php


class Dbh{
    private function connect(){
        try {
            //code...
            $username = 'root';
            $password = '';
            $dbh = new PDO('mysqli:host=localhost; dbname=mydatabase', $username, $password);

        } catch (\PDOException $e) {
            //throw $e;
            print 'Error!:'. $e -> getMessage(). '<br/>';
            die();
        }
    }
}

    
       
?>