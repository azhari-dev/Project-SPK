<?php 

    define("DB", new PDO('mysql:host=localhost;dbname=coba-spk', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]));

    function authenticate(&$errors, $username, $password){
        try {
            $statement = DB->prepare("SELECT * FROM users WHERE username = :username AND password = SHA2(:password, 256)");
            $statement->execute([
                ':username' => $username,
                ':password' => $password
            ]);

            if ($statement->rowCount() > 0){
                $user = $statement->fetch(PDO::FETCH_ASSOC);

                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = 'user';
            } 

            return $statement->rowCount();
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

?>
