<?php
// Initialize variables and set to empty values
$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $websiteErr = $genderErr = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Name Validation
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters allowed";
    }
  }

  // Email Validation
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  // Website Validation
  if (!empty($_POST["website"])) {
    $website = test_input($_POST["website"]);
    // Check if URL address syntax is valid
    if (!preg_match("/\bhttps?:\/\/\S+/i", $website)) {
      $websiteErr = "Invalid URL";
    }
  }

  // Comment Validation
  $comment = test_input($_POST["comment"]);

  // Gender Validation
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

// Function to sanitize data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form Validation</title>
    <style>
        .error { color: #FF0000; }
        .result-box { margin-top: 20px; padding: 15px; border: 1px solid #ddd; background: #f9f9f9; }
    </style>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// Only show the output if the form was submitted AND there are no errors
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $genderErr == "" && $websiteErr == "") {
    echo "<div class='result-box'>";
    echo "<h3>Your Inputted Data:</h3>";
    echo "<b>Name:</b> " . $name . "<br>";
    echo "<b>Email:</b> " . $email . "<br>";
    echo "<b>Website:</b> " . $website . "<br>";
    echo "<b>Comment:</b> " . $comment . "<br>";
    echo "<b>Gender:</b> " . $gender;
    echo "</div>";
}
?>

</body>
</html>