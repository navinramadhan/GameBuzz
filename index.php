<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzz In Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Buzz In Game</h1>
        <div class="row">
            <div class="col-md-6">
                <h3>Host</h3>
                <form action="host.php" method="post">
                    <div class="mb-3">
                        <label for="roomName" class="form-label">Room Name:</label>
                        <input type="text" class="form-control" id="roomName" name="roomName" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Room</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Player</h3>
                <form action="player.php" method="post">
                    <div class="mb-3">
                        <label for="playerName" class="form-label">Player Name:</label>
                        <input type="text" class="form-control" id="playerName" name="playerName" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomNameJoin" class="form-label">Room Name:</label>
                        <input type="text" class="form-control" id="roomNameJoin" name="roomNameJoin" required>
                    </div>
                    <button type="submit" class="btn btn-success">Join Room</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
