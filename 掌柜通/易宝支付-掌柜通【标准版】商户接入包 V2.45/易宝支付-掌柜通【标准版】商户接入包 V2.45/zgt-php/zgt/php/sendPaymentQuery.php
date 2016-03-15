<?php
require_once(__DIR__ . "/../inc/config.php");

define("__BIZ__", "paymentQuery");

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
<title>������ѯ���</title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					������ѯ���
				</th>
		  	</tr>

			<tr >
				<td width="25%" align="left">&nbsp;�̻����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?=$response["customernumber"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">customernumber</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;�̻�������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["requestid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">requestid</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["code"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">code</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;�ױ���ˮ��</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["externalid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">externalid</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;�������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["amount"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">amount</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;��Ʒ����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["productname"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">productname</td> 
			</tr> 

			<tr>
				<td width="25%" align="left">&nbsp;��Ʒ���</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["productcat"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">productcat</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;��Ʒ����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["productdesc"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">productdesc</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;����״̬</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["status"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">status</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;��������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["ordertype"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">ordertype</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;ҵ������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["busitype"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">busitype</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;��������ʱ��</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["createdate"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">createdate</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;�µ�ʱ��</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["orderdate"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">orderdate</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;�ױ�ͨ������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["bankid"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">bankid</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;���б���</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["bankcode"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">bankcode</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;�û���ʶ</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["userno"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">userno</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;�ױ���Ա���</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["memberno"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">memberno</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;�̻�������</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["fee"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">fee</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;����</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["name"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">name</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;�ֻ���</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["phone"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">phone</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;���ź�4λ</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?=$response["lastno"]?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">lastno</td> 
			</tr>

		</table>
	</body>
</html>
