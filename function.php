<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'quanlydiem');
    
  
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
           // $this->dbcon = $conn;
           if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";

            // if (!mysqli_connect_errno()) {
              
            //    echo "Failed to connect to MySQL : " . mysqli_connect_error();
            // }
            // echo "Connected successfully;
           
   
?>