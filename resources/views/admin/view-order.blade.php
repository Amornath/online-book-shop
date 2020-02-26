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

			<!-- Order details -->

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Order Details</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
								  <th> ID</th>
								  <th>Product Name</th>
								 
								  
								  
								  <th>Product Price</th>
								  <th>Product Quantity</th>
								  <th>Total</th>
								  
								 
								  
								 
							  </tr>
						  </thead> 
						    
						  <tbody>
						  	     

						  	@foreach($order_by_id as $v_order)
							<tr>
								
								<td class="center">{{$v_order->order_id}}</td>

								<td class="center">{{$v_order->product_name}}</td>
								
								<td class="center">{{$v_order->product_price}}</td>
								<td class="center">{{$v_order->product_quantity}}</td>
								
															 
							</tr>
							
                             @endforeach 
						    </tbody>
                       
					  </table>





				</div>

			</div>
		</div>


    <!-- Shipping details -->


		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Shipping Details</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
								  
								  <th>Username </th>
								 
								  
								  <th>Address</th>
								  <th>Mobile</th>
								 
								  
								 
							  </tr>
						  </thead> 
						    
						  <tbody>
						  	@foreach($order_by_id as $v_order)
							<tr>
								
								<td class="center">{{$v_order->F_name}}</td>
								<td class="center">{{$v_order->address}}</td>
								
								<td class="center">{{$v_order->mobile}}</td>
								
								
								
								
							 
							    </tr>
							@endforeach

						    </tbody>
                       
					  </table>

					



				</div>

			</div>
		</div>


    <!-- customer details -->

		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Customer Details</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
								  
								  <th>Customer Name</th>
								 
								  
								  
								  <th>Mobile</th>
								 
								  
								 
							  </tr>
						  </thead> 
						    
						  <tbody>
						  		@foreach($order_by_id as $v_order)
							<tr>
							
								<td class="center">{{$v_order->customer_name}}</td>
								<td class="center">{{$v_order->customer_mobile}}</td>
								
								
								
								
							 
							    </tr>
							@endforeach

						    </tbody>
                       
					  </table>

					



				</div>

			</div>
		</div>
			

@endsection


 






