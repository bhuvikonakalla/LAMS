<?php
session_start();
include "db.php";
	if(isset($_POST['username']) && isset($_POST['password'])){


		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$uname = validate($_POST['username']);
		$pass = validate($_POST['password']);

		if(empty($uname)){
			header("Location: index.php?error=User Name is required");
			exit();	

		}else if(empty($pass)){
			header("Location: index.php?error=Password is required");
			exit();

		}else{
			$sql_student = "SELECT * FROM students WHERE username='".$uname."'";
			$sql_fac ="SELECT * FROM faculty WHERE faculty_id='".$uname."'";
			$sql_admin = "SELECT * FROM admin WHERE admin_id='".$uname."'";

			$result_stuednt = mysqli_query($conn, $sql_student);
			$result_fac = mysqli_query($conn,$sql_fac);
			$result_admin = mysqli_query($conn,$sql_admin);
			if(mysqli_num_rows($result_stuednt) == 1){
				$sql_student = "SELECT * FROM students WHERE username='".$uname."'";
				$result_stuednt = mysqli_query($conn, $sql_student);
				mysqli_num_rows($result_stuednt);
				$row = mysqli_fetch_assoc($result_stuednt);

				if($row['username'] === $uname && $row['passwords'] === $pass){

					$_SESSION['username'] = $row['username'];
					$_SESSION['id'] = $row['id'];
					$_SESSION['name'] = $row['name'];
					 header("Location: Branches.html");
					 exit();   
					
				}else{
					header("Location: index.php?error=Incorrect username or Password ");
					exit();
				}
			}elseif(mysqli_num_rows($result_fac)==1){
			    
			    $sql_fac ="SELECT * FROM faculty WHERE faculty_id='".$uname."' AND fpassword='".$pass."'";
			    $result_fac = mysqli_query($conn,$sql_fac);
			    mysqli_num_rows($result_fac);
				$row = mysqli_fetch_assoc($result_fac);
				if($row['faculty_id'] === $uname && $row['fpassword'] === $pass){
					$_SESSION['faculty_id'] = $row['faculty_id'];
					$_SESSION['id'] = $row['id'];
					$_SESSION['fname'] = $row['name'];
					$_SESSION['course'] = $row['course'];
					header("Location: Branches_f.html");
					exit();   
				}else{
					header("Location: index.php?error=Incorrect username or Password 2");
					exit();
				}
			}
		elseif(mysqli_num_rows($result_admin)==1){
			    
			$sql_admin ="SELECT * FROM admin WHERE admin_id='".$uname."' AND apassword='".$pass."'";
			$result_admin = mysqli_query($conn,$sql_admin);
			mysqli_num_rows($result_admin);
			$row = mysqli_fetch_assoc($result_admin);
			if($row['admin_id'] === $uname && $row['apassword'] === $pass){
				$_SESSION['admin_id'] = $row['admin_id'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['adminname'] = $row['name'];
				header("Location: Branches_f.html");
				exit();   
			}else{
				header("Location: index.php?error=Incorrect username or Password ");
				exit();
			}
		}
		else{
			header("Location: index.php?error=User doesn't exist");
			exit();
		}
		 
	}		
	}
		else{
		header("Location: index.php?");
		exit();	
		}
 ?>