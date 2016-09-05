<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EcoCleanv2.0</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="vendor/sb-admin-2/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">EcoClean v2.0</a>
            </div>
            <!-- /.navbar-header -->

			<?php
				include("reuse/navBarTopLinks.php");
				include("reuse/leftNavBar.html");
				
		    ?>			
		</nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<div class="row">
							<div class="col-lg-12">
								<h1 class="page-header">EcoClean</h1>
							</div>
							<!-- /.col-lg-12 -->
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										DataTables Advanced Tables
									</div>
									<!-- /.panel-heading -->
									<div class="panel-body">
										<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
											<div class="row">
												<div class="col-sm-6">
													<div class="dataTables_length" id="dataTables-example_length">
														<label>Show 
															<select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
																<option value="10">10</option>
																<option value="25">25</option>
																<option value="50">50</option>
																<option value="100">100</option>
															</select> entries
														</label>
													</div>
												</div>
												<div class="col-sm-6">
													<div id="dataTables-example_filter" class="dataTables_filter">
														<label>Search:
															<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">
														</label>
													</div>
												</div>
											</div>
										<div class="row">
											<div class="col-sm-12">
												<table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
												<thead>
													<tr role="row">
														<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 94px;" aria-sort="ascending">Rendering engine</th>
														<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 117px;">Browser</th>
														<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 105px;">Platform(s)</th>
														<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 79px;">Engine version</th>
														<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 55px;">CSS grade</th>
													</tr>
												</thead>
												<tbody>
													
												<tr class="gradeA odd" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Firefox 1.0</td>
														<td>Win 98+ / OSX.2+</td>
														<td class="center">1.7</td>
														<td class="center">A</td>
													</tr><tr class="gradeA even" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Firefox 1.5</td>
														<td>Win 98+ / OSX.2+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr><tr class="gradeA odd" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Firefox 2.0</td>
														<td>Win 98+ / OSX.2+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr><tr class="gradeA even" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Firefox 3.0</td>
														<td>Win 2k+ / OSX.3+</td>
														<td class="center">1.9</td>
														<td class="center">A</td>
													</tr><tr class="gradeA odd" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Camino 1.0</td>
														<td>OSX.2+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr><tr class="gradeA even" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Camino 1.5</td>
														<td>OSX.3+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr><tr class="gradeA odd" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Netscape 7.2</td>
														<td>Win 95+ / Mac OS 8.6-9.2</td>
														<td class="center">1.7</td>
														<td class="center">A</td>
													</tr><tr class="gradeA even" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Netscape Browser 8</td>
														<td>Win 98SE+</td>
														<td class="center">1.7</td>
														<td class="center">A</td>
													</tr><tr class="gradeA odd" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Netscape Navigator 9</td>
														<td>Win 98+ / OSX.2+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr><tr class="gradeA even" role="row">
														<td class="sorting_1">Gecko</td>
														<td>Mozilla 1.0</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1</td>
														<td class="center">A</td>
													</tr></tbody>
												</table>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
											</div>
											<div class="col-sm-6">
												<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
													<ul class="pagination">
														<li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
															<a href="#">Previous</a>
														</li>
														<li class="paginate_button active" aria-controls="dataTables-example" tabindex="0">
															<a href="#">1</a>
														</li>
														<li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
															<a href="#">2</a>
														</li>
														<li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
															<a href="#">3</a>
														</li>
														<li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
															<a href="#">4</a>
														</li>
														<li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
															<a href="#">5</a>
														</li>
														<li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
															<a href="#">6</a>
														</li>
														<li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">
															<a href="#">Next</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										</div>
										<!-- /.table-responsive -->
									</div>
									<!-- /.panel-body -->
								</div>
								<!-- /.panel -->
							</div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="vendor/sb-admin-2/dist/js/sb-admin-2.js"></script>
	
	<!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
	
		<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
	
</body>

</html>
