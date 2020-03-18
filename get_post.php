<?php

    if(isset($_GET['name'])) {
        // print_r($_GET);
        $name = htmlentities($_GET['name']);
        // echo $name;
    }

    /*
    if(isset($_POST['name'])) {
        print_r($_POST);
        $name = htmlentities($_POST['email']);
        echo $name;
    }

    if(isset($_REQUEST['name'])) {
        // print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }

    echo $_SERVER['QUERY_STRING'];
    */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile" ?></h1>

</body>
</html>