<!DOCTYPE html>
<html lang="en">

<head>
    <!-- defining the deault location of the project -->
    <base href="http://localhost/SignatureCuisine/">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--php first letter hapital-->
    <title> <?= ucfirst($pageName)  ?> | Signature cuisine</title>
    <!--to define the content for the users of the website-->
    <meta name="title" content="Signature cuisine - Amazing & Delicious Food" />

    <!--incon of the tital-->
    <link rel="shortcut icon" href="images/logoonly.png" type="image/png" />

    <!-- google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" />
    <!-- custom css link-->
    <link rel="stylesheet" href="style.css" />

    <!-- Notify JS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" integrity="sha512-CJ6VRGlIRSV07FmulP+EcCkzFxoJKQuECGbXNjMMkqu7v3QYj37Cklva0Q0D/23zGwjdvoM4Oy+fIIKhcQPZ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Jquery CDN-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body class="<?= $pageName ?>">