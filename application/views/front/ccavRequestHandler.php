<html>
<head>
<title> CC Avenue</title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php

	error_reporting(0);

	$merchant_data='';
	$working_key='E10DA465C725367BB85A30D64577EF01';//Shared by CCAVENUES
	$access_code='AVVN84GD45AH05NVHA';//Shared by CCAVENUES

	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">
<?php
echo "<input type='hidden' name='encRequest' value='$encrypted_data'>";
echo "<input type='hidden' name='access_code' value='$access_code'>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

