<?php
require_once 'database.php';


if ($_SERVER['REQUEST_METHOD'] =='POST') {

    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
    $hobby = mysqli_real_escape_string($mysqli, $_POST['hobby']);
    $login = mysqli_real_escape_string($mysqli, $_POST['login']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $date = mysqli_real_escape_string($mysqli, $_POST['date']);
    $credit_card = mysqli_real_escape_string($mysqli, $_POST['card']);
    $about = mysqli_real_escape_string($mysqli, $_POST['about']);
    $list = mysqli_real_escape_string($mysqli, $_POST['list']);

    $sql = mysqli_query( $mysqli,
        "INSERT INTO `registr` (`name`, `surname`, `age`, `gender`, `hobby`, `login`, `password`, `date`, `credit_card`, `about`, `list`)
VALUES ('$name', '$surname', '$age', '$gender', '$hobby', '$login', '$password', '$date', '$credit_card', '$about', '$list' )");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
<h1>Registration</h1>
</header>
<main>
    <form method="post" action="#">
        <ul>
            <li>
                <input type="text" name="name" placeholder="Name">
            </li>
            <li>
                <input type="text" name="surname" placeholder="Surname">
            </li>
            <li>
                <input type="number" name="age" placeholder="Age">
            </li>
            <li>
                <label for="man">Man</label>
                <input type="radio" name="gender" id="man" value="man">
                <label for="woman">Woman</label>
                <input type="radio" name="gender" id="woman" value="woman">
            </li>
            <li>Hobby
                <ul>
                    <li>
                        <input type="checkbox" name="football" id="football" value="football">
                        <label for="football">Football</label>
                    </li>
                    <li>
                        <input type="checkbox" name="cook" id="cook" value="cook">
                        <label for="cook">Cook</label>
                    </li>
                    <li>
                        <input type="checkbox" name="read" id="read" value="read">
                        <label for="read">Read</label>
                    </li>
                    <li>
                        <input type="checkbox" name="sing" id="sing" value="sing">
                        <label for="sing">Sing</label>
                    </li>
                </ul>
            </li>
            <li>
                <input type="text" name="login" placeholder="login">
            </li>
            <li>
                <input type="password" name="password">
            </li>
            <li>
                <input type="date" name="date" placeholder="Birthday">
            </li>
            <li>
                <input type="number" name="card" placeholder="Number card">
            </li>
            <li>
                <textarea name="about" placeholder="Tell something about you" rows="5" cols="30"></textarea>
            </li>
            <li>
                <select name="list">
                    <option value="History">History</option>
                    <option value="Music">Music</option>
                    <option value="Choreography">Choreography</option>
                    <option value="Math">Math</option>
                </select>
            </li>
            <li>
                <input type="submit" name="submit" value="Submit">
            </li>
        </ul>
    </form>
</main>

<footer>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

