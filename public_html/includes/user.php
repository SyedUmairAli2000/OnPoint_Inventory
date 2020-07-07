<?php

// User Class for adding users and login users

  class User
  {

      private $con;

      function __construct()
      {
          include_once("dbconfig.php");
          $dbcon = new Database();
          $this->con = $dbcon->connect();
      }
      //Check if user already exist or not
      private function emailExists($email){
		$pre_stmt = $this->con->prepare("SELECT id FROM users WHERE email = ? ");
		$pre_stmt->bind_param("s", $email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if($result->num_rows > 0){
			return 1;
		}else{
			return 0;
		}
	}
        //Create a new user
      public function createUsersAccount($name,$email,$password,$usertype)
      {   if($this->emailExists($email))
        {
            return "This email already exists";
        }
        else{
            $date = date("Y-m-d");
            $notes = "";
            $password_hash = password_hash($password, PASSWORD_BCRYPT,["cost"=>8]);
            $pre_stmt = $this->con->prepare("INSERT INTO `users`(`username`, `email`, `userpassword`, `user_type`, `register_date`, `last_login`, `notes`) VALUES (?,?,?,?,?,?,?)");
            $pre_stmt->bind_param("sssssss",$name,$email,$password_hash,$usertype,$date,$date,$notes);
            $pre_stmt->execute() or die($this->con->error);
            if($result)
            {
                return $this->con->insert_id;
            }
            else{
                return "some_error happened";
            }
        }
          $pre_stmt = $this->con->prepare("");   
      }

     
	public function userLogin($email,$password){
		$pre_stmt = $this->con->prepare("SELECT id,username,userpassword,last_login FROM users WHERE email = ?");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();

		if ($result->num_rows < 1) {
			return "No user found with these credeintials";
		}else{
			$row = $result->fetch_assoc();
			if (password_verify($password,$row["userpassword"])) {
				$_SESSION["userid"] = $row["id"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["last_login"] = $row["last_login"];

				//Here we are updating user last login time when he is performing login
				$last_login = date("Y-m-d h:m:s");
				$pre_stmt = $this->con->prepare("UPDATE users SET last_login = ? WHERE email = ?");
				$pre_stmt->bind_param("ss",$last_login,$email);
				$result = $pre_stmt->execute() or die($this->con->error);
				if ($result) {
					return 1;
				}else{
					return 0;
				}

			}else{
				return "your credeintials do not match with our records.";
			}
		}
	}

  }
     
  $user = new User();
  echo $user->userLogin("user123@gmail.com","1234"); 
  echo $_SESSION["username"]
?>