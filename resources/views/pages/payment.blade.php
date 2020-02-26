@extends('layout')
@section('title', 'Payment | BoiGhor')
@section('content')

                        
                     <div>
                        <form action="{{url('/order-place')}}" method="post" style="padding-top: 150px; padding-left: 550px;">
				        	{{ csrf_field() }}
				        	<input type="radio" name="payment_method" value="handcash">Handcash<br>
				        	<input type="radio" name="payment_method" value="paypal">paypal<br>
				        	<input type="radio" name="payment_method" value="bikash">Bikash<br>
				        	<input type="submit" class="btn btn-success"  name="" value="Done">
				        </form>
				    </div>



@endsection