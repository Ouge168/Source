<?php
require_once(__DIR__ . "/../inc/config.php");

$requestid = "ZGTPAY" . date("ymd_His") . rand(10, 99);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=<?=__LOCALE__CODE__?>" />
	<title>����֧���ӿ�</title>

	<style type="text/css">
		tr.onekeyClose {
			display: none;
		}

		tr.directClose {
			display: none;
		}

		tr.commonClose {
			display: none;
		}
	</style>

	<script type="text/javascript">

		function closeOnekey() {
			document.getElementById('onekey01').className='onekeyClose';
			document.getElementById('onekey02').className='onekeyClose';
		}

		function openOnekey() {
			document.getElementById('onekey01').className='';
			document.getElementById('onekey02').className='';
		}

		function closeDirect() {
			document.getElementById('direct01').className='directClose';
			document.getElementById('direct02').className='directClose';
			document.getElementById('direct03').className='directClose';
			document.getElementById('direct04').className='directClose';
		}

		function openDirect() {
			document.getElementById('direct01').className='';
			document.getElementById('direct02').className='';
			document.getElementById('direct03').className='';
			document.getElementById('direct04').className='';
		}

		function closeCommon() {
			document.getElementById('common01').className='commonClose';
			document.getElementById('common02').className='commonClose';
			document.getElementById('common03').className='commonClose';
		}

		function openCommon() {
			document.getElementById('common01').className='';
			document.getElementById('common02').className='';
			document.getElementById('common03').className='';
		}

	</script>
	
	
</head>
	<body>
		<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					�����붩���������	
				</th>
		  	</tr> 

			<form method="post" action="../php/sendPay.php" target="_blank" accept-charset="<?=__LOCALE__CODE__?>">
				<tr >
					<td width="20%" align="left">&nbsp;�̻�������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="requestid" value="<?=$requestid?>"/>
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">requestid</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;֧�����</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="amount" value="0.01" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">amount</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;�Ƿ񵣱�</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input type="radio" name="assure" id="assure_0" value="0" checked />
						<label for="assure_0">�ǵ�������</label>
						<input type="radio" name="assure" id="assure_1" value="1"/>
						<label for="assure_1">��������</label>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">assure</td> 
				</tr> 

				<tr >
					<td width="20%" align="left">&nbsp;��Ʒ����</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="productname" value="productname" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">productname</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;��Ʒ����</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="productcat" value="productcat" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">productcat</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;��Ʒ����</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="productdesc" value="productdesc" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">productdesc</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;��������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="divideinfo" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">divideinfo</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;��̨֪ͨ��ַ</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="callbackurl" value="http://localhost/zgt/php/callback.php" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">callbackurl</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;ҳ��֪ͨ��ַ</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="webcallbackurl" value="http://localhost/zgt/php/callback.php" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">webcallbackurl</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;���б���</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="bankid" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">bankid</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;������Ч��ʱ��</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="period" placeholder="��������ʱ������ֵ30��"value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">period</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;������ע</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="memo" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">memo</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;֧������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input type="radio" name="payproducttype" id="sales_payproducttype" value="SALES" 
							   onclick= "closeOnekey(); closeDirect(); closeCommon();" checked />
						<label for="SALES">����֧��</label>
						<input type="radio" name="payproducttype" id="onekey_payproducttype" value="ONEKEY"
							   onclick="openOnekey(); openCommon(); closeDirect();"/>
						<label for="ONEKEY">һ��֧��</label>
						<input type="radio" name="payproducttype" id="direct_payproducttype" value="DIRECT"
							   onclick="openDirect(); openCommon(); closeOnekey();"/>
						<label for="DIRECT">�޿�ֱ��</label>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">payproducttype</td> 
				</tr> 

				<tr class="onekeyClose" id="onekey01">
					<td width="20%" align="left">&nbsp;�û���ʶ</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="userno" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">userno</td> 
				</tr>

				<tr class="onekeyClose" id="onekey02">
					<td width="20%" align="left">&nbsp;�û�IP</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="ip" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">ip</td> 
				</tr>
				
				<tr class="commonClose" id="common01">
					<td width="20%" align="left">&nbsp;�ֿ�������</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="cardname" placeholder="�޿�ֱ��ʱ�����" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">cardname</td> 
				</tr>

				<tr class="commonClose" id="common02">
					<td width="20%" align="left">&nbsp;���֤��</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="idcard" placeholder="�޿�ֱ��ʱ�����" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">idcard</td> 
				</tr>

				<tr class="commonClose" id="common03">
					<td width="20%" align="left">&nbsp;���п���</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="bankcardnum" placeholder="�޿�ֱ��ʱ�����" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">bankcardnum</td> 
				</tr>
	
				<tr class="directClose" id="direct01">
					<td width="20%" align="left">&nbsp;Ԥ���ֻ���</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="mobilephone" value="" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">mobilephone</td> 
				</tr>

				<tr class="directClose" id="direct02">
					<td width="20%" align="left">&nbsp;CVV2</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="cvv2" placeholder="���ÿ�֧��ʱ����" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">cvv2</td> 
				</tr>

				<tr class="directClose" id="direct03">
					<td width="20%" align="left">&nbsp;���ÿ���Ч��</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="expiredate" placeholder="���ÿ�֧��ʱ����" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">expiredate</td> 
				</tr>

				<tr class="directClose" id="direct04">
					<td width="20%" align="left">&nbsp;��ҵ����</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="mcc" value="7993" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">mcc</td> 
				</tr>

				<?/*?>
				
				<?*/?>

				<tr >
					<td width="20%" align="left">&nbsp;</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="55%" align="left"> 
						<input type="submit" value="�ύ����" />
					</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="15%" align="left">&nbsp;</td> 
				</tr>

			</form>
		</table>
</body>
</html>
