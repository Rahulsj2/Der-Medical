<?php



/**
 *@author Rahul Srinivas
 *@version 1.1
 */

 class User extends Database
 {

    public function register($data){
        $password = password_hash($data['password'],PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(4));
        $query = "SELECT * FROM User WHERE email='$data[email]'";
        $run = $this->query($query);
        if ($run->num_rows > 0){
            $_SESSION['error'] = "Email Already Exist";
        }else{
            $query = "INSERT INTO User(username,pass,email,token,active) VALUES('$data[username]','$password','$data[email]','$token',0)";
            // echo $query;return true;
            $run = $this->query($query);
            if ($run){
                $user = $this->getUser($data['email']);
                $_SESSION['id'] = $user->user_id;
                $this->sendMail($user->email,$user->user_id,$user->token);
                header("Location: http://127.0.0.1/Web-Tech-Group/view/activate.php");
            }else{
                $_SESSION['error'] = "Something went wrong.";
            }
        }
    }

    public function getUser($email){
        $query = "SELECT * FROM User WHERE email='$email'";
        $run = $this->query($query);
        $row = $run->fetch_object();
        return $row;
    }

    public function sendMail($email,$id,$token)
    {
        $subject = "Account Activation Code";

        $headers = "From: DER Medical Center \r\n";
        $headers .= "Reply-To: der@gmail.com \r\n";
        $headers .= "CC: der@gmail.com \r\n";
        $headers .= "MIME-Version: 1.0  \r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1 \r\n";
        $message = '<html><body>';
        $message .= '<h6>Your Activation Code</h6>';
        $message .= '<h3>'.$token.'</h3>';
        $message .= '<h1>OR</h1>';
        $message .= '<h3>'.$_SERVER['SERVER_NAME'].'/view/activate.php?active='.$token.'&id='.$id.'</h3>';
        $message .= '</body></html>';

        mail($email,$subject,$message,$headers);
    }

    public function activate($token,$id){
        $query = "UPDATE User SET active=1 WHERE user_id='$id' AND token='$token'";
        $run = $this->query($query);
        if ($run){
            $user = $this->getUserById($id);
            $_SESSION['user'] = $user;
            header("Location: http://127.0.0.1/Web-Tech-Group/view/dashboard.php");
        }else{
            $_SESSION['error'] = "Wrong Activation Code.";
        }
    }

    public function getUserById($id){
        $query = "SELECT * FROM User WHERE user_id='$id'";
        $run = $this->query($query);
        $row = $run->fetch_object();
        return $row;
    }


    public function auth($email,$password){
        $query = "SELECT user_id FROM User WHERE email='$email' AND active=1 ";
        $run = $this->query($query);
        if ($run->num_rows > 0){
            $row = $run->fetch_object();
            $query = "SELECT * FROM User WHERE user_id='$row->user_id' ";
            $run = $this->query($query);
            $row = $run->fetch_object();

            if (password_verify($password, $row->pass)){
                $_SESSION['user'] = $row;
                header("Location: http://127.0.0.1/Web-Tech-Group/view/dashboard.php");
            }else{
                $_SESSION['error'] = "Password is not valid";
            }
        }else{
            $_SESSION['error'] = "Email does not exist or your account is not active";
        }
    }
 }