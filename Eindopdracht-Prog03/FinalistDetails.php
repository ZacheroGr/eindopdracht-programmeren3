<?php
require_once "includes/data.php";

if (!isset($_GET['id'])) {
    $data = getTheFinals();
} else {
    $data = getFinalistDetails($_GET['id']);
}
header("Content-Type: application/json");
echo json_encode($data);
exit;
?>