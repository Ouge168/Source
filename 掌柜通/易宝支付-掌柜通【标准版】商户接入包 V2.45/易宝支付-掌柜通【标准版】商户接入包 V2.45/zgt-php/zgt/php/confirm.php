<?php
require_once(__DIR__ . "/../inc/config.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=<?=__LOCALE__CODE__?>" />
		<title>����ȷ�Ͻӿ�</title>
	</head>
<body>
	<br />
	<div align="center">
		<strong>����ȷ�ϡ��������붩����</strong>
	</div>
	<br> <hr /> <br>
	<form method="post" action="../php/sendConfirm.php" accept-charset="<?=__LOCALE__CODE__?>">
		<div align="center">
				<strong>�̻������ţ�</strong>
				<input type="text" name="orderrequestid" />&nbsp;
				<span style="color:#FF0000;font-weight:100;">*</span>
		</div>
		<br />
		<div align="center">
				<input type="submit" value="����ȷ��" />
				&nbsp;&nbsp;
		</div>
	</form>
	<hr /><br />

</body>
</html>
