<?php
require_once 'controllers/whatsappController.php';

$controller = new WhatsappController();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri == '/whatsapp' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    $controller->verifyToken();
} elseif ($uri == '/whatsapp' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->receivedMessage();
} else {
    header("HTTP/1.1 404 Not Found");
    echo "404 Not Found";
}
?>
