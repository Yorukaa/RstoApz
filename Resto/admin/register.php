<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="login">
        <form method="post" action="prosesregister.php">
            <table>
                <tr>
                    <td>Nama Lengkap : </td>
                    <td>
                        <input type="text" name="nama_pelanggan" placeholder="Nama Lengkap">
                    </td>
                    </tr>
                    <tr>
                    <td>Alamat : </td>
                    <td>
                        <input type="text" name="alamat" placeholder="Alamat">
                    </td>
                    </tr>
                    <tr>
                    <td>Nomor HP : </td>
                    <td>
                        <input type="number" name="no_hp" placeholder="Nomor Hp">
                    </td>
                    </tr>
                    <tr>
                    <td>Username : </td>
                    <td>
                        <input type="text" name="username" placeholder="Username">
                    </td>
                    </tr>
                    <tr>
                    <td>Password : </td>
                    <td>
                        <input type="password" name="password" placeholder="Password">
                    </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <button type="submit" name="register" value="register" class="btn-checkout">Register</button>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <a href="login.php">Sudah Punya Akun? Login Disini!</a>
                        </td>
                    </tr>
            </table>
        </form>
    </div>
</body>
</html>