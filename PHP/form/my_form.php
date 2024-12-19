<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myStyle.css">
    <title>Document</title>
</head>
<body>
    <h2>PHP FORM VALIDATION WITH MAIN CONTROLLERS</h2>
    <form method="post" action="display.php">
        <label for="name"> Enter your name:</label>
        <br>
        <input type="text" value="your name" id="name" name="name">
        <br><br>
        <label for="pass"> Enter your password:</label>
        <br>
        <input type="password" id="password" name="password">

        <br><br>
        <label for="comment"> Enter your comment:</label>
        <br>
        <textarea id="comment" name="comment" rows="5" cols="40"> </textarea>

        <br><br>
        <label for="gender"> Gender:</label>
        <br>
        <input type="radio" id="gender" value="female" name="gender"> Female <br>
        <input type="radio" id="gender" value="male" name="gender"> Male <br>
        <input type="radio" id="gender" value="other" name="gender"> Other

        <br><br>
        <label for="gender"> Topping:</label>
        <br>
        <input type="checkbox" id="top" value="pep" name="top[]"> Pepperoni <br>
        <input type="checkbox" id="top" value="mush" name="top[]"> Mushrooms <br>
        <input type="checkbox" id="top" value="olv" name="top[]"> Olives


        <!-- dropdown list -->
        <br><br>
        <label for="CAR"> Select your car:</label>
        <br>
        <select id="car" name="car">
            <option value="Fiat"> Fiat</option>
            <option value="Mercedes"> Mercedes</option>
            <option value="Audi"> Audi</option>
            <option value="BMW"> BMW</option>
        </select>

        <!-- list box single selection -->
        <br><br>
        <label for="CAR"> Select your car from listbox:</label>
        <br>
        <select id="carlist" size=4 name="carlist">
            <option value="Fiat"> Fiat</option>
            <option value="Mercedes"> Mercedes</option>
            <option value="Audi"> Audi</option>
            <option value="BMW"> BMW</option>
        </select>



        <!-- list box multiple selection -->
        <br><br>
        <label for="CAR"> Select your car from multiple listbox:</label>
        <br>
        <select id="carlist" size=4 multiple name="carlistmultiple[]">
            <option value="Fiat"> Fiat</option>
            <option value="Mercedes"> Mercedes</option>
            <option value="Audi"> Audi</option>
            <option value="BMW"> BMW</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">

    </form>

</body>
</html>
