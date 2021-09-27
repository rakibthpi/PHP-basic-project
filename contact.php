<?php require_once('header.php'); ?>

<div class="contact_form_area">
	<div class="container">
		

		<form action="form-contact.php" method="POST">
		<div class="row g-4">
			<div class="offset-md-3 col-md-6">
				<?php if (isset($_GET['error'])): ?>
					<div class="alert alert-danger ">
						<?php echo 'Fils is Required!!' ?>
					</div>
				<?php endif ?>
				 <!-- Error message area  -->
		        <?php if(isset($_GET['success'])): ?>
		            <div class="alert alert-success">
		                <?php echo 'Fils is Success'; ?>
		            </div>
		        <?php endif; ?>
			</div>
			<div class="offset-md-3 col-md-6">
				<label for="name">Name</label>
				<input class="form-control" type="text" name="st_name" placeholder="Name" id="name">
			</div>
			<div class="offset-md-3 col-md-6">
				<label for="roll">Roll</label>
				<input class="form-control" type="text" name="st_roll" placeholder="Roll" id="roll">
			</div>
			<div class="offset-md-3 col-md-6">
				<label for="reg">Ragister</label>
				<input class="form-control" type="text" name="st_reg" placeholder="Register" id="reg">
			</div>
			<div class="offset-md-3 col-md-6">
				<label for="adress">Adress</label>
				<input class="form-control" type="text" name="st_adress" placeholder="Adress" id="adress">
			</div>
			<div class="offset-md-3 col-md-6">
				<label for="massege">Name</label>
				<textarea name="massage" class="form-control" id="massege" placeholder="Massege"></textarea>
			</div>
			<div class="offset-md-3 col-md-6">
				<input type="submit" value="Submit" name="submit" class="btn btn-primary">
			</div>
		</div>
		</form>
	</div>
</div>

<?php require_once('footer.php'); ?>