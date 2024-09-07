<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['roomName'] = $_POST['roomName'];
    $_SESSION['players'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host - Buzz In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Host Room: <?php echo $_SESSION['roomName']; ?></h1>
        <div id="resultArea" class="mt-4">
            <h3>Player Results:</h3>
            <ul id="results" class="list-group"></ul>
        </div>
        <button id="resetBtn" class="btn btn-danger mt-3">Reset</button>
    </div>

    <script>
        function fetchResults() {
            $.ajax({
                url: 'server.php?action=fetch',
                method: 'GET',
                success: function (data) {
                    $('#results').html(data);
                }
            });
        }

        $('#resetBtn').on('click', function () {
            $.ajax({
                url: 'server.php?action=reset',
                method: 'GET',
                success: function () {
                    fetchResults();
                }
            });
        });

        setInterval(fetchResults, 1000); // Fetch results every second
    </script>
</body>

</html>