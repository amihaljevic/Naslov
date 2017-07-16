<?php include_once 'konfiguracija.php'; ?>

	<!DOCTYPE html>
	<html>
	
		<?php include_once 'head.php'; ?>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<form action="dodaj.php" method="POST">
						<div class="form-group">
							<label for="naslov">Naslov</label>
							<input type="text" name="naslov" id="naslov" class="form-control" placeholder="Naslov" required>

							<label for="podnaslov">Podnaslov</label>
							<input type="text" name="podnaslov" id="podnaslov" class="form-control" placeholder="Podnaslov" required>

							<input type="submit" class="button btn btn-primary" value="Dodaj naslov">
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	</html>
