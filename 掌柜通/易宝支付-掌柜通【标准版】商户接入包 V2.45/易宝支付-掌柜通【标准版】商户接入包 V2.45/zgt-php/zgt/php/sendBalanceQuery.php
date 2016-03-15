<?php

require_once(__DIR__ . "/../inc/config.php");

define("__BIZ__", "balanceQuery");

$req = new RequestService(__BIZ__);
$req->sendRequest($_REQUEST);
$req->receviceResponse();

$request = $req->getRequest();
$response = $req->getResponseData();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=__LOCALE__CODE__?>">
<title>����ѯ���</title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" 
												style="word-break:break-all; border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					����ѯ���
				</th>
		  	</tr>

			<tr >
				<td width="25%" align="left">&nbsp;���̻����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?=$response["customernumber"];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">customernumber</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["code"];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">code</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;���̱����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["balance"];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">balance</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;���̱����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["ledgerbalance"];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">ledgerbalance</td> 
			</tr>

		</table>
	</body>
</html>