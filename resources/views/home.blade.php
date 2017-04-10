<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Book</title>
</head>
<body>
    <form action="/" method="POST">
        <table border="0">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="frmName" value="" size="30" minlength="2" maxlength="50">
                </td>
            </tr>
            <tr>
                <td>Message</td>
                <td>
                    <input type="text" name="frmMessage" value="" size="30" minlength="2" maxlength="140">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>