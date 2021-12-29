  
  <?php


if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'Admin';
    $action = 'index';
}

require_once('view/dashboard.php');

