<?php
session_start();

// Set timezone to Jakarta (WIB)
date_default_timezone_set('Asia/Jakarta');

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'fetch') {
        if (isset($_SESSION['players'])) {
            $players = $_SESSION['players'];
            asort($players); // Mengurutkan berdasarkan waktu
            $index = 1; // Menambah nomor urut untuk setiap pemain
            foreach ($players as $player => $time) {
                // Convert timestamp to milliseconds and format the time
                $milliseconds = round(($time - floor($time)) * 1000); // Get the milliseconds part
                $formattedTime = date('H:i:s', floor($time)) . ':' . str_pad($milliseconds, 3, '0', STR_PAD_LEFT); // Format time with milliseconds

                echo "<tr>
                        <td>{$index}</td>
                        <td>{$player}</td>
                        <td>{$formattedTime}</td>
                      </tr>";
                $index++;
            }
        }
    } elseif ($action == 'buzz') {
        $player = $_GET['player'];
        if (!isset($_SESSION['players'][$player])) {
            $_SESSION['players'][$player] = microtime(true); // Menyimpan waktu dengan microseconds
        }
    } elseif ($action == 'reset') {
        $_SESSION['players'] = []; // Mengosongkan daftar pemain
    }
}
?>