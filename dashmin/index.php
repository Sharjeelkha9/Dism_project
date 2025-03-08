<?php
include("components/header.php");
// Check if the user is not logged in or their session type is not set
if (!isset($_SESSION['usertype'])) {
    echo "<script>
    alert('Please log in first');
    location.assign('../index.php');
    </script>";
    exit;
}

// Restrict access for employees and non-admins
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name

if ($_SESSION['usertype'] == "employee" && $current_page != "order_page.php") {
    echo "<script>
    location.assign('dashmin/order.php'); // Redirect to the order page
    </script>";
    exit;
}

// Restrict non-admins (not employee or admin)
if ($_SESSION['usertype'] != "admin" && $_SESSION['usertype'] != "employee") {
    echo "<script>
    alert('Only admin and employees can access');
    location.assign('../order.php');
    </script>";
    exit;
}
?>
           
            <?php
include("components/footer.php");
?>


        