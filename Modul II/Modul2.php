<!DOCTYPE html>
    <head>
    <title>Modul 2</title>
</head>
    <body>
    <form method="post" name="Login_Form">
    <table>
        <td><h3>Login</h3></td>
        <tr></tr>
        <td>Username : </td>
        <td><input name="username" type="text" placeholder="Username"></td>
        <tr></tr>
        <td>Password : </td>
        <td><input name="password" type="text" placeholder="Password" ></td>
        <tr></tr>
        <td><input type="submit" value="Login"></td>
</table>
</form>
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $error = false;
    
    if (strlen($username)>7){
        echo "Error : Username Lebih Dari 7" . "<br>";
        $error = true;

    }if (strlen($password)<10){
        echo "Error : Password Kurang dari 10 Karakter". "<br>";
        $error = true;

    }if (!preg_match("/[A-Z]/", $password) ) {
        echo "Error : Password Harus Mengandung Huruf Kapital ". "<br>";
        $error = true;

    }if (!preg_match("/[a-z]/", $password)) {
        echo "Error : Password Harus Mengandung Huruf Kecil ". "<br>";
        $error = true;

    }if (!preg_match("/[^a-zA-Z\d]/", $password)) {
        echo "Error : Password Harus Mengandung Karakter Spesial ". "<br>";
        $error = true;

    }if (!preg_match("/[0-9]/", $password)) {
        echo "Error : Password Harus Mengandung Angka " . "<br>";
        $error = true;

    }if ($error == false){
        echo "Login Berhasil";
    }

}
              
?>
