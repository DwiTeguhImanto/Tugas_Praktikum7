<html>

<head>
    <title>Koneksi Database MySQL</title>
</head>

<body>
    <h1>Demo Koneksi Database MySQL</h1>
    <?php
    $con = mysqli_connect("localhost", "root", "", "phpdasar");

    // check connection 
    if (mysqli_connect_errno()) {
        echo "Failed to connect MySQL : " . mysqli_connect_error();
        exit();
    }
    ?>
</body>

</html>