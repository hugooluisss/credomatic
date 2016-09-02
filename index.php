<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<script src="formulario.js"></script>
		<script src="md5.js"></script>
	</head>
	<body>
<?php
$key = "FPSuRTA8k73mWge8z25gUcb9M35kqqq6";
$key_id = "7129030";
$hora = time();
$orden = "Orden_".date("YmdHis");
$monto = sprintf("%0.2f", 32);
$hash = md5($orden.'|'.$monto.'|'.$hora.'|'.$key);
?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1>Credomatic</h1>
					<hr />
					<form role="form" action="https://credomatic.compassmerchantsolutions.com/api/transact.php" id="frmPago" onsubmit="javascript: return false">
						<div class="form-group">
							<label for="ccnumber">CC Number</label>
							<input type="text" class="form-control" id="ccnumber" name="ccnumber" placeholder="Número de tarjeta" value="">
						</div>
						<div class="form-group">
							<label for="ccexp">Exp</label>
							<input type="text" class="form-control" id="ccexp" name="ccexp" placeholder="MMYY" value="">
						</div>
						<div class="form-group">
							<label for="cvv">CVV</label>
							<input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" value="">
						</div>
						<div class="form-group">
							<label for="amount">Monto</label>
							<input type="text" class="form-control" id="amount" name="amount" value="<?= $monto ?>">
						</div>
						<input type="hidden" name="orderid" value="<?= $orden ?>" id="orderid">
						<input type="hidden" id="key_id" name="key_id" value="<?= $key_id ?>">
						<input type="hidden" id="hash" name="hash" value="">
						<input type="hidden" id="time" name="time" value="<?= $hora ?>">
						<input type="hidden" name="redirect" value="http://cpymes.com.mx/ruddy/paymentvalidator.php" id="redirect">
						<input type="hidden" name="account_type" value="sale" id="account_type">
						<button type="submit" class="btn btn-danger">Enviar</button>
					</form>
					<input id="key" type="hidden" value="FPSuRTA8k73mWge8z25gUcb9M35kqqq6" />
					<br />
				</div>
			</div>
		</div>
	</body>
</html>

