@extends('admin-layout')
@section('admin-content')


<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Update category</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					   <p class="alert-success">
                         <?php
                           $message=Session::get('message');
                            if ($message) {
                               echo $message;
                               Session::put('message',null);
                           }

                          ?>
                          </p>

					<div class="box-content">
						<form class="form-horizontal" action="{{url('/update-product',$product_info->product_id)}}" method="post">
							{{ csrf_field() }}
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01">product name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge"  name="product_name" value="{{$product_info->product_name}}">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">product long description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_long_description" rows="3" required="">
									{{$product_info->product_long_description}}
								</textarea>
							  </div>
							</div>

							

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


@endsection