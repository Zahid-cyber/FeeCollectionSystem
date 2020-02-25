<?php
    include 'database.php';
    class Admin{
        public $db;
        public function __construct() {
            $this->db=new Database();
        }
		//logout
		public function logout(){
			session_destroy();
			header('location:index.php');
		}
		// add fee
		public function addFee($data){
			$roll=$data['roll'];
			$date=$data['date'];
			$comment=$data['comment'];
			$Admition=$data['Admition'];
			$Course=$data['Course'];
			$Registration=$data['Registration'];
			$Certificate=$data['Certificate'];
			$Examination=$data['Examination'];
			$Late=$data['Late'];
			$Book=$data['Book'];
			$IDCard=$data['IDCard'];
			$Library=$data['Library'];
			$tc=$data['tc'];
			$Hostel=$data['Hostel'];
			$Receipt=$data['Receipt'];
			$others=$data['others'];
			$total=$data['total'];
			if($total<1){
				$message="Fee added unsuccsfull! <br />because total amount less than 1 tk";
				header("location:?message=$message&messageDanger='danger'");
			}else{
				$sql="INSERT INTO fee (stdntRoll,date,feeComment,admitionFee,CourseFee,registrationFee,certificateFee,	examinationFee,	lateFee,booksFee,idCardFee,libraryCardFee,tcFee,ibitHostel,moneyReceiptFee,others,	totalFee)VALUE('$roll','$date','$comment','$Admition','$Course','$Registration','$Certificate','$Examination','$Late','$Book','$IDCard','$Library','$tc','$Hostel','$Receipt','$others','$total')";
				mysqli_query($this->db->link,$sql);
				$message="Fee added succsfull!";
				header("location:?message=$message");
				
			}
		}
		
		// update fee
		public function updateFee($data){
			$editFeeId=$data['editFeeId'];
			$roll=$data['roll'];
			$date=$data['date'];
			$comment=$data['comment'];
			$Admition=$data['Admition'];
			$Course=$data['Course'];
			$Registration=$data['Registration'];
			$Certificate=$data['Certificate'];
			$Examination=$data['Examination'];
			$Late=$data['Late'];
			$Book=$data['Book'];
			$IDCard=$data['IDCard'];
			$Library=$data['Library'];
			$tc=$data['tc'];
			$Hostel=$data['Hostel'];
			$Receipt=$data['Receipt'];
			$others=$data['others'];
			$total=$data['total'];			
			$sql="UPDATE fee SET stdntRoll='$roll',date='$date',feeComment='$comment',admitionFee='$Admition',CourseFee='$Course',registrationFee='$Registration',certificateFee='$Certificate',examinationFee='$Examination',lateFee='$Late',booksFee='$Book',idCardFee='$IDCard',libraryCardFee='$Library',tcFee='$tc',ibitHostel='$Hostel',moneyReceiptFee='$Receipt',others='$others',totalFee='$total'    WHERE id=$editFeeId";
			mysqli_query($this->db->link,$sql);
			$message="Fee updated succsfull!";
			header("location:manageFee.php?roll=$roll&message=$message");
		}
		// update logged user
		
		public function UpdateLoggedUser($data){
			$id=$data['UpdateLoggedUser'];
			$name=$data['name'];
			$email=$data['email'];
			$password=$data['password'];
			
			// files
				$file=$_FILES['file'];
				$fileName=$file['name'];
				$file_type=$file['type'];
				$file_tmp_name=$file['tmp_name'];
				$set_extention=array('image/jpg','image/jpeg','image/png','image/gif');
				$set_db_path="assets/backend/img/user/".$fileName;
				$set_default_db_path="assets/backend/img/user/default.jpg";
				$set_upload_path="../assets/backend/img/user/".$fileName;
				
			// check duplicate
			$sql="SELECT * FROM user WHERE user_id='$id'";
			$result=mysqli_query($this->db->link,$sql);
			$row=mysqli_fetch_assoc($result);
			$oldEmail=$row['user_email'];
			if($email!=$oldEmail){
				// check duplicate
				$sql="SELECT * FROM user WHERE user_email='$email'";
				$result=mysqli_query($this->db->link,$sql);
				if($row=mysqli_fetch_assoc($result)){
					$message="Signup Unsuccesfull! <br />Because email alrady exist&messageDanger='danger'";
				}else{
					if(in_array($file_type,$set_extention)){		
						$sql="UPDATE user SET user_name='$name',user_email='$email',user_password='$password',user_image='$set_db_path' WHERE user_id=$id";
						move_uploaded_file($file_tmp_name,$set_upload_path);
						$message='Update succesfull and image uploaded';
					}else{
						$sql="UPDATE user SET user_name='$name',user_email='$email',user_password='$password' WHERE user_id=$id";
						$message='Update succesfull';
					}
				}
			}else{
				if(in_array($file_type,$set_extention)){		
					$sql="UPDATE user SET user_name='$name',user_password='$password',user_image='$set_db_path' WHERE user_id=$id";
					move_uploaded_file($file_tmp_name,$set_upload_path);
					$message='Update succesfull and image uploaded';
				}else{
					$sql="UPDATE user SET user_name='$name',user_password='$password' WHERE user_id=$id";
					$message='Update succesfull';
				}
			}
				
					
				mysqli_query($this->db->link,$sql);
				header("location:profile.php?message=$message");		
			
			
		}
		
	//insert student data
		public function insertStudentinfo($data){
			//print_r($data);
			$Name=$data['name'];
			$roll=$data['roll'];
					
		//check duplicate start		
			$sql = "SELECT * FROM lms_student WHERE student_roll='$roll'";
			$resultBook=mysqli_query($this->db->link, $sql);				
			if($row=mysqli_fetch_assoc($resultBook)){
				header("location:?message=Student added Unsuccesfull! <br /> because student roll alrady exist. &messageDanger=danger");				
			}
			else{
		// check duplicate end 
			$technology=$data['technology'];
			$fathersName=$data['fname'];
			$address=$data['Address'];
			$phoneNumber=$data['PhoneNumber'];
			$defaultImage="assets/frontend/img/student/default.jpg";
			//file image 
			
			$file = $_FILES['file'];
			$fileName=$_FILES['file']['name'];
			$filetype=$_FILES['file']['type'];
			$file_tmp_name=$_FILES['file']['tmp_name'];
			$file_upload_path="../assets/frontend/img/student/".$fileName;
			$file_upload_database_path="assets/frontend/img/student/".$fileName;
			$imagePath=$file_upload_database_path;
			
			$filetext=explode('.',$fileName);
			$fileExtention=strtolower(end($filetext));
			$upload_type=array('jpeg','png','jpg','ico','gif');
			if(in_array($fileExtention,$upload_type)){			
				$sql="INSERT INTO lms_student (student_name, student_roll,student_image, student_technology,fathersName,Address,PhoneNumber,activeStatus) VALUES('$Name','$roll','$imagePath','$technology','$fathersName','$address','$phoneNumber','1')";
				mysqli_query($this->db->link, $sql);
				$message="Student added succesfull";
				if(move_uploaded_file($file_tmp_name,$file_upload_path)){
					$message="Student added succesfull";
				}else{
					$message="File Upload unsuccessful";
				}
			}else{
				$sql="INSERT INTO lms_student (student_name, student_roll,student_image, student_technology,fathersName,Address,PhoneNumber,activeStatus) VALUES('$Name','$roll','$defaultImage','$technology','$fathersName','$address','$phoneNumber','1')";
				mysqli_query($this->db->link, $sql);		
			$message="Student added succesfull";
			}
			//end file image 			
			header("location:?message=$message");
			//return $message;
			}
		}
	//update student data
		public function updateStudent($data){
			//print_r($data);
			$editStudentId=$data['editStudentId'];
			$Name=$data['name'];
			$roll=$data['roll'];                            
			$technology=$data['technology'];
			$fathersName=$data['fname'];
			$address=$data['Address'];
			$phoneNumber=$data['PhoneNumber'];
			$defaultImage="assets/frontend/img/student/default.jpg";
			//file image 
			
			$file = $_FILES['file'];
			$fileName=$_FILES['file']['name'];
			$filetype=$_FILES['file']['type'];
			$file_tmp_name=$_FILES['file']['tmp_name'];
			$file_upload_path="../assets/frontend/img/student/".$fileName;
			$file_upload_database_path="assets/frontend/img/student/".$fileName;
			$imagePath=$file_upload_database_path;
			
			$filetext=explode('.',$fileName);
			$fileExtention=strtolower(end($filetext));
			$upload_type=array('jpeg','png','jpg','ico','gif');
                        
                         //check duplicate
                            $sql="SELECT * FROM lms_student WHERE student_id=$editStudentId";
                            $result= mysqli_query($this->db->link, $sql);
                            $row= mysqli_fetch_assoc($result);
                            $oldRoll=$row['student_roll'];
                            if($roll!=$oldRoll){
                                $sql="SELECT * FROM lms_student WHERE student_roll=$roll";
                                $result=mysqli_query($this->db->link, $sql);
                                if($row=mysqli_fetch_assoc($result)){
                                    $message="Update unsuccessfull! <br />Roll alrady exist.&messageDanger='danger'";
                                }else{
                                     // if roll!=old roll
                                    
                                    //change fee roll
                                    $sql="SELECT * FROM fee WHERE stdntRoll=$oldRoll";
                                    $result= mysqli_query($this->db->link, $sql);
                                    while($row= mysqli_fetch_assoc($result)){
                                       $feeId=$row['id'];
                                       $feesql="UPDATE fee SET stdntRoll='$roll' WHERE id='$feeId'";
                                       mysqli_query($this->db->link, $feesql);
                                    }
                                    // change student
                                    if(in_array($fileExtention,$upload_type)){							
                                            $sql="UPDATE lms_student SET student_name='$Name',student_roll='$roll',student_image='$imagePath',student_technology='$technology',fathersName='$fathersName',Address='$address',PhoneNumber='$phoneNumber' WHERE student_id=$editStudentId";
                                            $message="Student Uploaded succesfull";
                                            if(move_uploaded_file($file_tmp_name,$file_upload_path)){
                                                    $message="Student and image Uploaded succesfull";
                                            }else{
                                                    $message="File Upload unsuccessful";
                                            }
                                    }else{			

                                            $sql="UPDATE lms_student SET student_name='$Name',student_roll='$roll',student_technology='$technology',fathersName='$fathersName',Address='$address',PhoneNumber='$phoneNumber' WHERE student_id=$editStudentId";

                                             $message="Student Uploaded succesfull";
                                    }
                                }
                            }else{
                                // if roll==old roll
                                if(in_array($fileExtention,$upload_type)){							
                                        $sql="UPDATE lms_student SET student_name='$Name',student_image='$imagePath',student_technology='$technology',fathersName='$fathersName',Address='$address',PhoneNumber='$phoneNumber' WHERE student_id=$editStudentId";
                                        $message="Student Uploaded succesfull";
                                        if(move_uploaded_file($file_tmp_name,$file_upload_path)){
                                                $message="Student and image Uploaded succesfull";
                                        }else{
                                                $message="File Upload unsuccessful";
                                        }
                                }else{			

                                        $sql="UPDATE lms_student SET student_name='$Name',student_technology='$technology',fathersName='$fathersName',Address='$address',PhoneNumber='$phoneNumber' WHERE student_id=$editStudentId";

                                $message="Student Uploaded succesfull";
                                }
                            }
			
			//end file image 
                        mysqli_query($this->db->link, $sql);
			header("location:manageStudent.php?message=$message");
			//return $message;			
		}
		//update user
		public function updateUser($data){
			$id=$data['submitEditUser'];
			$level=$data['level'];
			$sql="UPDATE user SET user_level=$level WHERE user_id=$id";
			mysqli_query($this->db->link,$sql);
			$message="Active succesfull";
			header("location:?message=$message");
		}
		//view fee with id
		public function vFeeWithId($feeId){
			$sql="SELECT * FROM fee WHERE id=$feeId";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view fee all without delete
		public function vFeeWithouthDelete(){
			$sql="SELECT * FROM fee WHERE deleteStatus=0";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view deleted fee
		public function vDeleteFee(){
			$sql="SELECT * FROM fee WHERE deleteStatus=1";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view fee with roll
		public function viewfee($roll){
			$sql="SELECT * FROM fee WHERE stdntRoll=$roll AND deleteStatus<>1";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view archive fee with roll
		public function viewFeeArchive($roll){
			$sql="SELECT * FROM fee WHERE stdntRoll=$roll AND deleteStatus=1";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view student
		public function viewStudent(){
			
			$sql="SELECT * FROM lms_student WHERE 	deleteStatus<>1 AND activeStatus='1'";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view student with delete
		public function viewStudentAllWithDelete(){
			
			$sql="SELECT * FROM lms_student";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view student
		public function viewStudentAll(){
			
			$sql="SELECT * FROM lms_student WHERE 	deleteStatus<>1";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view active student
		public function viewActiveStudent(){
			
			$sql="SELECT * FROM lms_student WHERE 	activeStatus=1";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view deactive student
		public function viewDectiveStudent(){
			
			$sql="SELECT * FROM lms_student WHERE 	activeStatus=0";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view student archive
		public function viewStudentArchive(){
			
			$sql="SELECT * FROM lms_student WHERE 	deleteStatus=1";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view student with id
		public function viewStudentWithId($id){
			
			$sql="SELECT * FROM lms_student WHERE student_id=$id";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		//view student with roll
		public function viewStudentRoll($roll){
			
			$sql="SELECT * FROM lms_student WHERE 	student_roll=$roll";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		// view user
		public function viewAllUser(){
			$sql="SELECT * FROM user WHERE deleteStatus=0";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		// view user with delete
		public function viewAllUserWithDelete(){
			$sql="SELECT * FROM user";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		// view user archive
		public function viewAllUserArchive(){
			$sql="SELECT * FROM user WHERE deleteStatus=1";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		// view active user
		public function viewAllActiveUser(){
			$sql="SELECT * FROM user WHERE activation_status=1";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		// view deactive user
		public function viewAllDeactiveUser(){
			$sql="SELECT * FROM user WHERE activation_status=0";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		// view user with id
		public function viewUserWithId($id){
			$sql="SELECT * FROM user WHERE user_id='$id'";
			$result=mysqli_query($this->db->link,$sql);
			return $result;
		}
		// delete Fee
		public function deleteFee($feeId,$roll){
			$sql="UPDATE fee SET deleteStatus=1 WHERE id=$feeId";
			mysqli_query($this->db->link,$sql);
			$message="Delete succesfull";
			header("location:?roll=$roll&message=$message&messageDanger='danger'");
			
		}
		// delete Fee permanently
		public function deleteFeePermanently($feeId,$roll){
			$sql="DELETE FROM fee WHERE id=$feeId";
			mysqli_query($this->db->link,$sql);
			$message="Delete succesfull permanently";
			header("location:?roll=$roll&message=$message&messageDanger='danger'");
			
		}
		// restore Fee
		public function restoreFeeId($feeId,$roll){
			$sql="UPDATE fee SET deleteStatus=0 WHERE id=$feeId";
			mysqli_query($this->db->link,$sql);
			$message="restore succesfull";
			header("location:?roll=$roll&message=$message");
			
		}
		// delete Student
		public function deleteStudent($id){
			$sql="UPDATE lms_student SET deleteStatus=1 WHERE student_id=$id";
			mysqli_query($this->db->link,$sql);
			$message="Delete succesfull";
			header("location:?message=$message&messageDanger='danger'");
			
		}
		// delete Student permanently
		public function deleteStudentidPermanently($id){
			$sql="DELETE FROM lms_student WHERE student_id=$id";
			mysqli_query($this->db->link,$sql);
			$message="Delete succesfull permanently";
			header("location:?message=$message&messageDanger='danger'");
			
		}
		// restore Student
		public function reStoreStudent($id){
			$sql="UPDATE lms_student SET deleteStatus=0 WHERE student_id=$id";
			mysqli_query($this->db->link,$sql);
			$message="Restore succesfull";
			header("location:?message=$message");
			
		}
		// delete user
		public function deleteUserId($id){
			$sql="UPDATE user SET deleteStatus=1 WHERE user_id=$id";
			mysqli_query($this->db->link,$sql);
			$message="Delete succesfull";
			header("location:?message=$message&messageDanger='danger'");
			
		}
		// delete user permanently
		public function deleteUserIdPermanently($id){
			$sql="DELETE FROM user WHERE user_id=$id";
			mysqli_query($this->db->link,$sql);
			$message="Delete succesfull parmanently";
			header("location:?message=$message&messageDanger='danger'");
			
		}
		// restore user
		public function RestoreUserId($id){
			$sql="UPDATE user SET deleteStatus=0 WHERE user_id=$id";
			mysqli_query($this->db->link,$sql);
			$message="Delete succesfull";
			header("location:?message=$message&messageDanger='danger'");
			
		}
		// active student
		public function activeStudent($stdId){
			$sql="UPDATE lms_student SET activeStatus=1 WHERE student_id=$stdId";
			mysqli_query($this->db->link,$sql);
			$message="Active succesfull";
			header("location:?message=$message");
			
		}
		// active user
		public function activeUser($usrId){
			$sql="UPDATE user SET activation_status=1 WHERE user_id=$usrId";
			mysqli_query($this->db->link,$sql);
			$message="Active succesfull";
			header("location:?message=$message");
			
		}
		// deactive student
		public function deactiveStudent($stdId){
			$sql="UPDATE lms_student SET activeStatus=0 WHERE student_id=$stdId";
			mysqli_query($this->db->link,$sql);
			$message="Deactive succesfull";
			header("location:?message=$message&messageDanger='danger'");
			
		}
		// deactive user
		public function deactiveUser($usrId){
			$sql="UPDATE user SET activation_status=0 WHERE user_id=$usrId";
			mysqli_query($this->db->link,$sql);
			$message="Deactive succesfull";
			header("location:?message=$message&messageDanger='danger'");
			
		}
		public function persent($total,$value){
			if($total>0){
				$p=($value/$total)*100;
			}else{
				$p=0;
			}
			return $p;
		}
		
    }
?>