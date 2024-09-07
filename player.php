<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['playerName'] = $_POST['playerName'];
    $_SESSION['roomName'] = $_POST['roomNameJoin'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player - Buzz In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="background-color: #f3f4f6;">
    <div class="container mt-5">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded text-center">
            <div class="card-header bg-warning text-dark">
                <h1>Player Name : <span class="text"><?php echo $_SESSION['playerName']; ?></span> in Room:
                    <span class="text-danger"><?php echo $_SESSION['roomName']; ?></span>
                </h1>
            </div>
            <div class="card-body">
                <button id="buzzBtn" class="btn btn-success btn-lg mt-5"
                    style="font-size: 2em; width: 100%; height: 100px;">Click Faster!</button>
            </div>
        </div>
    </div>

    <script>
        $('#buzzBtn').on('click', function () {
            $.ajax({
                url: 'server.php?action=buzz&player=<?php echo $_SESSION['playerName']; ?>',
                method: 'GET'
            });
        });
    </script>
</body>

</html>