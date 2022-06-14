<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="text" name="index">
        <input type="submit">
    </form>

    <?php    
    include "calendar.php";
    $calendar = new Calendar();
    $month = $_POST['index'];
    $calendar->display($month - 1);
    ?>
</body>

</html>