<?php 
	$Page_title='Calculator';
	include_once 'include/head.php';
?>

</head>
<body>
	<?php 
		include_once 'include/searchbar.php';
		include_once 'include/header.php';
	?>
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Calculator</h1>
              <span class="color-text-a">Do your Calculations</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="@">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Calculator
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
	<div class="container">
			<div class="form-group">
				<form name="add_name" action="Calculate/Calculate.php" id="add_name" method="post">
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
	</main><!-- End #main -->
<?php
	include_once "include/footer.php";
?>
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
</body>

</html>