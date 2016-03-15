<?php
require_once(__DIR__ . "/../inc/config.php");

define("__BIZ__", "refundQuery");

$req = new RequestService(__BIZ__);
$req->sendRequest($_REQUEST);
$req->receviceResponse();

$request = $req->getRequest();
$response = $req->getResponseData();

//��֤�����orderrequestid�ͷ��ص�orderrequestid�Ƿ�һ��
if ( $request["orderrequestid"] != $response["orderrequestid"] ) {

	throw new ZGTException("requestid not equals, response is [" . $response["orderrequestid"] . "], requestid is [" . $request["orderrequestid"] . "].");	
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
				<td width="50%" align="left"> <?=$response["customernumber"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="25%" align="left">customernumber</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;�̻�������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["orderrequestid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="25%" align="left">orderrequestid</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["code"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="25%" align="left">code</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;�ױ���ˮ��</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["externalid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="25%" align="left">externalid</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;�˿�����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["refundinfo"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="25%" align="left">refundinfo</td> 
			</tr>

		</table>

	</body>
</html>
