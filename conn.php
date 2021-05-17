<?php 
class Data{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_difue";
	var $conn;
 
	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}
	function register($username,$email,$nama,$gender,$alamat,$password)
	{	
		$insert = mysqli_query($this->conn,"insert into difue values ('','$username','$email','$nama','$gender','$alamat','$password')");
		return $insert;
	}
 
	function login($username,$password,$oke)
	{
		$query = mysqli_query($this->conn,"select * from difue where username='$username'");
		$data = $query->fetch_array();
		if(password_verify($password,$data['password']))
		{
			
			if($oke)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
            $_SESSION['email'] = $data['email'];
			$_SESSION['nama'] = $data['nama'];
            $_SESSION['gender'] = $data['nim'];
            $_SESSION['alamat'] = $data['prodi'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
		else{
			echo "<script>alert('Username dan Password Salah');window.location='login.php'</script>";
    
		}
	}
	function relogin($username)
	{
		$query = mysqli_query($this->conn,"select * from difue where username='$username'");
		$data = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['is_login'] = TRUE;
	}
} 
?>