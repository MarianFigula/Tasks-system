<?php

try {
    $db = new PDO("mysql:host=147.175.98.87;dbname=jedalne", "xfigula", "OQubEFtap1wQECc");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
TUTO ZMENU SPRAVIL MARIAN K.
TUTO ZMENU SPRAVIL ANTRIK.
</body>
</html>
