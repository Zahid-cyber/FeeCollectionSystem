<?php
    session_start();
    include 'database.php';
    class Login{
        public $db;
        public function __construct() {
            $this->db=new Database();
        }
        public function login($data){
            $email=$data['email'];
            $password=$data['password'];
            $sql="SELECT * FROM user WHERE user_email='$email' AND user_password='$password'";
            $result= mysqli_query($this->db->link, $sql);

            if($row=mysqli_fetch_assoc($result)){
                $_SESSION['fcs_user_id']= $row['user_id'];
                $_SESSION['fcs_user_name']= $row['user_name'];
                $_SESSION['fcs_user_image']= $row['user_image'];
                $_SESSION['fcs_user_level']= $row['user_level'];
                $_SESSION['fcs_activation_status']= $row['activation_status'];
                $_SESSION['deleteStatus']= $row['deleteStatus'];
                header("location:dashboard.php");
            } else {
                $message="email and password not matched!";
				header("location:?message=$message&messageDanger='danger'");
            }
        }
		public function signup($data){
			$name=$data['name'];
			$email=$data['email'];
			$password=$data['password'];
			// check duplicate
			$sql="SELECT * FROM user WHERE user_email='$email'";
			$result=mysqli_query($this->db->link,$sql);
			if($row=mysqli_fetch_assoc($result)){
				$message='Signup Unsuccesfull! <br />Because email alrady exist';
				return $message;
			}else{	
				$file=$_FILES['file'];
				$fileName=$file['name'];
				$file_type=$file['type'];
				$file_tmp_name=$file['tmp_name'];
				$set_extention=array('image/jpg','image/jpeg','image/png','image/gif');
				$set_db_path="assets/backend/img/user/".$fileName;
				$set_default_db_path="assets/backend/img/user/default.jpg";
				$set_upload_path="../assets/backend/img/user/".$fileName;
				
				if(in_array($file_type,$set_extention)){		
					$sql="INSERT INTO user (user_image,user_name, user_email, user_password) VALUES('$set_db_path','$name','$email','$password')";	
					move_uploaded_file($file_tmp_name,$set_upload_path);
					$message='Signup succesfull and image uploaded';
				}else{
					$sql="INSERT INTO user (user_image,user_name, user_email, user_password) VALUES('$set_default_db_path','$name','$email','$password')";
					$message='Signup succesfull';
				}
					
				mysqli_query($this->db->link,$sql);
				header("location:index.php?message='$message'");			
			}
			
			
		}
    }
?>