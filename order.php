<?php
include("components/header.php")
?>



	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
	Order Place
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="row">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg">
                <form method="post">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Order Now
                    </h4>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" value="<?php echo $_SESSION['username']?>">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" value="<?php echo $_SESSION['useremail']?>">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="tel" name="number" value="<?php echo $_SESSION['usernumber']?>">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-30">
                        <textarea required class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="address" placeholder="Address"></textarea>
                    </div>
					<h4 class="mtext-105 cl2 txt-center p-b-30">
                        Order Type
                    </h4>
                    <div class="m-b-20 d-flex justify-content-start">
                        <div class="d-flex align-items-center">
                            <input class="mb-2" type="radio" id="home_delivery" name="order_type" value="Home Delivery" required>
                            <label for="home_delivery" class="ml-2">Home Delivery</label>
                        </div>
                        <div class="mx-4 d-flex align-items-center">
                            <input class="mb-2" type="radio" id="pickup" name="order_type" value="Pickup">
                            <label for="pickup" class="ml-2">Pickup</label>
                        </div>
                    </div>
                    
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Payment Options
                    </h4>
                    <div class="m-b-20 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <input class="mb-2" type="radio" id="credit_card" name="payment_method" value="Credit Card" required>
                            <label for="credit_card" class="ml-2">Credit Card</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input class="mb-2" type="radio" id="vpp" name="payment_method" value="VPP">
                            <label for="vpp" class="ml-2">Value Payable Post (VPP)</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input class="mb-2" type="radio" id="cheque" name="payment_method" value="Cheque">
                            <label for="cheque" class="ml-2">Cheque</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input class="mb-2" type="radio" id="dd" name="payment_method" value="Demand Draft">
                            <label for="dd" class="ml-2">Demand Draft (DD)</label>
                        </div>
                    </div>
                    
                    <button name='orderPlace' type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>



<?php
include("components/footer.php")
?>