<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <title>FN</title>
</head>
<body>
    <?php require'header.php'; ?>
    <main>
        <form action="">
            <input type="text" placeholder="name">
            <input type="mail" placeholder="E-mail">
            <input type="number" placeholder="amount">
            <select name="" id="">
                <option value="">DKK</option>
                <option value="">USD</option>
                <option value="">EUR</option>
                <option value="">GBP</option>
            </select>
            <input type="submit" value="Donate">
        </form>
    </main>
    <?php require'footer.php'; ?>
</body>
</html>