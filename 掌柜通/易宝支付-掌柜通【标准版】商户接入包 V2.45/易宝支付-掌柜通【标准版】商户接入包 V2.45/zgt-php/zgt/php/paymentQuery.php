<?php
require_once(__DIR__ . "/../inc/config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=<?=__LOCALE__CODE__?>" />
		<title>��ѯ�ӿ�</title>
	</head>
<body>
	<br />
	<div align="center">
		<strong>������ѯ���������붩����</strong>
	</div>
	<br> <hr /> <br>
	<form method="post" action="../php/sendPaymentQuery.php" accept-charset="<?=__LOCALE__CODE__?>">
		<div align="center">
				<strong>�̻������ţ�</strong>
				<input type="text" name="requestid" id="requestid" />&nbsp;
				<span style="color:#FF0000;font-weight:100;">*</span>
		</div>
		<br />
		<div align="center">
				<input type="submit" value="������ѯ" />
				&nbsp;&nbsp;
		</div>
	</form>
	<hr /><br />

</body>
</html>

