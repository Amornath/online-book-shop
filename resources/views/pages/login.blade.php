@extends('layout')
@section('title', 'Login | BoiGhor')
@section('content')


		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row" style="padding-top: 72px;">
					<div class="col-lg-6 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">Login</h3>
							<form action="{{url('/customer-login')}}" method="post">
								{{ csrf_field() }}
								<div class="account__form">
									<div class="input__box">
										<label> email address <span>*</span></label>
										<input type="text" name="email">
									</div>
									<div class="input__box">
										<label>Password<span>*</span></label>
										<input type="text" name="password">
									</div>
									<div class="form__btn">
										<button>Login</button>
										<label class="label-for-checkbox">
											<input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
											<span>Remember me</span>
										</label>
									</div>
									<a class="forget_pass" href="#">Lost your password?</a>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">Register</h3>
							<form action="{{url('/customer-registration')}}" method="post">
								{{ csrf_field() }}
								<div class="account__form">
									<div class="input__box">
										<label>Customer Name<span>*</span></label>
										<input type="text" name="customer_name">
									</div>
									<div class="input__box">
										<label>Email address <span>*</span></label>
										<input type="email" name="customer_email">
									</div>
									<div class="input__box">
										<label>Password<span>*</span></label>
										<input type="password" name="password">
									</div>
									<div class="input__box">
										<label>Mobile Number<span>*</span></label>
										<input type="text" name="customer_mobile">
									</div>
									<div class="form__btn">
										<button>Register</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End My Account Area -->




@endsection