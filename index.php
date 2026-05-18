<?php
$request = $_SERVER['REQUEST_URI'];
if ($request === '/') {
    header('Location: https://skygf.infinityfree.me/');
} else {
    header('Location: https://skygf.infinityfree.me' . $request);
}
exit;
?>