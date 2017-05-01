<?php
	
	date_default_timezone_set('Europe/Riga');
	include 'comments_add.php';
	include 'connect_db.php';

?>
<div class="container">
	<div class="row rowc">
		<div class="col-sm-12">
		<?php echo "<form action='".setComment($dbc)."' method='POST' class='form-group'>
					<label for='comment'>Comment:</label>
					<input type='hidden' name='uid' value='".$_SESSION['user_id']."'>
					<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
					<textarea class='form-control' rows='5' id='comment' name='message'></textarea>
				<button class='btn btn-primary' name='submit'>Comment</button>
			</form>"; 
			getComments($dbc); ?>
		</div>
	</div>
</div>