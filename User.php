<?php

require_once('connectdb.php');

class USER
{

    private $conn;
    private $userconn;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;

        $userdb = new UserDB();
        $udb = $userdb->dbConnection();
        $this->userconn = $udb;
    }

    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);

        return $stmt;
    }

    public function register($uid, $umail, $upass, $level)
    {
        try {
            $new_password = password_hash($upass, PASSWORD_DEFAULT);

            $stmt = $this->conn->prepare(
                "INSERT INTO admin(uid,email,password,level) 
		                                               VALUES(:id, :mail, :pass, :level)"
            );

            $stmt->bindparam(":id", $uid);
            $stmt->bindparam(":mail", $umail);
            $stmt->bindparam(":pass", $new_password);
            $stmt->bindparam(":level", $level);

            $stmt->execute();

            return $stmt;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function doLogin($uid, $upass)
    {
        try {
            $stmt = $this->conn->prepare("SELECT uid, password, level FROM admin WHERE uid=:uid");
            $stmt->execute(array(':uid' => $uid));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() == 1) {
                if (password_verify($upass, $userRow['password'])) {
                    $_SESSION['user_session'] = $userRow['uid'];
                    $_SESSION['level'] = $userRow['level'];

                    return true;
                } else {
                    print ("weird");

                    return false;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            var_dump($e);
        }
        try {
            $stmt = $this->userconn->prepare("SELECT uname, pass FROM xoops2_users WHERE uname=:uid");
            $stmt->execute(array(':uid' => $uid));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            //echo $userRow;
            if ($stmt->rowCount() == 1) {
                if (md5($upass) == $userRow['pass']) {
                    $_SESSION['level'] = 3;
                    $_SESSION['user_session'] = $userRow['uname'];

                    return true;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            var_dump($e);
        }
    }

    public function is_loggedin()
    {
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function doLogout()
    {
        session_destroy();
        unset($_SESSION['user_session']);

        return true;
    }
}

?>