@include('subhead')
<body>
	@include('header')
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index">Home</a> / <span>Mail Us</span></h3>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle">Mail Us</h2>
							<div class="mail-grids">
								<div class="mail-top">
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
										<h5>Address</h5>
										<p>vadodara, gujarat</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
										<h5>Phone</h5>
										<p>Telephone:  +48 739517137</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
										<h5>E-mail</h5>
										<p>E-mail:<a href="mailto:konarchpl@gmail.com"> example@mail.com</a></p>
									</div>
									<div class="clearfix"></div>
								</div>
								
								<div class="mail-bottom">
									<h4>Get In Touch With Us</h4>
									<form action="#" method="post">
										<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
										<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
										<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
										<textarea  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
										<input type="submit" value="Submit" >
										<input type="reset" value="Clear" >

									</form>
								</div>
							</div>
						</div>
					</div>
				<!--contact-->
			</div>
		<!--content-->
		@include('footer')
</body>
</html>