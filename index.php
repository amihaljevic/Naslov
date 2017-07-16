<?php include_once 'konfiguracija.php'; ?>

<!DOCTYPE html>
<html lang="en">
  
  <?php include_once 'head.php'; ?>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">

          <?php 

            $izraz = $veza -> prepare("SELECT * FROM Naslov");
            $izraz -> execute();
            $rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);

            foreach($rezultati as $r) :

          ?>

            <h1 class="cover-heading"><?php echo $r->naslov; ?></h1>
            <p class="lead"><?php echo $r->podnaslov; ?></p>

          <?php endforeach; ?>

            <p class="lead">
              <a href="dodajNaslov.php" class="btn btn-lg btn-default">Dodaj naslov</a>
              <a href="azurirajNaslov.php?id=<?php echo $r->id ?>" class="btn btn-lg btn-default">Ažuriraj naslov</a>
              <a href="obrisi.php?id=<?php echo $r->id; ?>" class="btn btn-lg btn-default">Obriši naslov</a>
            </p>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
