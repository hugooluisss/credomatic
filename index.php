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
					<form role="form" action="https://credomatic.compassmerchantsolutions.com/api/transact.php" id="frmPago">
						<div class="form-group">
							<label for="key_id">KEY_ID</label>
							<input type="text" class="form-control" id="key_id" name="key_id" placeholder="" value="<?= $key_id ?>">
						</div>
						<div class="form-group">
							<label for="hash">HASH</label>
							<input type="text" class="form-control" id="hash" name="hash" placeholder="" value="<?= $hash ?>">
						</div>
						<div class="form-group">
							<label for="time">Time</label>
							<input type="text" class="form-control" id="time" name="time" placeholder="" value="<?= $hora ?>">
						</div>
						<div class="form-group">
							<label for="ccnumber">CC Number</label>
							<input type="text" class="form-control" id="ccnumber" name="ccnumber" placeholder="4111111111111111" value="4111111111111111">
						</div>
						<div class="form-group">
							<label for="ccexp">Exp</label>
							<input type="text" class="form-control" id="ccexp" name="ccexp" placeholder="MMYY" value="1219">
						</div>
						<div class="form-group">
							<label for="cvv">CVV</label>
							<input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" value="999">
						</div>
						<div class="form-group">
							<label for="amount">Monto</label>
							<input type="text" class="form-control" id="amount" name="amount" readonly="true" value="<?= $monto ?>">
						</div>
						<div class="form-group">
							<label for="type">Tipo de transacción</label>
							<select id="account_type" name="account_type" class="form-control">
								<option value="auth">auth</option>
								<option value="sale">sale</option>
								<option value="credit">credit</option>
							</select>
						</div>
						<div class="form-group">
							<label for="checkname">Check Name</label>
							<input type="text" class="form-control" id="checkname" name="checkname" placeholder="" value="">
						</div>
						<div class="form-group">
							<label for="checkaba">Checkaba</label>
							<input type="text" class="form-control" id="checkaba" name="checkaba" placeholder="" value="">
						</div>
						<div class="form-group">
							<label for="checkaccount">Checkaccount</label>
							<input type="text" class="form-control" id="checkaccount" name="checkaccount" placeholder="" value="">
						</div>
						<div class="form-group">
							<label for="account_holder_type">account_holder_type</label>
							<select id="account_holder_type" name="account_holder_type" class="form-control">
								<option value="business">Bussines</option>
								<option value="personal">Personal</option>
							</select>
						</div>
						<div class="form-group">
							<label for="account_type">account_type</label>
							<select id="account_type" name="account_type" class="form-control">
								<option value="checking">checking</option>
								<option value="savings">savings</option>
							</select>
						</div>
						<input type="hidden" name="orderid" value="<?= $orden ?>" id="orderid">
						<input type="hidden" name="redirect" value="http://cpymes.com.mx/ruddy/paymentvalidator.php" id="redirect">
						<button type="submit" class="btn btn-danger">Enviar</button>
					</form>
					<br />
				</div>
			</div>
		</div>
	</body>
</html>

