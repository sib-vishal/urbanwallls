<header class="header stricky ">
	<div class="containerFull">
		<div class="inlineHeader">
			<div class="leftHeader d-flex align-items-center">
				<div class="leftLogo">
					<a href="index.php">
						<picture>
							<source src="images/logo.webp" type="image/webp" />
							<img src="images/logo.png" />
						</picture>
					</a>
				</div>
			</div>
			<div class="rightMenu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Properties <i class="fa fa-chevron-down"></i></a>
						<ul class="shadow">
							<li><a href="#">Buy</a></li>
							<li><a href="#">Rent</a></li>
						</ul>
					</li>
					<li><a href="#">Projects <i class="fa fa-chevron-down"></i></a>
						<ul class="shadow">
							<li><a href="#">Residential</a></li>
							<li><a href="#">Commercial</a></li>
						</ul>
					</li>
					<li><a href="#">Services </a></li>
					<li><a href="#">Contact </a></li>
				</ul>
			</div>
			<a href="#" class="headerBtn">Post Property</a>
		</div>
	</div>
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<h5 id="offcanvasRightLabel">&nbsp;</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<div class="innerMenu">
			</div>
		</div>
		<div class="followUs">
			<h3 class="text fontWeight500">Follow Us</h3>
			<ul class="socialLink">
				<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
			</ul>
		</div>
	</div>
</header>










<div class="modal fade show" id="formEnquire" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
	role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header ">
				<h3 class="modal-title fontHeading fontWeight700 
					small_heading" id="exampleModalLabel"><span>Get in touch with us</span></h3>
				<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="email.php">
					<div class="row">
						<div class="col-lg-12">
							<div class="formItem mb-0">
								<div class="form-floating">
									<input type="hidden" name="hidden">
									<input type="text" required="" class="form-control" id="name" name="name"
										placeholder="name">
									<label for="name">Name</label>
								</div>
							</div>
							<div class="formItem mt-3 mb-0">
								<div class="form-floating">
									<input type="tel" required="" class="form-control" id="phone" name="phone"
										placeholder="phone">
									<label for="phone">Phone</label>
								</div>
							</div>
							<div class="formItem mt-3">
								<div class="form-floating mb-2">
									<input type="email" required="" class="form-control" id="email" name="email"
										placeholder="email">
									<label for="email">Email</label>
								</div>
							</div>
						</div>
					</div>
					<div class="formItem mt-3">
						<button id="cpatchaSubmitBtn2" type="submit" name="submit"
							class="btnColor rounded border-0 w-100">Send
							Request</button>
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between bg-black ">
				<div class="itemModal">
					<a class="text-white" href="https://api.whatsapp.com/send?phone=amp;text=Hi"><i class="me-2 fab fa-whatsapp"></i>
						WhatsApp</a>
				</div>
				<div class="itemModal">
					<a class="text-white" href="tel:"><i class="fa fa-phone me-2"></i>123456778</a>
				</div>
			</div>
		</div>
	</div>
</div>

