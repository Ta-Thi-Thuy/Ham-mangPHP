<form method="post">
    <input type="text" name="name" placeholder="name">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="singin">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['name'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password =='admin'){
        echo '<h2> welcome </h2>';
    }
    else{
        echo '<h2> login error</h2>';
    }

}
