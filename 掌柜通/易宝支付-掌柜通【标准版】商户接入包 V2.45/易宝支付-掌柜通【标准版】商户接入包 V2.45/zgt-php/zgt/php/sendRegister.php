<?php

require_once(__DIR__ . "/../inc/config.php");

define("__BIZ__", "register");

$req = new RequestService(__BIZ__);
$req->sendRequest($_REQUEST);
$req->receviceResponse();

$request = $req->getRequest();
$response = $req->getResponseData();

//��֤�����requestid�ͷ��ص�requestid�Ƿ�һ��
if ( $request["requestid"] != $response["requestid"] ) {

	throw new ZGTException("requestid not equals, response is [" . $response["requestid"] . "], requestid is [" . $request["requestid"] . "].");	
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=__LOCALE__CODE__?>">
<title>�����˻�ע����</title>
</head>
	<body>
		<br /> <br /> <br />
		<table width="60%" border="0" align="center" cellpadding="10" cellspacing="0" 
							style="word-break:break-all; border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					�����˻�ע��ɹ�
				</th>
		  	</tr>

			<tr >
				<td width="25%" align="left">&nbsp;���˻��̻����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?=$response["customernumber"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">customernumber</td> 
			</tr>

			<tr >
				<td width="25%" align="left">&nbsp;ע�������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?=$response["requestid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">requestid</td> 
			</tr>

			<tr >
				<td width="25%" align="left">&nbsp;������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?=$response["code"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">code</td> 
			</tr>

			<tr >
				<td width="25%" align="left">&nbsp;���˻��̻����</td>
				<td width="5%"  align="center"> : </td> 
				<th width="45"  align="left"> <?=$response["ledgerno"]?> </th>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">ledgerno</td> 
			</tr>

		</table>

	</body>
</html>
