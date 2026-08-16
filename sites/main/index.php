<!DOCTYPE html>
<html>

<head>
    <title>Main Site</title>
</head>

<body>

    <h1>Main localhost website</h1>

    <p>
        Host:
        <?= htmlspecialchars($_SERVER['HTTP_HOST']) ?>
    </p>

    <p>
        PHP version:
        <?= PHP_VERSION ?>
    </p>

</body>

</html>