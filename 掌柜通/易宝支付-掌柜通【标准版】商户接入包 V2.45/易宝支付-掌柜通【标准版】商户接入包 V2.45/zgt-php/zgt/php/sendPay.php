<?php
require_once(__DIR__ . "/../inc/config.php");

define("__BIZ__", "pay");

//����֧�������ͣ�������һ��֧�����޿�ֱ�������������������չ��
if ( !array_key_exists("payproducttype", $_REQUEST) ) {
			
	throw new ZGTException("payproducttype of request is not found.");
}
$infConfig[__BIZ__]["mustFillRequest"]
	 = array_merge($infConfig[__BIZ__]["mustFillRequest"],
	 				 $infConfig[__BIZ__]["mustFillRequest_" . strtoupper($_REQUEST["payproducttype"])]);
//print_r($infConfig[__BIZ__]["mustFillRequest"]);
//exit();

$req = new RequestService(__BIZ__);
$req->sendRequest($_REQUEST);
$req->receviceResponse();

$request = $req->getRequest();
$response = $req->getResponseData();


if( $response["payurl"] ) {

	//�����֧�����ӣ������Զ���ת������������е�ע�͡�
	//header("Location: ${response["payurl"]}");
	//exit();
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=__LOCALE__CODE__?>">
<title>����֧�����</title>
</head>
	<body>
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" 
							style="word-break:break-all; border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					����֧�����
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
				<td width="15%" align="left">&nbsp;�̻�������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["requestid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">requestid</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;�ױ���ˮ��</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["externalid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">externalid</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;�������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["amount"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">amount</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;�ױ��󿨱�ʶ</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["bindid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">bindid</td> 
			</tr>

			<tr>
				<td width="15%" align="left">&nbsp;���б���</td>
				<td width="5%"  align="center"> : </td> 
				<td width="60%" align="left"> <?=$response["bankcode"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="15%" align="left">bankcode</td> 
			</tr>

			<tr>
				<td width="15%" align="left" rowspan="6">&nbsp;֧������</td>
				<td width="5%"  align="center" rowspan="6"> : </td> 
				<td width="60%" align="left" rowspan="6"> 
					<a href=<?=$response["payurl"]?> style="text-decoration:none" target="_blank"> 
						<?=$response["payurl"]?>
					</a> 
				</td>
				<td width="5%"  align="center" rowspan="6"> - </td> 
				<td width="15%" align="left" rowspan="6">payurl</td> 
			</tr>

		</table>

	</body>
</html>
