<?php 
	
	$page_title = 'Contact us';
	$page_description = 'Belgrade party contact page.';

	include './partials/header.php'; 
?>
	<main id="contact">
		<div class="padding-10">
			<div class="top">
				<h1>Contact us</h1>
			</div>
			<div class="form-wrapper">
				<form id="contact-form">
					<div class="form-control">
						<label for="contact-name">Name</label>
						<input type="text" name="email" id="contact-name" required placeholder="Please enter your name...">
					</div>
					<div class="form-control">
						<label for="contact-email">Contact email</label>
						<input type="text" name="email" id="contact-email" required placeholder="Please enter your contact email...">
					</div>
					<div class="form-control">
						<textarea name="note" id="contact-note" required placeholder="Message..."></textarea>
					</div>
					<div class="form-control">
						<button type="submit" class="btn-primary submit uc">Send</button>
					</div>
				</form>
			</div>
		</div>
	</main>
<?php include './partials/footer.php'; ?>	
</body>
</html>