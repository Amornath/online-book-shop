@extends('admin-layout')
@section('admin-content')

	        <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Publications</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>product ID</th>
								  <th>product Name</th>
								  <th>product manufacture</th>
								  <th>product image</th>
								  <th>product category</th>
								  <th>product price</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						    
						  <tbody>
						  	@foreach($all_product_info as $v_product)
							<tr>
								<td>{{ $v_product->product_id }}</td>
								<td class="center">{{ $v_product->product_name }}</td>
								<td class="center">{{ $v_product->manufacture_name }}</td>
								<td class="center"><img src="{{URL::to ($v_product->product_image) }}" style="height: 80px; width:80px"></td>
								<td class="center">{{ $v_product->category_name }}</td>
								<td class="center">{{ $v_product->product_price }}</td>
								<td class="center">
                                   <?php if($v_product->publication_status==1){ ?>
									<span class="label label-success">Active</span>
                                   <?php } else{ ?>
                                       <span class="label label-danger">unactive</span>
                                 <?php  } ?>
                                   
								</td>
								<td class="center">
                                    @if($v_product->publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/unactive-product/'.$v_product->product_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
                                     @else
                                       <a class="btn btn-success" href="{{URL::to('/active-product/'.$v_product->product_id)}}">
										<i class="halflings-icon white thumbs-up"></i> 
									</a>
                                     @endif
									<a class="btn btn-info" href="{{URL::to('/edit-product/'.$v_product->product_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>


                                     <a class="btn btn-danger" href="{{URL::to('/delete-product/'.$v_product->product_id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>

									
								</td>
							</tr>
							  @endforeach

						  </tbody>
                       
					  </table>



					</div>
				</div>


@endsection


 




