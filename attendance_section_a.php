<!DOCTYPE html>
<html>
    <head>
        <title>Attendance</title>
        <link rel="icon" href="">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <meta http-equiv="refresh" content="10"> -->
        <link rel="icon" href="favicon/clipboard-user-solid.svg">
        <script src="https://kit.fontawesome.com/5cff1fbee6.js" crossorigin="anonymous"></script>
        <style>
             @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
             body {
                margin: 0;
                font-family: 'Poppins';
                overflow: none;
             }

             /*Title*/
            .dashboard-title {
                display: flex;
                background-color: #444444;
                color: #FFFFFF;
                justify-content: flex-end;
                align-items: center;
                font-size: 3rem;
                height: 7rem; 
                width: 100vw;  
            }

            /*Bar icon*/
            .fa-bars {
                color: #EBE8E8;
                margin-left: 40rem;
                margin-right: 10rem;
            }
            .fa-bars:hover {
                color: red;
                cursor: pointer;
            }

            .fa-bars:active {
                color: white;
                cursor: pointer;
            }

            /*Table icon*/
            .fa-table-columns {
                margin-right: 20px
            }

            /*Navigation button*/
            .navigation-btn {
                display: flex;
                background-color: #EBE8E8;
                gap: 20px;
                width: 100vw;
            }
            .navigation-btn button {
                font-size: 24px;
                height: 50px;
                width: 17rem;
                border-radius: 20px;
                border: none;
                transition: background-color 0.5s ease;
                cursor: pointer;
            }
            .navigation-btn .attendance-btn {
                background-color: hsl(0, 0%, 100%);
            }
            .navigation-btn .history-attendance-btn, .log-out-button {
                background-color: hsl(0, 2%, 84%);
            }
            .navigation-btn .history-attendance-btn:hover, .log-out-button:hover {
                background-color: hsl(0, 2%, 70%);
            }
            .navigation-btn .history-attendance-btn:active, .log-out-button:active {
                background-color: hsl(0, 2%, 100%);
            }
            
            /*Tab buttons*/
            .container {
                background-color: #E2E0E0;
                margin-top: 30px;
                margin-left: 20px;
                margin-right: 20px;
                width: 97vw;
                box-shadow: 0 0 7px hsl(0, 0%, 90%);
                margin-right: 20px;
            }
            .tab-buttons {
                display: flex;
                gap: 1.3rem;
            }
            .tab-buttons button {
                width: 200px;
                height: 45px;
                font-size: 24px;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                transition: background-color 0.5s ease;
            }
            .tab-buttons .section-a {
                background-color: #6EDAFD;
            }
            .tab-buttons .section-b {
                background-color: hsl(0, 0%, 94%);
            }
            .tab-buttons .section-b:hover {
                background-color: hsl(0, 0%, 80%);
            }
            .container table {
                border: none;
                width: 97vw;
            }
            .container table .table-header, th {
                background-color: #6EDAFD;
            }
            .container table th {
                padding: 20px 30px;
                font-size: 24px;
            }
            .container table td {
                font-size: 24px;
                padding-left: 10px;
                background-color: #E2E0E0;
                
            }

            /*Right side panel*/
            .right-side-panel {
                position: absolute;
                left: 83vw;
                height: 88vh;
                background-color: #444444;
                transition: display 3s ease;
                display: none;
                padding: 1rem 2rem;
                object-fit: cover;
            }

            .right-side-panel img {
                width: 15rem;
                height: 15rem;
                border-radius: 100%;
            }

            
        </style>
    </head>
    <body>
        <div class="main">
            <!--Title-->
            <div class="dashboard-title">
                <i class="fa-solid fa-table-columns" style="color: #ffffff;"></i>
                Dashboard
                <i class="fa-solid fa-bars"></i>
            </div>

            <!--Right side panel-->
            <div class="right-side-panel" alt="Profile picture">
                <img src="Images/PUNP Logo.jpg">
            </div>

            <!--Navigation buttons-->
            <div class="navigation-btn">
                <div>
                    <button class="attendance-btn">
                        <i class="fa-solid fa-clipboard-user"></i>
                        Attendance
                    </button>
                </div>
                <div>
                    <button class="history-attendance-btn">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        Attendance History
                    </button>
                </div>
                <div>
                    <button class="log-out-button">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </button>
                </div>
            </div>

            <!--Table holder-->
            <div class="container">
                <div class="tab-buttons">
                    <div>
                        <button class="section-a">
                            <i class="fa-solid fa-section"></i>
                            Section A
                        </button>
                    </div>
                    <div>
                        <button class="section-b">
                            <i class="fa-solid fa-section"></i>
                            Section B
                        </button>
                    </div>
                </div>

                <div class="table-holder">
                    <table>
                        <tr class="table-header">
                            <th>
                                <i class="fa-solid fa-signature"></i>
                                Name
                            </th>
                            <th>
                                <i class="fa-solid fa-section"></i>
                                Section
                            </th>
                            <th>
                                <i class="fa-regular fa-clock"></i>
                                Time-In
                            </th>
                        </tr>

                        <?php
                            include("Database/database.php");
                            $sql = "SELECT student_name, time_in, section FROM attendance_today
                            WHERE section = 'A';";
                            $result = mysqli_query($conn, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($data = mysqli_fetch_assoc($result)) {
                                    echo 
                                    "
                                    <tr>
                                        <td>{$data['student_name']}</td>
                                        <td>{$data['section']}</td>
                                        <td>{$data['time_in']}</td>
                                    </tr>

                                    ";
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <script src="app.js"></script>
        <script>
            
            const sectionAButton = document.querySelector(".section-a");
            const sectionBButton = document.querySelector(".section-b");

            sectionAButton.addEventListener("click", () => {
                window.location.href = "attendance_section_a.php";
            });
            sectionBButton.addEventListener("click", () => {
                window.location.href = "attendance_section_b.php";
            });

            //Right side panel
            const rightSidePanel = document.querySelector(".right-side-panel");
            const barButton = document.querySelector(".fa-bars");

            barButton.addEventListener("click", () => {
                if(rightSidePanel.style.display == "block") {
                    rightSidePanel.style.display = "none";
                } else {
                    rightSidePanel.style.display = "block";
                }
            });
        </script>
    </body>
</html>