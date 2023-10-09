<?php
	$p_title ="MY Flats";
	include_once ('include/session.php');
	include_once 'include/head.php';
	
	$u_id	= $result['id'];
?>

    <link rel="stylesheet" type="text/css" href="../admin/assets/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <?php
			include_once 'include/header.php';
			include_once 'include/sidebar.php';
			
		?>

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
				<!-- Content Header (Page header) -->
					<div class="content-header">
					  <div class="container-fluid">
						<div class="row mb-2">
						  <div class="col-sm-6">
							<h1 class="m-0 text-dark">MY Properties</h1>
						  </div><!-- /.col -->
						  <div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
							  <li class="breadcrumb-item"><a href="user_dashboard.php">Home</a></li>
							  <li class="breadcrumb-item active">MY Flats </li>
							</ol>
						  </div><!-- /.col -->
						</div><!-- /.row -->
					  </div><!-- /.container-fluid -->
					</div>
					<!-- /.content-header -->
				
				<div class="row">
					<!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0"> MY Properties</h3>
                                <p> All the Properties which are which is for sell are displayed in the following Table.</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Area</th>
                                                <th>Price</th>
                                                <th>Location</th>
                                                <th>Rooms</th>
                                                <th>Status</th>
                                                <th><a href="add_flat.php" class="btn btn-xs btn-success editbtn"><span class="fa fa-plus"></span></a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
												$query="SELECT * FROM `flats` WHERE `u_id`='$u_id'";
												$run=mysqli_query($con,$query);
												if(mysqli_num_rows($run)<1)
												{
													echo " <tr> <td colspan='7'> No Record Found  </td> </tr>";
												}
												else
												{
													$count=0;
													while($data = mysqli_fetch_assoc($run))
													{
														$count++;
											?>
														<tr>
															<td> <?php echo $count; ?> </td>
															<td> <?php echo $data['area']; ?> </td>
															<td> <?php echo $data['price']; ?> </td>
															<td> <?php echo $data['location']; ?> </td>
															<td> <?php echo $data['rooms']; ?> </td>
															<td> <?php echo $data['status']; ?> </td>
															<td>
															  <a href="delete_flat.php?f_id=<?php echo $data['id'];?>" class="btn btn-xs btn-danger"><span class="fa fa-trash"></span>  </a>
															  <a href="update_myflat.php?f_id=<?php echo $data['id'];?>" class="btn btn-xs btn-success editbtn"><span class="fa fa-edit"></span>  </a>
															</td>
														</tr>
											<?php 
													}
												}
											?>                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>ID</th>
                                                <th>Area</th>
                                                <th>Price</th>
                                                <th>Location</th>
                                                <th>Rooms</th>
                                                <th>Status</th>
                                                <th> Action </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
				</div>
				
			</div>
			<?php
				include_once 'include/footer.php';
			?>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
     <!-- Optional JavaScript -->
    <script src="../admin/assets/js/jquery-3.3.1.min.js"></script>
    <script src="../admin/assets/js/bootstrap.bundle.js"></script>
    <script src="../admin/assets/js/jquery.slimscroll.js"></script>
    <script src="../admin/assets/js/jquery.multi-select.js"></script>
    <script src="../admin/assets/libs/js/main-js.js"></script>
    <script src="../admin/assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../admin/assets/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../admin/assets/datatables/js/dataTables.buttons.min.js"></script>
    <script src="../admin/assets/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../admin/assets/datatables/js/data-table.js"></script>
    <script src="../admin/assets/datatables/js/jszip.min.js"></script>
    <script src="../admin/assets/datatables/js/pdfmake.min.js"></script>
    <script src="../admin/assets/datatables/js/vfs_fonts.js"></script>
    <script src="../admin/assets/datatables/js/buttons.html5.min.js"></script>
    <script src="../admin/assets/datatables/js/buttons.print.min.js"></script>
    <script src="../admin/assets/datatables/js/buttons.colVis.min.js"></script>
    <script src="../admin/assets/datatables/js/dataTables.rowGroup.min.js"></script>
    <script src="../admin/assets/datatables/js/dataTables.select.min.js"></script>
    <script src="../admin/assets/datatables/js/dataTables.fixedHeader.min.js"></script>
</body>
 
</html>