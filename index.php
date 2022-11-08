
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vaccination system</title>
</head>
<body>
    <form action="login-back.php" method="post">
        <label for="">username</label><input type="text" name="uname" id="uname" required><br>
        <label for="">password</label><input type="password" name="password" id="password" required><br>
        <select name="role" id="role">
            <option value="admin">Admin</option>
            <option value="MOH">MOH staff</option>
            <option value="public">Public</option>
        </select><br>
        <a href="public-signup.php">Sign up</a><br>
        <input type="submit" value="submit" name="submit"><br>
    </form>
</body>
</html>