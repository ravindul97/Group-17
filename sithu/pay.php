<html>
	<div class="col-lg-6">
			<form class="contact-form" method="post" action="https://www.payhere.lk/pay/checkout">
				<input type="hidden" name="merchant_id" value="212169">    <!-- Replace your Merchant ID -->
				<input type="hidden" name="return_url" value="https://kitulgalarafting.com/return">
				<input type="hidden" name="cancel_url" value="https://kitulgalarafting.com/cancel">
				<input type="hidden" name="notify_url" value="https://kitulgalarafting.com/notify">
				<input type="hidden" name="last_name" value="">
				<input type="hidden" name="phone" value="">
				<input type="hidden" name="address" value="">
				<input type="hidden" name="city" value="">
				<input type="hidden" name="country" value="">
				<input type="hidden" name="order_id" value="">
				<input type="hidden" name="" value="LKR">
					  <div class="form-group">
					 <span>Full Name</span>
						<input required type="text" name="first_name">
				 </div>
					  <div class="form-group">
					 <span>Your E-mail</span>
						<input style="width:100%" required type="email"  name="email">
				 </div>
					  <div class="form-group">
					 <span>Invoice Number</span>
						<input type="text" required  name="items">
				 </div>
					  <div class="form-group">
					 <span>Select Currency</span>
						<select style="width: 100%;height: 68px;border: 2px solid #e8e8e8;padding: 0 30px;"  name="currency">
							<option value="USD">USD</option>
							<option value="LKR">LKR</option>
						</select>
				 </div>
					  <div class="form-group">
					 <span>Enter Amount</span>
						<input style="width: 100%;height: 68px;border: 2px solid #e8e8e8;padding: 0 30px;" type="number" min="0" required name="amount">
				 </div>
					  <div class="form-group">
					 <input type="submit" value="Pay Now">
				 </div>
				  </form>
			  <!-- end contact-form -->
		  </div>
</html>