
	<!--error_reporting(E_ALL ^ E_DEPRECATED); //ȡ���汾������ʾ
	$con = mysql_connect("localhost","root","");
	/* localhost �Ƿ����� root ���û���  ������*/ 
	if (!$con)
	 {
	 die("���ݿ����������ʧ��");
	 }
	/* �����һ���߼����жϣ��������������������ַ��� */ 
	@mysql_select_db("part_time", $con); 
	/* ѡ��mysql���������һpt_user"; */
    $sql="INSERT INTO pt_user (UserName, PassWord, Sex, Email, Address, Telephone, UserNumber)VALUES('$_POST[UserName]','$_POST[PassWord]','$_POST[Sex]','$_POST[Email]','$_POST[Address]','$_POST[Telephone]','$_POST[UserNumber]')";
	mysql_query($sql,$con);   //������������ݡ�
   
	//��ȡ����
	$sql = "select * form pt_user";   //��ȡ���С�
	//$sql = "select * form user_zy where id=".$id;   //��ȡĳһ�
	$result = mysql_query($sql,$con);
	while($info = mysql_fetch_array($result)){
	$arr[] = $info; //$arr Ϊ�����Ҫ��ȡ��ֵ��
	var_dump($arr);
	}
	-->
	
<html>
<body>
<?php
	echo "����д��������: ".$_POST['UserName'].",".$_POST['PassWord'];
	// $connect=mysql_connect("localhost","root","");
	// mysql_select_db("part_time", $connect);
	// $name = $_POST['UserName'];
	// $psw = $_POST['PassWord'];
	// mysql_query("insert into pt_user(UserName, PassWord) values("'.$name.'"','"'.$psw.'")";
	// $result = mysql_query($sql); //ִ��SQL��䣬��ý���� 
	// mysql_close();
?>
</body>
</html>