<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Toko Sederhana BootCamp</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<style>
		body{
		width: 100%;
		height: 800px;
		margin: 10px auto;
		};	
		section{
			width: 900px;
		};
		form .button-group{
			text-align: right;
		}		
	</style> 
</head>
<body>
<div >
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<!-- box box-primary -->
				<div class="box box-primary">
					<!-- modal dialog-->
					<div class="modal fade" id="mymodaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					        <form action="phpCode/action_t_product.php?action=add" method="POST">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Tambah Data Peserta</h4>
						      </div>
						      <div class="modal-body">
					                <div class="form-group">
					                  <label>Id</label>
					                  <input type="text" class="form-control" name="add_id" placeholder="Id" disabled>
					                </div>
					                <div class="form-group">
					                  <label>Nama Product</label>
					                  <input type="text" class="form-control" name="add_nama_product" placeholder="Nama Product">
					                </div>
					                <div class="form-group">
					                  <label>Category</label>
					                  <input type="text" class="form-control" name="add_category_id" placeholder="Category">
					                </div>
						      </div>
						      <div class="modal-footer">
							      <button type="submit" class="btn btn-success" >Simpan</button>
							      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						      </div>						      
					        </form>					      	
					    </div>
					  </div>
					</div>
					<div class="modal fade" id="mymodalupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					        <form action="phpCode/action_t_product.php?action=update" method="POST">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Ubah Data Product</h4>
						      </div>
						      <div class="modal-body">
					                <div class="form-group">
					                  <label>Id</label>
					                  <input type="text" class="form-control" name="update_id_disabled" placeholder="Id" disabled>
					                  <input type="hidden" class="form-control" name="update_id">
					                </div>
													<div class="form-group">
					                  <label>Category</label>
					                  <input type="text" class="form-control" name="update_category_id" placeholder="Category">
					                </div>
					                <div class="form-group">
					                  <label>Nama Product</label>
					                  <input type="text" class="form-control" name="update_nama_product" placeholder="Nama Product">
					                </div>
						      </div>
						      <div class="modal-footer">
							      <button type="submit" class="btn btn-success" >Ubah</button>
							      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						      </div>						      
					        </form>						      
					    </div>
					  </div>
					</div>     
					<div class="modal fade" id="mymodaldelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					        <form action="phpCode/action_t_product.php?action=delete" method="POST">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Hapus Data Product</h4>
						      </div>
						      <div class="modal-body">
					                <div class="form-group">
					                  <label>Id</label>
					                  <input type="text" class="form-control" name="delete_id_disabled" placeholder="Id" disabled>
					                  <input type="hidden" class="form-control" name="delete_id">
					                </div>
					                <div class="form-group">
					                  <label>Nama Product</label>
					                  <input type="text" class="form-control" name="delete_nama_product" placeholder="Nama Product" disabled>
					                </div>
					                <div class="form-group">
					                  <label>Category</label>
					                  <input type="text" class="form-control" name="delete_category_id" placeholder="Category" disabled>
					                </div>
						      </div>
						      <div class="modal-footer">
							      <button type="submit" class="btn btn-success" >Hapus</button>
							      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						      </div>						      
					        </form>	
					    </div>
					  </div>
					</div>					
					<!-- /modal dialog-->					
					<!-- view data -->
	                <div class="box-body">
						<table id="tabel_data_product" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Id</th>
									<th>Category</th>
									<th>Nama Product</th>								
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Id</th>
									<th>Category</th>
									<th>Nama Product</th>								
								</tr>
							</tfoot>
						</table>                   
	                </div><!-- /.box-body -->
					<!-- /view data -->
				</div>
				<!-- /box box-primary-->
			</div><!--/.col (right) -->
		</div> <!-- /.row -->
	</section><!-- /.content -->
</div>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script> <!-- lib js untuk ajax -->
<script src="bootstrap/js/bootstrap.min.js"></script> <!-- lib js untuk modals -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script> <!-- lib js untuk datatables -->
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script> <!-- lib js untuk datatables -->
<script type="text/javascript">
	var t = $('#tabel_data_product').DataTable({
			  "autoWidth": false,
			  "rowCallback": function( row, data, index ) {
				  $('td:eq(3)', row).html("<button class=\"btn btn-danger delete-form\" data-toggle=\"modal\" data-target=\"#mymodaldelete\" data-id=\""+data[0]+"\" ><i class=\"fa fa-trash\"></i>Hapus</button>");
			  },			  
			  "columnDefs": [
    				{ "width": "2%", "targets": 0 },
    				{ "width": "28%", "targets": 1 },
    				{ "width": "50%", "targets": 2 },
    				{ "width": "20%", "targets": 3 }
  				]
			});	

	function add_data_to_table_t(table, data){
  	  	table.clear().draw();
  	  	table.rows.add(data).draw( false );
	}		

	function getDataOnJSON(data, id) {
		for(var i = 0; i < data.length; i++)
		{
			if(data[i][0] == id){
				return data[i];
			}
		}
	}

  	$(document).ready(function(){
	  	t.order( [ 0, 'asc' ] ).draw(false);	  		
	<?php
		require_once('phpCode/queryCode.php');
		$c = new Connection;
		$data = $c->select();
		echo "
		var data = ".json_encode($data).";
		console.log(JSON.stringify(data));
		add_data_to_table_t(t,data);
		";

		
		$id = $c->select_last_id();
		echo"
		$('input[name=\"add_id\"]').val(\"".$id."\");

		//fungsi ketika tombol delete ditekan
		$('.delete-form').click(function(){
			var id = $(this).data('id');
			var get_data = getDataOnJSON(data, id);
			$('input[name=\"delete_id\"]').val(get_data[0]);
			$('input[name=\"delete_id_disabled\"]').val(get_data[0]);
			$('input[name=\"delete_nama_product\"]').val(get_data[2]);
			$('input[name=\"delete_category_id\"]').val(get_data[1]);
		});

  		//fungsi ketika tombol update ditekan
  		$('.update-form').click(function(){
			var id = $(this).data('id');
			var get_data = getDataOnJSON(data, id);
			$('input[name=\"update_id\"]').val(get_data[0]);
			$('input[name=\"update_id_disabled\"]').val(get_data[0]);
			$('input[name=\"update_nama_product\"]').val(get_data[2]);
			$('input[name=\"update_category_id\"]').val(get_data[1]);	
		});
		";		
	?>		
	});	
</script>	
</body>
</html>
