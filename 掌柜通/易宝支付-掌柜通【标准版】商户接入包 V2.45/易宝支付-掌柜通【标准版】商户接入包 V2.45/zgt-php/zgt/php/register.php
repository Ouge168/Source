<?php
require_once(__DIR__ . "/../inc/config.php");

$requestid = "ZGTREGISTER" . date("ymd_His") . rand(10, 99);

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=<?=__LOCALE__CODE__?>" />
	<title>�ƹ�ͨע��ӿ�</title>
</head>
	<body>
		<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					�����˺�ע��
				</th>
		  	</tr> 

			<form method="POST" action="../php/sendRegister.php" target="_blank" accept-charset="<?=__LOCALE__CODE__?>">
				<tr >
					<td width="20%" align="left">&nbsp;ע�������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="requestid" value="<?=$requestid?>"/>
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">requestid</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;���ֻ���</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="bindmobile" value="12345678901" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">bindmobile</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;ע������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<select name="customertype">
							<option value="PERSON">����</option>
							<option value="ENTERPRISE">��ҵ</option>
						</select>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">customertype</td> 
				</tr> 


				<tr >
					<td width="20%" align="left">&nbsp;ǩԼ��</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="signedname" value="�ƹ�ͨ����" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">signedname</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;��ϵ������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="linkman" value="����" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">linkman</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;�������֤��</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="idcard" value="123456789012345678" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">idcard</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="55%" align="left"> 
						<span style="font-size:12px; color:#FF0000; font-weight:100;"> 
							���������֤���ڡ�ע�����͡�Ϊ�����ˡ�ʱ���
						</span>
					</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="15%" align="left">&nbsp;</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;��ҵӪҵִ�պ�</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="businesslicence" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">businesslicence</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="55%" align="left"> 
						<span style="font-size:12px; color:#FF0000; font-weight:100;"> 
							����ҵӪҵִ�ա��ڡ�ע�����͡�Ϊ����ҵ��ʱ���
						</span>
					</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="15%" align="left">&nbsp;</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;����</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="legalperson" value="����" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">legalperson</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="55%" align="left"> 
						<span style="font-size:12px; color:#FF0000; font-weight:100;"> 
							���������ڡ�ע�����͡�Ϊ����ҵ��ʱ����д��ҵ����������Ϊ�����ˡ�ʱ��д���֤������
						</span>
					</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="15%" align="left">&nbsp;</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;�����</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="minsettleamount" value="1" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">minsettleamount</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;��������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="riskreserveday" value="1" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">riskreserveday</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;���п���</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="bankaccountnumber" value="1234567890123456" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">bankaccountnumber</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;���п�������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="bankname" value="�������йɷ����޹�˾���ݷ���" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">bankname</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;���п�������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="accountname" value="����" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">accountname</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;���п�����</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<select name="bankaccounttype">
							<option value="PrivateCash">��˽</option>
							<option value="PublicCash">�Թ�</option>
						</select>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">bankaccounttype</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;���п�����ʡ</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="bankprovince" value="�㽭" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">bankprovince</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;���п�������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="bankcity" value="����" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">bankcity</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="55%" align="left"> 
						<input type="submit" value="�ύע����Ϣ" />
					</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="15%" align="left">&nbsp;</td> 
				</tr>

			</form>
		</table>
</body>
</html>
