
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php ob_start();?>
<body>
    <form action="index.php" method="post">
    Name:<input name="name"  type="text"><br>
    EmpNo:<input name="empno" type="number"><br>
    Salary:<input name="salary" type="number"><br>
    Address:<input name="address" type="text"><br>
    Dept No<input name="depno" type="number"><br>
    <input value="insert" name="insert" type="submit">
    <input value="Delete" name="Delete" type="submit">
    <input value="Update" name="Update" type="submit">
      
    </form>
</body>
</html>
<?php 
	$error = 0;
    extract($_POST);
    if(isset($_POST["submit"]))
	 if(!preg_match("/^[0-9]{0,7}$/",$empno)){
        $error = 1;
		echo " EmpNo:must contain only digits and the maximum number of 		digits is 7 <br>";
    }
    if(!preg_match("/^[a-zA-Z]{3,}$/",$name)){
        $error = 1;
		echo "Name :must contain only alphabets and at least 3 alphabtes 		<br>";
    }
    if(!preg_match("/^[0-9]{0,4}$/",$salary){
        $error = 1;
		echo "Salary : must contain only digits and the maximum number of 			digits <br>";
    }
    if(!preg_match("/^[a-zA-Z]||[0-9]$/",$address)){
        $error = 1;
		echo "Address: may contain alphabets and digits. <br>";
    }
    if(!preg_match("/^(10) || (20)$/",$depno)){
        $error = 1;
		echo "Dept No : the values of this field may only be 10 or 20 			<br>";
    }

    if(!$error &&!empty($_POST["uname"])){
        $html = ob_get_clean();
		$html = preg_replace('/<body>.*<\/body>/s', '', $html);


?>
