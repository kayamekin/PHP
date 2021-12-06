<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <form action="kayit.php" method="POST">
        <div class="container-form">

            <label>Adınız:</label>
            <input class="form-input" type="text" name="ad">
            <label>soyisim:</label>
            <input class="form-input" type="text" name="soyad">
            <label>password:</label>
            <input class="form-input" type="password" name="parola">
            <label>password 2:</label>
            <input class="form-input" type="password" name="parola2">
            <hr>
            <table>
                <tr>
                    <td>şehir</td>

                </tr>
                <tr>
                    <td>
                        <select name="sehir" id="vole">
                            <option value="belirtilmedi">-sehir-</option>
                            <option value="agri">Ağrı</option>
                            <option value="usak">uşak</option>
                            <option value="ankara">Ankara</option>
                            <option value="samsun">Samsun</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="cinsiyet" value="erkek">Erkek
                    </td>
                    <td>
                        <input type="radio" name="cinsiyet" value="kadin">Kadın
                    </td>
                </tr>
            </table>

            <input type="submit" value="Gönder">

        </div>
    </form>



</body>

</html>