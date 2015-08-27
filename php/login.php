<?PHP
	$loginName = $_REQUEST['loginName'];
	$loginPwd = $_REQUEST['loginPwd'];
	if($loginName=='admin'&&$loginPwd=='123456'){
		echo "success";
	}else{
		echo "error";
	}
?>