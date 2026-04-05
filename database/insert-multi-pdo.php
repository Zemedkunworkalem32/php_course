<?php 
    //pdo connection_aborted
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
      try {
        $conn = new PDO("mysql:host = $servername",$username,$password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

        // use exec() because no results are returned
        $conn->beginTransaction();
              $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
                      VALUES ('Mary', 'Moe', 'mary@example.com');");
              $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
                      VALUES ('Julie', 'Dooley', 'julie@example.com');");
              $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
                      VALUES ('Michael', 'Brown', 'michael@example.com')");

        // commit the transaction
              $conn->commit();
              echo "Record inserted successfully";
        } catch(PDOException $e) {
              $conn->rollback();
              echo $sql . $e->getMessage();
        }
      $conn = null;
?>