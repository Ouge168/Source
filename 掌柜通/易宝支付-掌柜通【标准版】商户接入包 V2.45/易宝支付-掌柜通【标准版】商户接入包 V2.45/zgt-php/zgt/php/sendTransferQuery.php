<?php
require_once(__DIR__ . "/../inc/config.php");

define("__BIZ__", "transferQuery");

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
<title>ת�˲�ѯ</title>
</head>
	<body>
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" 
							style="word-break:break-all; border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					ת�˲�ѯ�ӿ�
				</th>
		  	</tr>

			<tr>
				<td width="25%" align="left">&nbsp;���˻��̻����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["customernumber"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">customernumber</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;ת�������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["requestid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">requestid</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["code"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">code</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;���˻��̻����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["ledgerno"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">ledgerno</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;ת�˽��</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["amount"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">amount</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;ת��״̬</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["status"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">status</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;sourceledgerno</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["sourceledgerno"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">sourceledgerno</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;message</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"> <?=$response["message"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">message</td> 
			</tr>

		</table>

	</body>
</html>
