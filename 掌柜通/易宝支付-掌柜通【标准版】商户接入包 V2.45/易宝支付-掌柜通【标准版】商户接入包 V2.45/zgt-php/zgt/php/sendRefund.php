<?php
require_once(__DIR__ . "/../inc/config.php");

define("__BIZ__", "refund");

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
<title>�����˿���</title>
</head>
	<body>
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" 
							style="word-break:break-all; border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					�����˿���
				</th>
		  	</tr>

			<tr>
				<td width="15%" align="left">&nbsp;�̻����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["customernumber"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">customernumber</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["code"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">code</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;�̻��˿������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["requestid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">requestid</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;�ױ��˿���ˮ��</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["refundexternalid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">refundexternalid</td> 
			</tr>

		</table>

	</body>
</html>
