<?php
include "components/header.php";
?>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Feedback
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div style="align-items: center;justify-content: center;display: flex; " class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Give Us Feedback
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input required class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="feedemail" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea required class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="feedmsg" placeholder="How Can We Help?"></textarea>
						</div>

						<button  type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="feedback">
							Submit
						</button>
					</form>
				</div>
				</div>
			</div>
		</div>
	</section>	



<?php
include "components/footer.php";
?>