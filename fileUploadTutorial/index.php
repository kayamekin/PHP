<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            width: 100%;
            height: 100%;
        }

        form {
            position: absolute;
            display: block;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        input[type="submit"],
        input[type="file"] {
            padding: 10px;
            border: none;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 1px 2px 12px #232342;
            transition: .1s ease-in-out;
            cursor: pointer;

        }

        input[type="submit"]:hover {
            padding: 20px;
            box-shadow: 1px 2px 4px #02020250;
            cursor: pointer;

        }

    </style>
</head>

<body>

    <form action="dosya.php" method="POST" enctype="multipart/form-data">
        <input type="file" multiple="multiple" name="files[]">
        <br>
        <input type="submit" value="Dosyaları Yükle">
    </form>




</body>

</html>