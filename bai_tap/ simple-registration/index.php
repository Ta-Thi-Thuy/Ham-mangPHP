<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $error = '';

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Dinh dang mail ko dung";
        }

        if (empty($username) || empty($email) || empty($phone)) {
            $error = "Ban chua nhap thong tin";
        }

        if (isset($error)){
            echo $error;
        }

        if (empty($error)) {
            saveDataJSON("users.json", $username, $email, $phone);
            echo "Saved successfully.";
        }
    } else {
        echo "Bạn chưa nhập.";
    }

}

function saveDataJSON($filename, $name, $email, $phone)
{
    if (!file_exists($filename)) {
        file_put_contents($filename, "[]");
    }
    $js_decode = json_decode(file_get_contents($filename), true);
    $contact = array('name' => $name, 'email' => $email, 'phone' => $phone);
    array_push($js_decode, $contact);
    file_put_contents($filename, json_encode($js_decode, JSON_PRETTY_PRINT));
}

?>


<html>
<header>
    <title>Trang đăng ký người dùng
    </title>
    <style>
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</header>

<body>
<br>
<h1> Trang đăng ký người dùng
</h1>
<br>
<form method="POST">
    <input type="text" name="username" placeholder="Input Username"><br><br>
    <input type="text" name="email" placeholder="Input Email"><br><br>
    <input type="number" name="phone" placeholder="Input Phone Number"><br><br>
    <input type="submit" id="submit" value="Submit">
</form>


<h2>Registration list</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach (json_decode(file_get_contents("/Users/letam/Library/Mobile Documents/com~apple~CloudDocs/webroot/MangHamPHP/users.json"), true) as $registration) { ?>
        <tr>
            <td><?= $registration['name']; ?></td>
            <td><?= $registration['email']; ?></td>
            <td><?= $registration['phone']; ?></td>
        </tr>
    <?php }; ?>
</table>


</body>


</html>
