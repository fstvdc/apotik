<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Client</title>
    <style>
    /* Latar belakang gelap */
    body {
        background-color: #111;
        color: #fff;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #444;
        background-color: #222;
        margin-top: 100px;
    }

    .form-group label {
        color: white;
    }

    .form-control {
        background-color: #333;
        color: white;
        border: 1px solid #444;
    }

    .btn {
        background-color: #007bff;
        color: #fff;
    }

    .btn:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Login</h2>
        <form action="loginProses.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <p>don't have an account yet?, <a href="../register/">register</a></p>
            <button type="submit" class="btn btn-block mb-4">Login</button>
            <?php
            if (isset($_GET['error']) && $_GET['error'] === 'username_and_password_mismatch') {
                echo '<div class="alert alert-danger">Username and password do not match.</div>';
            } elseif (isset($_GET['error']) && $_GET['error'] === 'username_not_found') {
                echo '<div class="alert alert-danger">Username not found!. Please try again.</div>';
            } elseif (isset($_GET['error']) && $_GET['error'] === 'not_admin') {
                echo '<div class="alert alert-danger">You are not an admin!. Please try again.</div>';
            }
            ?>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>