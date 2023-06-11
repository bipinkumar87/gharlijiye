<?php
//echo"<div class=sin style='background-color:green'>";
$F_NAME=$_POST['fname'];
$l_name=$_POST['lname'];
//echo "<br>";
$a_dhar=$_POST['adhar'];
//echo "<br>";
$e_mail=$_POST['email'];
//echo "<br>";
$p_hone=$_POST['phone'];
//echo "<br>";
$temp_add=$_POST['temp-ad'];
echo "<br>";
$p_add=$_POST['parm-ad'];
echo "<br>";
$s_tate=$_POST['stat'];
echo "<br>";
$buy_saler=$_POST['buy-saler'];
echo "<br>";
$z_ip=$_POST['zip'];
$d_ob=$_POST['dob'];
$c_pass=$_POST['cpass'];
$con_pass=$_POST['con-pass'];

//echo $a_gri=$_POST['agri'];
$id_card=$_POST['id-card'];
echo"</div>";
$errors=array();
if(empty($F_NAME)or empty($l_name)or empty($a_dhar) or empty($e_mail) or empty($p_hone) or empty($temp_add) or empty($p_add)or empty($s_tate)or empty($buy_saler) or empty($z_ip) or empty($c_pass)or empty($con_pass)){
    array_push($errors,"please fill all field");
}
//if(!filter_var($e_mail,FILTER_VALIDATE_EMAIL)){
//array_push($e_mail,"email not valid");
//}
if(strlen($c_pass)<8){
array_push($errors,"password at list 8 char");
}
if($c_pass !== $con_pass){
    array_push($errors,"password not match");
}
if(strlen($a_dhar)!== 12){
    array_push($errors,"provide valid adhar number");
}

$conn= mysqli_connect('localhost','root','','gharlijiye') or die("not connect database");
$sql1="SELECT * from reg where email='$e_mail'";
$result1=mysqli_query($conn,$sql1);
$rowcount=mysqli_num_rows($result1);
if($rowcount>0){
    array_push($errors,"email exist");
    
}
if(count($errors)>0){
    
    foreach($errors as $error){
        echo "<div class=sin style='border:2px  solid black; width:25%;padding:3px'>$error</div>";
        
    }
    echo"<div><p> already register/some error <a href='../index.php'>login now/registration again</a></p></div>";
    //echo "<input type='submit' name= 'submit' value='ok' style='background-color:rgb(222 23 2) ; width:80px ; margin:40px 4px';>";
    if(isset($_POST['submit'])){
        header("Location: http://localhost/gharlijiye-main/pages/signup.php");
    }
    
}
//$sql="INSERT INTO reg(fname,lname.adhar,email,phone,temp-ad,pram-ad,stat,buy-saler,zip,dob,cpass,con-pass,agri,id-card)VALUE('{$F_NAME}','{$l_name}','{$a_dhar}','{$e_mail}','{$p_hone}','{$temp_add}','{$p_add}','{$s_tate}','{$buy_saler}','{$z_ip}','{$d_ob}','{$c_pass}','{$con_pass}','{$id_card}')";
else{
    //$conn= mysqli_connect('localhost','root','','gharlijiye') or die("not connect database");
$sql="INSERT INTO `reg` (`fname`, `lname`, `adhar`, `email`, `phone`, `temp-ad`, `parm-ad`, `stat`, `buy-saler`, `zip`, `dob`, `cpass`, `con-pass`, `id-card`) VALUES ('{$F_NAME}', '{$l_name}', '{$a_dhar}', '{$e_mail}', '{$p_hone}', '{$temp_add}', '{$p_add}', '{$s_tate}', '{$buy_saler}', '{$z_ip}', '{$d_ob}', '{$c_pass}', '{$con_pass}', '{$id_card}')";
$resu=mysqli_query($conn,$sql)or die("unsucce");
header("Location: http://localhost/gharlijiye-main/cong1.php");
}
//header("Location: http://localhost/gharlijiye-main/index.php");
?>