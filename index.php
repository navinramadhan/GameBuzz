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
        <h1 class="text-center mb-4">Buzz In Game: Choose Your Role</h1>
        <div class="row justify-content-center">
            <!-- Host Card -->
            <div class="col-md-5">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        <h3>Host</h3>
                    </div>
                    <div class="card-body">
                        <form action="host.php" method="post">
                            <div class="mb-3">
                                <label for="roomName" class="form-label">Room Name:</label>
                                <input type="text" class="form-control" id="roomName" name="roomName" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Create Room</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Player Card -->
            <div class="col-md-5">
                <div class="card text-center">
                    <div class="card-header bg-success text-white">
                        <h3>Player</h3>
                    </div>
                    <div class="card-body">
                        <form action="player.php" method="post">
                            <div class="mb-3">
                                <label for="playerName" class="form-label">Player Name:</label>
                                <input type="text" class="form-control" id="playerName" name="playerName" required>
                            </div>
                            <div class="mb-3">
                                <label for="roomNameJoin" class="form-label">Room Name:</label>
                                <input type="text" class="form-control" id="roomNameJoin" name="roomNameJoin" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Join Room</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>