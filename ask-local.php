<?php include './partials/header.php'; ?>
	<main id="places">		
		<div class="place flex-sp-around">
			<div class="featured-img">
				<img class="fluid" src="./photos/party_2.jpg" alt="Ask local photo">
				<p><?=$place['address']?></p>
			</div>
			<div class="info">
				<h1 class="uc bold">Ask local</h1>
				<p>This is a unique option in our offer. It is not just tips and advices from
Belgrade residents; it is possibility to taste authentic feeling of Belgrade.</p>
				<p>"Locals" are very experienced in organizing all sorts of parties and
events, and familiar with all aspects of Belgrade’s nightlife and clubbing
scene. They will take you to exclusive worm up and after parties, you
cannot usually find on the Internet, and show you not so commercial,
but still very quality and interesting side of partying in Belgrade.</p>
				<p>This is the right choice for all of you adventurers, who like to try new
things and party in authentic Belgrade style. </p>
				<button id="book-local" class="btn-primary bold uc">Book now</button>
			</div>
		</div>
		<div id="book-local-modal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="close"><a href="#"><i class="fa fa-close"></i></a></span>
					<h2 class="uc bold">Book <span class="text-primary"><?=$place['name']?></span></h2>
				</div>
				<div class="modal-body">
					<form id="book-local-form">
						<div class="form-control">
							<label for="book-local-name">Name</label>
							<input type="text" name="email" id="book-local-name" required placeholder="Please enter your name...">
						</div>
						<div class="form-control flex-sp-between">
							<label for="book-local-people">Amount of people</label>
							<select name="people" id="book-local-people">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3-5">3-5</option>
								<option value="6-10">6-10</option>
							</select>
						</div>
						<div class="form-control">
							<label for="book-local-phone">Contact phone</label>
							<input type="text" name="phone" id="book-local-phone" required placeholder="Please enter your contact phone...">
						</div>
						<div class="form-control">
							<label for="book-local-email">Email</label>
							<input type="text" name="email" id="book-local-email" required placeholder="Please enter your contact email...">
						</div>
						<div class="form-control">
							<textarea name="note" id="book-local-note" placeholder="Note..."></textarea>
						</div>
					</form>
				</div>				
				<div class="modal-footer">
					<button form="book-local-form" type="submit" class="btn-primary submit uc">Book</button>
				</div>
			</div>
		</div>
	</main>
<?php include './partials/footer.php'; ?>
</body>
</html>