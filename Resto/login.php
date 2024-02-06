<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login">
        <form method="post" action="proseslogin.php">
            <table>
                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <button class="btn-checkout" type="submit" name="login" value="login">Login</button>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <a href="register.php">Buat Akun</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>