<!DOCTYPE html>
<html>
    <head>
        <title>form login</title>
    </head>
    <body>
        <form method="POST" action="output.php">
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <center><H1> BIODATA </H1></center>
                <tr>
                    <td width="130">Nama</td>
                    <td><input type="text" name="nama" ></td>
                </tr>
                <tr>
                    <td width="130">Alamat</td>
                    <td><input type="text" name="alamat" ></td>
                </tr>
                <tr>
                    <td width="130">TTL</td>
                    <td><input type="text" name="ttl" ></td>
                </tr>
                <tr>
                    <td width = "130"> Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td width="130">No.Telp</td>
                    <td><input type="text" name="notelp" ></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnLogin" value="Kirim">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
    </html>