
//Navigation buttons
const attendanceButton = document.querySelector(".attendance-btn");
const attendanceHistoryButton = document.querySelector(".history-attendance-btn");
const logOutButton = document.querySelector(".log-out-button");





//Navigation buttons
logOutButton.addEventListener("click", () => {
    const logout = window.confirm("Are you sure you want to logout?");
    if(logout) {
        window.location.href = "index.php";
    } 
});
attendanceButton.addEventListener("click", () => {
    window.location.href = "attendance_section_a.php";
});
attendanceHistoryButton.addEventListener("click", () => {
    window.location.href = "attendance_history_section_a.php";
});


