<?php
require_once(__DIR__ . "/../inc/config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=<?=__LOCALE__CODE__?>" />
		<title>����ѯ�ӿ�</title>
	</head>
<body>
<br> <br>
	<table width="80%" border="0" align="center" cellpadding="10" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="3" bgcolor="#6BBE18">
					����ѯ�ӿ�	
				</th>
		  	</tr> 

			<form method="post" action="../php/sendBalanceQuery.php" target="_blank" accept-charset="<?=__LOCALE__CODE__?>">
				<tr >
					<td width="15%" align="left">&nbsp;���̻���� : </td>
					<td width="85%" align="left"> 
						<textarea rows="8" cols="110" name="ledgerno" placeholder="ledgernoΪ��ʱ������ѯ���˻�����ʽ��ledgerno1,ledgerno2,ledgerno3"></textarea>
					</td>
				</tr>

				<tr >
					<td width="15%" align="left">&nbsp;</td>
					<td width="85%" align="left"> 
						<input type="submit" value="submit" />
					</td>
				</tr>
				
			</form>
		</table>
</body>
</html>
