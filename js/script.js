// Function to handle logout
function logout() {
    // Add your logout logic here, for example:
    // You might want to delete the cookie and redirect the user to a login page
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "role=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "ID_user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    window.location.href = 'log-in/log_in.php';
}
// Attach the logout function to the logout link
var log_out = document.getElementById("logout");
log_out.onclick = function() {
    logout();

};


