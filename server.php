<?php
session_start();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'fetch') {
        if (isset($_SESSION['players'])) {
            $players = $_SESSION['players'];
            asort($players);
            foreach ($players as $player => $time) {
                echo "<li class='list-group-item'>{$player} - " . date('H:i:s', $time) . "</li>";
            }
        }
    } elseif ($action == 'buzz') {
        $player = $_GET['player'];
        if (!isset($_SESSION['players'][$player])) {
            $_SESSION['players'][$player] = time();
        }
    } elseif ($action == 'reset') {
        $_SESSION['players'] = [];
    }
}
?>