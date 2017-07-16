<?php

	include_once 'konfiguracija.php';
	include_once 'azuriraj.php';

?>
<!DOCTYPE html>
	<html>
	
		<?php include_once 'head.php'; ?>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<form action="azuriraj.php" method="POST">
						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
							<label for="naslov">Naslov</label>
							<input type="text" name="naslov" id="naslov" class="form-control" placeholder="Naslov" value="<?php echo $Naslov->naslov; ?>" required>

							<label for="podnaslov">Podnaslov</label>
							<input type="text" name="podnaslov" id="podnaslov" class="form-control" placeholder="Podnaslov" value="<?php echo $Naslov->podnaslov; ?>" required>

							<input type="submit" class="button btn btn-primary" value="Ažuriraj naslov">
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	</html>
