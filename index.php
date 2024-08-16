<?php
if (isset($_POST['fname'])) {
    $server = "localhost";
    $username = "root";
    $password = "root";
    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection to this database failed due to: " . mysqli_connect_error());
    }

    $name = $_POST['fname'];
    $fullname = $_POST['fullname'];
    $email = $_POST['femail'];
    $phone = $_POST['fphone'];
    $password = $_POST['fpass'];
    $confirm = $_POST['fcpass'];
    $sql = "INSERT INTO `form`.`form` (`name`, `full name`, `email`, `phone`, `password`, `confirm`) 
        VALUES ('$name', '$fullname', '$email', '$phone', '$password', '$confirm');";

    if ($con->query($sql) === TRUE) {
        header("Location: forms.html"); // Redirect to the forms page
        exit;
    } else {
        echo "ERROR: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        body {
            padding: 20px;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f7f7f7;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-group input {
            padding: 12px 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-error {
            color: red;
            margin-top: 5px;
        }

     

.submit-button {
  background-color: #007bff; /* Blue color */
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 12px 24px;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease-in-out;
}

.submit-button:hover {
  background-color: #0056b3; /* Darker blue on hover */
}

.submit-button:focus {
  outline: none;
}

.submit-button:active {
  background-color: #003d80; /* Even darker blue on click */
}


    </style>
</head>
<body>
    <div class="form-container">
        <h1>Sign Up</h1>
        <form id="signup-form" action="signup.php" method="post">
            <div class="form-group">
                <label for="fname">Name:</label>
                <input type="text" name="fname" id="fname" required>
                <span class="form-error" id="fname-error"></span>
            </div>

            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" name="fullname" id="fullname" required>
                <span class="form-error" id="fullname-error"></span>
            </div>

            <div class="form-group">
                <label for="femail">Email:</label>
                <input type="email" name="femail" id="femail" required>
                <span class="form-error" id="femail-error"></span>
            </div>

            <div class="form-group">
                <label for="fphone">Phone:</label>
                <input type="tel" name="fphone" id="fphone" required>
                <span class="form-error" id="fphone-error"></span>
            </div>

            <div class="form-group">
                <label for="fpass">Password:</label>
                <input type="password" name="fpass" id="fpass" required>
                <span class="form-error" id="fpass-error"></span>
            </div>

            <div class="form-group">
                <label for="fcpass">Confirm Password:</label>
                <input type="password" name="fcpass" id="fcpass" required>
                <span class="form-error" id="fcpass-error"></span>
            </div>

            <button class="submit-button" type="submit">Sign Up</button>
        </form>
    </div>

    <script src="signup.js"></script>
</body>
</html>
