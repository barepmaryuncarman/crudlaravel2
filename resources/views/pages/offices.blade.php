@extends("layouts.adminlte")

@section('icon_aplikasi')
SIM
@endsection

@section('nama_aplikasi')
Sistem MLM
@endsection

@section('username')
Username
@endsection

@section('side-menu')
<li><a href="/products"><i class="fa fa-cubes text-yellow"></i> <span>Products</span></a></li>
<li><a href="/employees"><i class="fa fa-users text-yellow"></i> <span>Employees</span></a></li>
<li><a href="/customers"><i class="fa fa-users text-yellow"></i> <span>Customers</span></a></li>
<li class="active"><a href="/offices"><i class="fa fa-building-o text-yellow"></i> <span>Offices</span></a></li>
<li><a href="/orders"><i class="fa fa-list text-yellow"></i> <span>Orders</span></a></li>
@endsection

@section('content')
<section class="content-header">
	<h1>
		Sistem MLM
	<small>Product</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i>Sistem MLM</a></li>
		<li><a href="#"><i class="fa fa-users"></i>Product</a></li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">

				<!--start form productline-->
					<div class="modal fade" id="mymodalproductline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Product Line</h4>
						      </div>
						      <div class="modal-body">
					                <div class="form-group">
					                  <img class="img-circle center-block" src="" id="add_showImage" data-id="">
					                </div>
					                <div class="form-group">
					                  <label>Image</label>
					                  <input type="text" class="form-control" name="add_image" placeholder="Image Url">
					                </div>
									<div class="form-group">
					                  <label>Text Description</label>
					                  <textarea class="form-control" rows="5" name="add_textDescription" placeholder="Product Description" ></textarea>
					                </div>
									<div class="form-group">
					                  <label>HTML Description</label>
					                  <textarea class="form-control" rows="5" name="add_htmlDescription" placeholder="Product Description" ></textarea>
					                </div>
						      </div>
						      <div class="modal-footer">
							      <button type="submit" class="btn btn-success" data-dismiss="modal" id="add_productline_action">Save</button><button type="submit" class="btn btn-warning" data-dismiss="modal" id="edit_productline_action">Edit</button><button type="submit" class="btn btn-danger" data-dismiss="modal" id="delete_productline_action">Delete</button>
							      <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
						      </div>
					    </div>
					  </div>
					</div>
				<!--end form tambah data-->

				<!--start form tambah data-->
					<div class="modal fade" id="mymodaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
						      </div>
						      <div class="modal-body">
					                <div class="form-group">
					                  <label>Product Name</label>
					                  <input type="text" class="form-control" name="add_productName" placeholder="Product Name">
					                </div>
					                <div class="form-group">
					                  <label>Product Scale</label>
					                  <input type="text" class="form-control" name="add_productScale" placeholder="Product Scale">
					                </div>
									<div class="form-group">
					                  <label>Product Vendor</label>
					                  <input type="text" class="form-control" name="add_productVendor" placeholder="Product Vendor">
					                </div>
									<div class="form-group">
					                  <label>Product Description</label>
					                  <textarea class="form-control" rows="3" name="add_productDescription" placeholder="Product Description" ></textarea>
					                </div>
									<div class="form-group">
					                  <label>Quantity In Stock</label>
					                  <input type="text" class="form-control" name="add_quantityInStock" placeholder="Quantity In Stock">
					                </div>
									<div class="form-group">
					                  <label>Buy Price</label>
					                  <input type="text" class="form-control" name="add_buyPrice" placeholder="Buy Price">
					                </div>
									<div class="form-group">
					                  <label>MSRP</label>
					                  <input type="text" class="form-control" name="add_MSRP" placeholder="MSRP">
					                </div>
						      </div>
						      <div class="modal-footer">
							      <button type="submit" class="btn btn-success" data-dismiss="modal" id="add_action">Save</button>
							      <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
						      </div>
					    </div>
					  </div>
					</div>
				<!--end form tambah data-->

				<!--start form ubah data-->
					<div class="modal fade" id="mymodalupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
						      </div>
						      <div class="modal-body">
					                <div class="form-group">
					                  <label>Product Name</label>
					                  <input type="text" class="form-control" name="edit_productName" placeholder="Product Name">
					                </div>
					                <div class="form-group">
					                  <label>Product Scale</label>
					                  <input type="text" class="form-control" name="edit_productScale" placeholder="Product Scale">
					                </div>
									<div class="form-group">
					                  <label>Product Vendor</label>
					                  <input type="text" class="form-control" name="edit_productVendor" placeholder="Product Vendor">
					                </div>
									<div class="form-group">
					                  <label>Product Description</label>
					                  <textarea class="form-control" rows="3" name="edit_productDescription" placeholder="Product Description"></textarea>
					                </div>
									<div class="form-group">
					                  <label>Quantity In Stock</label>
					                  <input type="text" class="form-control" name="edit_quantityInStock" placeholder="Quantity In Stock">
					                </div>
									<div class="form-group">
					                  <label>Buy Price</label>
					                  <input type="text" class="form-control" name="edit_buyPrice" placeholder="Buy Price">
					                </div>
									<div class="form-group">
					                  <label>MSRP</label>
					                  <input type="text" class="form-control" name="edit_MSRP" placeholder="MSRP">
					                </div>
						      </div>
						      <div class="modal-footer">
							      <button type="submit" class="btn btn-success" data-dismiss="modal" id="update_action">Save</button>
							      <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
						      </div>
					    </div>
					  </div>
					</div>
				<!--end form ubah data-->

				<!--start form detail data-->
					<div class="modal fade" id="mymodalshow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">View Product</h4>
						      </div>
						      <div class="modal-body">
					                <div class="form-group">
					                  <label>Product Name</label>
					                  <input type="text" class="form-control" name="view_productName" placeholder="Product Name">
					                </div>
					                <div class="form-group">
					                  <label>Product Scale</label>
					                  <input type="text" class="form-control" name="view_productScale" placeholder="Product Scale">
					                </div>
									<div class="form-group">
					                  <label>Product Vendor</label>
					                  <input type="text" class="form-control" name="view_productVendor" placeholder="Product Vendor">
					                </div>
									<div class="form-group">
					                  <label>Product Description</label>
					                  <textarea class="form-control" rows="3" placeholder="Product Description" name="view_productDescription" ></textarea>
					                </div>
									<div class="form-group">
					                  <label>Quantity In Stock</label>
					                  <input type="text" class="form-control" name="view_quantityInStock" placeholder="Quantity In Stock">
					                </div>
									<div class="form-group">
					                  <label>Buy Price</label>
					                  <input type="text" class="form-control" name="view_buyPrice" placeholder="Buy Price">
					                </div>
									<div class="form-group">
					                  <label>MSRP</label>
					                  <input type="text" class="form-control" name="view_MSRP" placeholder="MSRP">
					                </div>
						      </div>
					    </div>
					  </div>
					</div>
				<!--end form detail data-->

				<div class="box-header with-border">
					<button class="btn btn-sm btn-primary tambah-form" data-toggle="modal" data-target="#mymodaladd"><i class="fa fa-plus"></i>&nbsp;Add</button>
				</div>
                <div class="box-body">
					<table id="tabel_data_produk" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Product Name</th>
								<th>Product Scale</th>
								<th>Product Vendor</th>
								<th>Product Description</th>
								<th>Quantity In Stock</th>
								<th>Buy Price</th>
								<th>MSRP</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Product Name</th>
								<th>Product Scale</th>
								<th>Product Vendor</th>
								<th>Product Description</th>
								<th>Quantity In Stock</th>
								<th>Buy Price</th>
								<th>MSRP</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
                </div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	//Inisialisasi datatables
	var t = $('#tabel_data_produk').DataTable({
		      "scrollX": "140%",
			  "rowCallback": function( row, data, index ) {
			  	$('td:eq(0)', row).text(data[0]+1);
				$('td:eq(8)', row).html("<button class=\"btn btn-sm btn-default\"  data-toggle=\"modal\" data-target=\"#mymodalproductline\"  onclick='handleClickAddProductLines("+data[8]+");'><i class=\"fa fa-cubes\"></i>&nbsp;Product Lines</button>&nbsp;&nbsp;<button class=\"btn btn-sm btn-success\"  data-toggle=\"modal\" data-target=\"#mymodalshow\"  onclick='handleClickView("+data[8]+");'><i class=\"fa fa-eye\"></i>&nbsp;View</button>&nbsp;&nbsp;<button class=\"btn btn-sm btn-warning\" data-toggle=\"modal\" data-target=\"#mymodalupdate\" onclick='handleClickUpdate("+data[8]+");'><i class=\"fa fa-edit\"></i>&nbsp;Edit</button>&nbsp;&nbsp;<button class=\"btn btn-sm btn-danger\"  onclick='handleClickDelete("+data[8]+");'><i class=\"fa fa-trash\"></i>&nbsp;Delete</button>");
			  },
			  "columnDefs": [
    				{ "width": "2%", sClass: "dt-head-center dt-body-center", "targets": 0 },
    				{ "width": "10%", sClass: "dt-head-center dt-body-left", "targets": 1 },
    				{ "width": "5%", sClass: "dt-head-center dt-body-center", "targets": 2 },
    				{ "width": "15%", sClass: "dt-head-center dt-body-left", "targets": 3 },
    				{ "width": "25%", sClass: "dt-head-center dt-body-left", "targets": 4 },
    				{ "width": "5%", sClass: "dt-head-center dt-body-center", "targets": 5 },
    				{ "width": "10%", sClass: "dt-head-right dt-body-right", render: $.fn.dataTable.render.number( '.', ',', 2, 'Rp ' ), "targets": 6 },
    				{ "width": "5%", sClass: "dt-head-center dt-body-center", "targets": 7 },
    				{ "width": "35%", sClass: "dt-head-center dt-body-center", "targets": 8 }
  				]
			});

	function handleClickAddProductLines(id){
		$.ajax({
			url:"/product-lines/select/"+id,
			dataType: "json",
			type:"POST",
	        contentType: false,
	        processData: false,
			data: function() {
		        var data = new FormData();
		        data.append("_method",'put');
		        data.append("_token","{{csrf_token()}}");
		        return data;
	        }(),
	        success:function(data){
	        	if(data.productline!=null){
		        	$('#add_showImage').attr('src', data.productline.image);
		        	$('#add_showImage').data('id',data.productCode);
		        	$('input[name="add_image"]').val(data.productline.image);
		        	$('textarea[name="add_textDescription"]').val(data.productline.textDescription);
		        	$('textarea[name="add_htmlDescription"]').val(data.productline.htmlDescription);
		        	$('#add_productline_action').hide();
		        	$('#edit_productline_action').show();
		        	$('#delete_productline_action').show();
	        	}else{
		        	$('#add_showImage').attr('src', "");
		        	$('input[name="add_image"]').val("");
		        	$('textarea[name="add_textDescription"]').val("");
		        	$('textarea[name="add_htmlDescription"]').val("");
		        	$('#add_productline_action').show();
		        	$('#edit_productline_action').hide();
		        	$('#delete_productline_action').hide();
	        	}
			}
		})
	}

	//fungsi ajax tampilkan data pada form detail
	function handleClickView(id){
		$.ajax({
			url:"/products/show/"+id,
			dataType: "json",
			type:"POST",
	        contentType: false,
	        processData: false,
			data: function() {
		        var data = new FormData();
		        data.append("_method",'put');
		        data.append("_token","{{csrf_token()}}");
		        return data;
	        }(),
	        success:function(data){
	        	$('input[name="view_productName"]').val(data.productName);
	        	$('input[name="view_productScale"]').val(data.productScale);
	        	$('input[name="view_productVendor"]').val(data.productVendor);
	        	$('textarea[name="view_productDescription"]').val(data.productDescription);
	        	$('input[name="view_quantityInStock"]').val(data.quantityInStock);
	        	$('input[name="view_buyPrice"]').val(data.buyPrice);
	        	$('input[name="view_MSRP"]').val(data.MSRP);
			}
		})
	}

	//fungsi ajax tampilkan data pada form update
	function handleClickUpdate(id){
		$.ajax({
			url:"/products/edit/"+id,
			dataType: "json",
			type:"POST",
	        contentType: false,
	        processData: false,
			data: function() {
		        var data = new FormData();
		        data.append("_method",'put');
		        data.append("_token","{{csrf_token()}}");
		        return data;
	        }(),
	        success:function(data){
	        	$('input[name="edit_productName"]').val(data.productName);
	        	$('input[name="edit_productScale"]').val(data.productScale);
	        	$('input[name="edit_productVendor"]').val(data.productVendor);
	        	$('textarea[name="edit_productDescription"]').val(data.productDescription);
	        	$('input[name="edit_quantityInStock"]').val(data.quantityInStock);
	        	$('input[name="edit_buyPrice"]').val(data.buyPrice);
	        	$('input[name="edit_MSRP"]').val(data.MSRP);
	        	$('#update_action').data('id',data.productCode);
			}
		})
	}

	//fungsi ajax untuk hapus data
	function handleClickDelete(id){
	  	swal({
			title: "Are you sure?",
			text: "This data will be temporary delete!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Yes, Delete!",
			cancelButtonText: "Cancle",
			closeOnConfirm: false,
			closeOnCancel: false,
			showLoaderOnConfirm: true
		},
		function(isConfirm){
				if (isConfirm) {
			        $.ajax({
						url:"/products/destroy/"+id,
						type:"POST",
				        contentType: false,
				        processData: false,
						data: function() {
					        var data = new FormData();
					        data.append("_method",'delete');
					        data.append("_token","{{csrf_token()}}");
					        return data;
				        }(),
					    success:function(data){
					    	console.log(data);
                            setTimeout(function(){
                                swal({
                                    title: "Success",
                                    text: "Data successfully deleted!",
                                    type: "success"
                                }, function(){
										refresh_tabel();
                                });
                            }, 1000);
						},
		                error: function (xhr, ajaxOptions, thrownError) {
		                    setTimeout(function(){
		                        swal("Error!", "Please check your connection and try again.", "error");
		                        }, 1000);
		                }
					});
				} else {
    				swal("Cancle", "Data undeleted :)", "error");
				}
		});
	}

	//fungsi masukan data array ke datatables
	function add_data_to_table_t(table, data){
  	  	table.clear().draw();
  	  	table.rows.add(data).draw( false );
	}

	//fungsi untuk ambil data pada database dan mengupdate datatable
	function refresh_tabel(){
		$.ajax({
			url:"/products/select",
			dataType: "json",
			type:"POST",
	        contentType: false,
	        processData: false,
			data: function() {
		        var data = new FormData();
		        data.append("_method",'put');
		        data.append("_token","{{csrf_token()}}");
		        return data;
	        }(),
        	success:function(tmp){
        	var data = new Array();
        	for(var i = 0; i < tmp.length; i++)
			{
				data[i] = new Array();
				data[i][0] = i;
				data[i][1] = tmp[i].productName;
				data[i][2] = tmp[i].productScale;
				data[i][3] = tmp[i].productVendor;
				data[i][4] = tmp[i].productDescription;
				data[i][5] = tmp[i].quantityInStock;
				data[i][6] = tmp[i].buyPrice;
				data[i][7] = tmp[i].MSRP;
				data[i][8] = tmp[i].productCode;
			}
        	add_data_to_table_t(t, data);
			}
		})
	}

  	$(document).ready(function(){
  		$(function(){
  			//sorting datatables berdasarkan nomor urut
	  		t.order( [ 0, 'asc' ] ).draw(false);
	  		//isi datatables
  			refresh_tabel();
		});

		//aksi untuk tambah data product line
	  	$("#add_productline_action").click(function(){
	  		var image = $("input[name=\"add_image\"]").val();
	  		var textDescription = $("textarea[name=\"add_textDescription\"]").val();
	  		var htmlDescription = $("textarea[name=\"add_htmlDescription\"]").val();
		    var productCode = $('#add_showImage').data('id');
			$.ajax({
				url:"/product-lines/store",
				type:"POST",
		        contentType: false,
		        processData: false,
				data: function() {
			        var data = new FormData();
			        data.append("_token","{{csrf_token()}}");
			        data.append("image", image);
			        data.append("textDescription", textDescription);
			        data.append("htmlDescription", htmlDescription);
			        data.append("productCode", productCode);
			        return data;
		        }(),
		        success:function(data){
		        	console.log(data);
		        	refresh_tabel();
    				swal("Yeay", "Success add new data!", "success");
				},
				error:function(data){
    				swal("Ooops", "Failed add new data", "error");
				}
			})
		});

		//aksi untuk ubah data product line
	  	$("#edit_productline_action").click(function(){
	  		var image = $("input[name=\"add_image\"]").val();
	  		var textDescription = $("textarea[name=\"add_textDescription\"]").val();
	  		var htmlDescription = $("textarea[name=\"add_htmlDescription\"]").val();
		    var productCode = $('#add_showImage').data('id');
			$.ajax({
				url:"/product-lines/update/"+productCode,
				type:"POST",
		        contentType: false,
		        processData: false,
				data: function() {
			        var data = new FormData();
			        data.append("_token","{{csrf_token()}}");
			        data.append("image", image);
			        data.append("textDescription", textDescription);
			        data.append("htmlDescription", htmlDescription);
			        return data;
		        }(),
		        success:function(data){
		        	console.log(data);
		        	refresh_tabel();
    				swal("Yeay", "Success update data!", "success");
				},
				error:function(data){
    				swal("Ooops", "Failed update data", "error");
				}
			})
		});		

		//aksi untuk ubah data product line
	  	$("#delete_productline_action").click(function(){
		    var id = $('#add_showImage').data('id');
		  	swal({
				title: "Are you sure?",
				text: "This product line data will be deleted!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, Delete!",
				cancelButtonText: "Cancle",
				closeOnConfirm: false,
				closeOnCancel: false,
				showLoaderOnConfirm: true
			},
			function(isConfirm){
					if (isConfirm) {
				        $.ajax({
							url:"/product-lines/destroy/"+id,
							type:"POST",
					        contentType: false,
					        processData: false,
							data: function() {
						        var data = new FormData();
						        data.append("_method",'delete');
						        data.append("_token","{{csrf_token()}}");
						        return data;
					        }(),
						    success:function(data){
						    	console.log(data);
	                            setTimeout(function(){
	                                swal({
	                                    title: "Success",
	                                    text: "Data successfully deleted!",
	                                    type: "success"
	                                }, function(){
											refresh_tabel();
	                                });
	                            }, 1000);
							},
			                error: function (xhr, ajaxOptions, thrownError) {
			                    setTimeout(function(){
			                        swal("Error!", "Please check your connection and try again.", "error");
			                        }, 1000);
			                }
						});
					} else {
	    				swal("Cancle", "Data undeleted :)", "error");
					}
			});
		});		

		//aksi untuk tambah data
	  	$("#add_action").click(function(){
	  		var productName = $("input[name=\"add_productName\"]").val();
	  		var productScale = $("input[name=\"add_productScale\"]").val();
	  		var productVendor = $("input[name=\"add_productVendor\"]").val();
	  		var productDescription = $("textarea[name=\"add_productDescription\"]").val();
	  		var quantityInStock = $("input[name=\"add_quantityInStock\"]").val();
	  		var buyPrice = $("input[name=\"add_buyPrice\"]").val();
	  		var MSRP = $("input[name=\"add_MSRP\"]").val();
			$.ajax({
				url:"/products/store",
				type:"POST",
		        contentType: false,
		        processData: false,
				data: function() {
			        var data = new FormData();
			        data.append("_token","{{csrf_token()}}");
			        data.append("productName", productName);
			        data.append("productScale", productScale);
			        data.append("productVendor", productVendor);
			        data.append("productDescription", productDescription);
			        data.append("quantityInStock", quantityInStock);
			        data.append("buyPrice", buyPrice);
			        data.append("MSRP", MSRP);
			        return data;
		        }(),
		        success:function(data){
		        	console.log(data);
		        	refresh_tabel();
    				swal("Yeay", "Success add new data!", "success");
				},
				error:function(data){
    				swal("Ooops", "Failed add new data", "error");
				}
			})
		});

		//aksi untuk ubah data
	  	$("#update_action").click(function(){
	  		var id = $("#update_action").data("id");
	  		var productName = $("input[name=\"edit_productName\"]").val();
	  		var productScale = $("input[name=\"edit_productScale\"]").val();
	  		var productVendor = $("input[name=\"edit_productVendor\"]").val();
	  		var productDescription = $("textarea[name=\"edit_productDescription\"]").val();
	  		var quantityInStock = $("input[name=\"edit_quantityInStock\"]").val();
	  		var buyPrice = $("input[name=\"edit_buyPrice\"]").val();
	  		var MSRP = $("input[name=\"edit_MSRP\"]").val();
			$.ajax({
				url:"/products/update/"+id,
				type:"POST",
		        contentType: false,
		        processData: false,
				data: function() {
			        var data = new FormData();
			        data.append("_token","{{csrf_token()}}");
			        data.append("productName", productName);
			        data.append("productScale", productScale);
			        data.append("productVendor", productVendor);
			        data.append("productDescription", productDescription);
			        data.append("quantityInStock", quantityInStock);
			        data.append("buyPrice", buyPrice);
			        data.append("MSRP", MSRP);
			        return data;
		        }(),
		        success:function(data){
		        	console.log(data);
		        	refresh_tabel();
    				swal("Yeay", "Success update data!", "success");
				},
				error:function(data){
    				swal("Ooops", "Failed update data", "error");
				}
			})
		});
	});
</script>
@endsection
