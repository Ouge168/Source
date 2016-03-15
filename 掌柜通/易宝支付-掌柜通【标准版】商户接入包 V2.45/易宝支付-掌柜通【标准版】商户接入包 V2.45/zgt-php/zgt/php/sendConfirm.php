<?php
require_once(__DIR__ . "/../inc/config.php");

define("__BIZ__", "confirm");

$req = new RequestService(__BIZ__);
$req->sendRequest($_REQUEST);
$req->receviceResponse();

$request = $req->getRequest();
$response = $req->getResponseData();

//��֤�����requestid�ͷ��ص�requestid�Ƿ�һ��
if ( $request["orderrequestid"] != $response["orderrequestid"] ) {

	throw new ZGTException("requestid not equals, response is [" . $response["orderrequestid"] . "], requestid is [" . $request["orderrequestid"] . "].");	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=__LOCALE__CODE__?>">
<title>��������ȷ�Ͻ��</title>
</head>
	<body>
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" 
							style="word-break:break-all; border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					��������ȷ�Ͻ��
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
				<td width="15%" align="left">&nbsp;�̻�������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["orderrequestid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">orderrequestid</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["code"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">code</td> 
			</tr>

		</table>

	</body>
</html>
