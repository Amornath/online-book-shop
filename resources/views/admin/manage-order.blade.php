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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
								  <th>order id</th>
								  <th>Customer name</th>
								  <th>order status</th>
								  
								  <th>Actions</th>
							  </tr>
						  </thead> 
						    
						  <tbody>
						  	@foreach($all_order_info as $v_order)
							<tr>
								<td>{{ $v_order->order_id }}</td>
								<td class="center">{{ $v_order->customer_name }}</td>
								<td class="center">{{ $v_order->order_status }}</td>
								
								<td class="center">
                                  
									
                                    
                                       
                                
									<a class="btn btn-info" href="{{URL::to('/view-order/'.$v_order->order_id)}}">
										<i class="">View</i>  
									</a>


                                     <a class="btn btn-danger" href="">
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


 




