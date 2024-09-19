<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PUNP - Face Recognition  Signup</title>
        <link rel="stylesheet" href="login.css">
        <link rel="icon" href="favicon/expand-solid.svg">
        <script src="https://kit.fontawesome.com/5cff1fbee6.js" crossorigin="anonymous"></script>
</head>
<body>

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
            
            
        }

        /*Form*/


        .main .second-column {
            display: flex;
            justify-content: space-around;
            margin-top: 2%;
        }

        .main .second-column .sign-up-form form {
            background-color: white;
            padding-top: 20px;
            padding-left: 50px;
            padding-right: 50px;
            padding-bottom: 70px;
            width: 350px;
            height: 401px;
            border-radius: 5px;

        }

        /*Title*/
        .main .second-column .sign-up-form form .title {
            margin-bottom: 20px;
        }

        .main .second-column .sign-up-form input[type="text"], input[type="password"] {
            height: 32px;
            width: 300px;
            padding-left: 40px;
            font-size: 16px;
            
        }

        .main .second-column .sign-up-form .first-row i {
            font-size: 25px;
            transform: translate(10px, 35px);
        }

        .main .second-column .sign-up-form input[type="password"] {
            margin-top: 20px;
        }

        .main .second-column .sign-up-form .second-row {
            border-bottom: solid 3px skyblue;
            padding-bottom: 40px;
        }

        .main .second-column .sign-up-form .second-row i {
            font-size: 25px;
            transform: translate(10px, 55px);
        }

        .third-row {
            margin-top: 40px;
            display: flex;
            justify-content: space-around;
        }


        .third-row input {
            height: 39px;
            width: 150px;
            background-color: #0056FC;
            color: white;
            border-radius: 5px;
            border: none;
        }

        .third-row input:hover {
            cursor: pointer;
            background-color: #0c3fa5;
        }

        .fourth-row {
            display: flex;
            justify-content: flex-end;
            font-size: 13px;
        }
    </style>

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
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

                            <div class="title" style="border-bottom: solid 3px skyblue">
                                <h1>LOGIN</h1>
                            </div>

                            <div class="first-row">
                                <i class="fa-solid fa-user fa-2x"></i>
                                <input name="username" type="text" placeholder="username">
                            </div>

                            <div class="second-row">
                                <i class="fa-solid fa-key"></i>
                                <input name="password" type="password" placeholder="password">
                            </div>

                            <div class="third-row">
                                <div>
                                    <input name="submit" type="submit" value="Login">
                                </div>
                                <div>
                                    <input id="signup" name="signup" style="margin-left: 50px;" type="submit" value="Signup">
                                </div>
                            </div>

                            <div class="fourth-row">
                                <p>
                                    <a href="">Forgot password?</a>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            
        </div>

        <script src="script.js"></script>
</body>
</html>

<?php
    include("Database/database.php");

    function retrieved_data($username, $password) {
        include("Database/database.php");
        $sql = "SELECT username, password FROM student_accounts;";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($data = mysqli_fetch_assoc($result)) {
                if($data['username'] == $username && $data['password'] == $password) {
                    return true;
                }
            }
        }
        return false;
    }

    function main_program() {

        if(isset($_POST['submit'])) {

            //Take the username, password and sanitize it.
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

            //Check if it is in database
            if(retrieved_data($username, $password)) {
                echo "<script>window.alert('Successfully login.')</script>";
                echo "<script>window.location.href='attendance_section_a.php'</script>";
            } else {
                echo "<script>window.alert('Login error! Invalid type on username or password.')</script>";
            }

        } else if(isset($_POST['signup'])) {
            //Change the link location
            echo "<script>window.location.href = 'signup.php';</script>";
        }
    }

    main_program();
    mysqli_close($conn);

?>