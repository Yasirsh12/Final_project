<?php
	$subtotal_area=0; $total_amount=0; $total_area=0; $subtotal_amount=0;
	$per_foot=230;
	if(isset($_REQUEST['submit']))
	{
		$discription = $_REQUEST['discription'];
		$length = $_REQUEST['length'];
		$width = $_REQUEST['width'];
		
		$arrlength = count($discription);
		//echo $arrlength;
		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9e29cf6f05b20011c6d7d3&product=inline-share-buttons"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5139634720777851",
    enable_page_level_ads: true
  });
  
  function printpage()
  {
	  window.print();
  }
</script>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<title>Amount Calculation</title>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
</head>

<body>
	<div id="page-wrap">
		<textarea id="header">Calculations</textarea>
		<button onclick="printpage()" style="background-color: lightyellow; width: 50px; border-radius: 3px;"> Print </button>
		<div id="identity">
            <textarea id="address">
			Mr. Mussadiq Farid 
				And
				Mr. Bilal Ahmad
			Phone: +92 334 8767567
			</textarea>
            <div id="logo">
              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>
              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/lago.png" alt="logo" />
            </div>
		</div>
		<div style="clear:both"></div>
		<div id="customer">
            <textarea id="customer-title"> Amount Calculation</textarea>
            <table id="meta">
                <tr>
                    <td class="meta-head">Date</td>
                    <td><textarea id="date"> <?php echo date("d/m/y");?></textarea></td>
                </tr>
				<tr>
                    <td class="meta-head">Per Feet </td>
                    <td><div class="due">$<?php echo $per_foot;?></div></td>
                </tr>
            </table>		
		</div>
		<table id="items">		
		  <tr>
		      <th>Description</th>
		      <th>Length</th>
		      <th>Width</th>
		      <th>SubTotal Area</th>
		      <th>SubTotal Price</th>
		  </tr>
		  <?php
			for($i=0; $i<$arrlength; $i++)
			{
		  ?>
		  <tr>
		      <td class="description"><?php echo $discription[$i]; ?></td>
		      <td><?php echo $length[$i]; ?>  ft</td>
		      <td><?php echo $width[$i]; ?>  ft</td>
		      <td> <?php $subtotal_area = $length[$i]*$width[$i]; echo $subtotal_area; ?>  ft <sup>2</sup> </td>
		      <td><span class="price">$ <?php $subtotal_amount = $subtotal_area * $per_foot; echo $subtotal_amount; ?></span></td>
		  </tr>
		  <?php
			$total_area = $total_area + $subtotal_area;
			$total_amount = $total_amount + $subtotal_amount;
			}
			?>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line balance">Total Area</td>
		      <td class="total-value balance"><div id="subtotal"><?php echo $total_area; ?>  ft <sup>2</sup></div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line balance">Total Amount</td>
		      <td class="total-value balance"><div id="total">$ <?php echo $total_amount; ?></div></td>
		  </tr>  
		  <tr>
		      <td colspan="3" class=""> </td>
		      <td colspan="1" class="">Per Sqaure Foot</td>
		      <td class=""><div class="">$<?php echo $per_foot;?></div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>Its Up to You.If You find less than that you can proceed.</textarea>
		</div>
	
	</div>
	
</body>

</html>