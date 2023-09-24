<html>
  <head>
<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
    //alert(<?php echo $hash ?>);
      if(hash == '') {
       // return;
      }
      //var payuForm = document.form.payuForm;
   document.payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm();">
<form action="<?php echo $action; ?>" method="post" name="payuForm">

      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
      <input type="hidden" name="txnid" value="123" />
      <input type="hidden" name="amount" value="<?php echo $paying_amount; ?>" />
      <input type="hidden" name="firstname" id="firstname" value="<?php echo $name; ?>" />
      <input type="hidden" name="email" id="email" value="<?php echo $email; ?>" />
      <input type="hidden" name="phone" value="<?php echo $mobile; ?>" />
      <input type="hidden" name="productinfo" value="new" size="64" />
      <input type="hidden" name="surl" value="<?php echo base_url().'checkout/success_payu'; ?>" size="64" />
   <!-- <?php echo base_url().'user/cancel_payu'; ?> -->
      <input type="hidden" name="furl" value="<?php echo base_url().'checkout/cancel_payu'; ?>" size="64" />
      <input type="hidden" name="service_provider" value="<?php echo  'payu_paisa' ; ?>" size="64" />
      <input type="hidden" name="lastname" id="lastname" value="<?php echo $name; ?>" />
      <input type="hidden" name="curl" value="<?php echo base_url().'user/cancel_payu';?>" />
      <!--<input type="submit" value="Submit" />-->
       </form>
   </body>
</html>
<script language="javascript">

  // document.payuForm.submit();
</script>