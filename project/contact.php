<?php
require_once 'layout/header.php';
require_once 'layout/nav_top.php';
require_once 'layout/nav_right.php';
// slide hanya untuk home
// require_once 'layout/slide.php';
?>


<div class="card mt-5">
	<div class="row">

		<div class=" ml-0 col-lg-4 col-md-4 col-sm-4 ">
			<ul class=" m_xs_bottom_30">
				<h2 class="tt_uppercase color_dark m_bottom_25">Contact Info</h2>
				<ul class="c_info_list">
					<li class="m_bottom_10">
						<div class="clearfix m_bottom_15">
							<i class="fa fa-map-marker f_left color_dark"></i>
							<p class="contact_e">8901 Marmora Road,<br> Glasgow, D04 89GR.</p>
						</div>
					</li>
					<li class="m_bottom_10">
						<div class="clearfix m_bottom_10">
							<i class="fa fa-phone f_left color_dark"></i>
							<p class="contact_e">800-559-65-80</p>
						</div>
					</li>
					<li class="m_bottom_10">
						<div class="clearfix m_bottom_10">
							<i class="fa fa-envelope f_left color_dark"></i>
							<a class="contact_e default_t_color" href="mailto:#">info@companyname.com</a>
						</div>
					</li>
					<li>
						<div class="clearfix">
							<i class="fa fa-clock-o f_left color_dark"></i>
							<p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
						</div>
					</li>
				</ul>
			</ul>
		</div>
		<div class="col-6 border-1">
			<form>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Email</label>
						<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Password</label>
						<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Address</label>
					<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
				</div>
				<div class="form-group">
					<label for="inputAddress2">Address 2</label>
					<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				</div>
			</form>

		</div>
	</div>
</div>




<?php
//akhir content
require_once 'layout/footer.php';
?>