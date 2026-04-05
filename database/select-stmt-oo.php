<?php
      // select_data.php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "MyDb";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Select query
      $sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
      $result = $conn->query($sql);

      // Display results
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"] . 
                  " - Name: " . $row["firstname"] . " " . $row["lastname"] . 
                  " - Email: " . $row["email"] . 
                  " - Reg Date: " . $row["reg_date"] . "<br>";
          }
      } else {
          echo "0 results";
      }

      $conn->close();
?>