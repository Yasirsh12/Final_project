<?php

?>
<html>
	<head>
		<title> Calculations</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2><br />
			<div class="form-group">
				<form name="add_name" action="Calculate.php" id="add_name" method="post">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<th style="text-align: center;"> Discription </th>
								<th> Length </th>
								<th> Width </th>
								<th> Action </th>
							</tr>
							<tr>
								<td> <input type="text" name="discription[]" placeholder="Room / Kitchan / Garage" class="form-control name_list" minlength="3" maxlength='20' required /> </td>
								<td><input type="number" name="length[]" placeholder="Enter Length" class="form-control name_list" min="1" max="100" step="1" value="1" /></td>
								<td><input type="number" name="width[]" placeholder="Enter Width" class="form-control name_list"  min="1" max="100" step="1" value="1" required /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
						<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>
		</div>
	</body>
	<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td> <input type="text" name="discription[]" placeholder="Room / Kitchan / Garage" class="form-control name_list" minlength="3" maxlength="20" required /> </td><td><input type="number" name="length[]" placeholder="Enter Length" class="form-control name_list" min="1" max="100" step="1" value="1" /></td><td><input type="number" name="width[]" placeholder="Enter Width" class="form-control name_list"  min="1" max="100" step="1" value="1" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
});
</script>
</html>






