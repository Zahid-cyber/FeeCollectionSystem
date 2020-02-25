<?php        
    class Database{
        public $link;
        public function __construct() {
            $userName="root";
            $hostName="localhost";
            $password="";
            $dbName="feecollectionsystem";
            $this->link= mysqli_connect($hostName, $userName, $password, $dbName);
        }
    }
?>