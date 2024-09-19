<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PUNP - Face Recognition  Signup</title>
        <link rel="stylesheet" href="signup.css">
        <link rel="icon" href="favicon/expand-solid.svg">
        <script src="https://kit.fontawesome.com/5cff1fbee6.js" crossorigin="anonymous"></script>
    </head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            margin: 0;
            display: flex;
            justify-content: center; 
            font-family: 'Poppins';  
        }
        .background {
            margin: 0;
            background-image: url("Images/PUNP\ background\ image.jpg");
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
        }
        .main {
            background-color: transparent;
            backdrop-filter: blur(7px);
            margin-top: 0;
            height: 100vh;
            width: 100%;
        }

        .main .first-column {
            margin-top: 5%;
            display: flex;
            color: white;
            font-size: 22px;
            justify-content: center;
        }

        .main .first-column-title {
            margin-left: 2%;
            text-shadow: 0px 0px 7px black;
            margin-right: 10%;
            
        }

        .main .first-column-icon {
            margin-left: 10%;
        }

        .main .second-column {
            display: flex;
            justify-content: space-around;
            margin-top: 1%;
        }

        .main .second-column .sign-up-form form {
            background-color: white;
            padding-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            border-radius: 5px;

        }

        .main .second-column .sign-up-form .form-first-row {
            display: flex;
            
        }

        .main .second-column .sign-up-form .form-first-row input {
            height: 25px; 
            padding-left: 10px;
            outline: none;
        }

        .main .second-column .sign-up-form .form-first-row input:focus {
            border-color: skyblue;
        }

        .main .second-column .sign-up-form .form-second-row {
            margin-top: 10px;
            display: flex;
            border-bottom: solid 2px skyblue;
            padding-bottom: 20px;

        }

        .main .second-column .sign-up-form .form-second-row select {
            height: 32px; 
            padding-left: 10px;
            outline: none;
            width: 185px;
        }

        .main .second-column .sign-up-form .form-second-row input {
            height: 25px;
            padding-left: 10px;
            outline: none;
        }

        .main .second-column .sign-up-form .form-second-row input:focus {
            border-color: skyblue;
        }

        .main .second-column .sign-up-form .form-third-row {
            padding-top: 20px;
            display: flex;
        }

        .main .second-column .sign-up-form .form-third-row input {
            height: 25px;
            padding-left: 10px;
            outline: none;
        }

        .main .second-column .sign-up-form .form-third-row input:focus {
            border-color: skyblue;
        }

        .main .second-column .sign-up-form .form-fourth-row {
            margin-top: 10px;
            display: flex;
            border-bottom: solid 2px skyblue;
            padding-bottom: 20px;
        }

        .main .second-column .sign-up-form .form-fourth-row input {
            height: 25px;
            padding-left: 10px;
            outline: none;
        }

        .main .second-column .sign-up-form .form-fourth-row input:focus {
            border-bottom: solid 2px skyblue;
        }

        .main .second-column .sign-up-form .form-fifth-row {
            display: flex;
            justify-content: right;
            margin-top: 20px;
        }


        .main .form-sixth-row {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .main .form-sixth-row input[type="submit"] {
            height: 39px;
            width: 277px;
            font-size: 15px;
            background-color: #0056FC;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .main .form-sixth-row input[type="submit"]:hover {
            cursor: pointer;
            background-color: #0c3fa5;
        }

    </style>

    <body>

        <div class="background">

            <div class="main">

                <div class="first-column">
                    <div class="first-column-icon">
                        <i class="fa-solid fa-expand fa-3x"></i>
                    </div>
                    <div class="first-column-title">
                        <h3>PUNP Face Recognition Attendance</h3>
                    </div>
                </div>

                <div class="second-column">

                    <div class="sign-up-form">

                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">

                            <div>
                                <h1 style="border-bottom: solid 2px skyblue">SIGNUP</h1>
                            </div>

                            <div class="form-first-row">
                                <div>
                                    <input type="text" name="firstname" placeholder="Firstname" pattern="[a-zA-Z,\s.]+" title="Type only letters! eg.Sample Sample" required>
                                </div>
                                <div style="margin-left: 10px;">
                                    <input type="text" name="middlename" placeholder="Middlename" pattern="[a-zA-Z,\s.]+" title="Type only letters! eg.Sample Sample" required>
                                </div>
                                <div style="margin-left: 10px;">
                                    <input type="text" name="lastname" placeholder="Lastname" pattern="[a-zA-Z,\s.]+" title="Type only letters! eg.Sample Sample" required>
                                </div>
                            </div>

                            <div class="form-second-row">
                                <div>
                                    <input type="text" name="id_number" placeholder="ID Number" maxLength="7" pattern="[0-9]+" title="ID Number must be a number and 7 digit only! eg.1234567" required>
                                </div>
                                <div style="margin-left: 10px;">
                                    <select name="course">
                                        <option value="BSIT">BSIT</option>
                                        <option value="RPSEA">RPSEA</option>
                                        <option value="BSC">BSC</option>
                                    </select>
                                </div>
                                <div style="margin-left: 10px;">
                                    <select name="section">
                                        <option value="A">Section A</option>
                                        <option value="B">Section B</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-third-row">
                                <div>
                                    <input type="text" name="guardian_name" placeholder="Guardian Name" pattern="[a-zA-Z,\s.]+" title="Type only letters! eg.Sample Sample" required>
                                </div>
                                <div style="margin-left: 10px;">
                                    <input type="text" name="guardian_number" placeholder="Guardian Number" pattern="[0-9]{11}"  title="Type only numbers up to 11 digit eg.09481239328!" required>
                                </div>
                                <div style="margin-left: 10px;">
                                    <input type="text" name="address" placeholder="Address" required>
                                </div>
                            </div>

                            <div class="form-fourth-row">
                                <div>
                                    <input type="text" name="username" placeholder="Username" required minLength="8">
                                </div>
                                <div style="margin-left: 10px;">
                                    <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=!]).{8,}" title="Must contain at least one number, one uppercase letter, one lowercase letter, one special character, and be at least 8 characters long." required>
                                </div>
                                <div style="margin-left: 10px;">
                                    <input type="password" name="confirm_password" placeholder="Confirm Password" title="Please confirm your password" required>
                                </div>
                            </div>

                            <div class="form-fifth-row">
                                <div style="margin-right: 15px;">
                                    <label>Image</label>
                                </div>
                                <div>
                                    <input type="file" name="image" accept=".jpg,.png,.jpeg" required>
                                </div>
                            </div>

                            <div class="form-sixth-row">
                                <div>
                                    <input type="submit" name="submit" value="Sign up">
                                </div>
                                
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>

<?php

    include("Database/database.php");

    function is_name_already_exist($name) {

        include("Database/database.php");
        $sql = "SELECT name FROM student_accounts;";
        $result = mysqli_query($conn, $sql);

        while($data = mysqli_fetch_assoc($result)) {
            if($data['name'] == $name) {
                return true;
            }
        }

        return false;
    }

    function is_id_number_is_already_exist($id_number) {

        include("Database/database.php");
        $sql = "SELECT id_number FROM student_accounts;";
        $result = mysqli_query($conn, $sql);

        while($data = mysqli_fetch_assoc($result)) {
            if($data['id_number'] == $id_number) {
                return true;
            }
        }

    }

    if(isset($_POST["submit"])) {

        date_default_timezone_set('Asia/Manila');
        $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
        $middlename = filter_input(INPUT_POST, "middlename", FILTER_SANITIZE_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS);
        $name = "{$lastname}, {$middlename} {$firstname}";
        $id_number = filter_input(INPUT_POST, "id_number", FILTER_SANITIZE_SPECIAL_CHARS);
        $course = filter_input(INPUT_POST, "course", FILTER_SANITIZE_SPECIAL_CHARS);
        $section= filter_input(INPUT_POST, "section", FILTER_SANITIZE_SPECIAL_CHARS);
        $guardian_name = filter_input(INPUT_POST, "guardian_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $guardian_number = filter_input(INPUT_POST, "guardian_number", FILTER_SANITIZE_SPECIAL_CHARS);
        $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $confirm_password = filter_input(INPUT_POST, "confirm_password", FILTER_SANITIZE_SPECIAL_CHARS);
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $date_registered = date("m/d/y h:i:s a");

        $sql = "INSERT INTO student_accounts(name,
                                            section,
                                            id_number,
                                            course,
                                            guardian_name,
                                            guardian_number,
                                            address,
                                            username,
                                            password,
                                            face_image,
                                            date_registered)

                VALUES('{$name}',
                        '{$section}',
                        '{$id_number}',
                        '{$course}',
                        '{$guardian_name}',
                        '{$guardian_number}',
                        '{$address}',
                        '{$username}',
                        '{$password}',
                        '{$image}',
                        '{$date_registered}');";
        
        

        
        if($password == $confirm_password) {

            if(!(is_name_already_exist($name) && is_id_number_is_already_exist($id_number))) {
                if(mysqli_query($conn, $sql)) {
                    echo "<script>window.alert('Successfully signup!')</script>";
                    mysqli_close($conn);
                    echo "<script>window.location.href='index.php';</script>";
                } else {
                    echo "<script>window.alert('Error has occured while signup!')</script>";
                }
            } else {
                echo "<script>window.alert('Student ID Number or Student Name is already exist!')</script>";
            }
    
        } else {
            echo "<script>window.alert('Password does not match!')</script>";
        }
        
    } else if(isset($_POST["login"])) {
        echo "<script>window.location.href='index.php';</script>";
    }

?>
