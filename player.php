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

<body>
    <div class="container mt-5">
        <h1 class="text-center">Player: <?php echo $_SESSION['playerName']; ?> in Room:
            <?php echo $_SESSION['roomName']; ?></h1>
        <button id="buzzBtn" class="btn btn-success btn-lg mt-5">Buzz In!</button>
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