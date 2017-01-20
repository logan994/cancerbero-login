<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cancerbero_index</title>
	<link href="bootstrap.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>

	<section id="img-font">
	<div class="container">
		<div class="row">
                        <? if($PORTAL_MESSAGE$):?><div class="msg msg-error">$$PORTAL_MESSAGE$</div><? endif; ?>
			<div class="col-md-7 col-md-offset-3 center-button">
				<h4><span class="label label-default">Acceder usuario y contraseña</span></h4>
				<form class="form-inline" action="$PORTAL_ACTION$">
					<div class="input-group">
                                                <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
                                                <input name="zone" type="hidden" value="$PORTAL_ZONE$">
						<span for="username" class="input-group-addon">Username:</span>
                                                <input type="text" class="form-control" id="username" aria-describedby="sizing-addon1" name="auth_user">
						<span for="pwd" class="input-group-addon">Password:</span>
                                                <input type="password" class="form-control" id="pwd" aria-describedby="sizing-addon1" name="auth_pass">
					</div>
                                        <input name="accept" type="submit" value="Ingresar" class="btn btn-warning">
				</form>
			</div>
			<div class="col-md-7 col-md-offset-3 center-button">
				<h4><span class="label label-default">Acceder con Token invitado</span></h4>
				<form class="form-inline" action="$PORTAL_ACTION$">
					<div class="input-group">
                                                <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
                                                <input name="zone" type="hidden" value="$PORTAL_ZONE$">
						<span for="token" class="input-group-addon">Token:</span>
                                                <input name="auth_voucher" type="text" class="form-control" id="token" aria-describedby="sizing-addon1">
					</div>
                                        <input name="accept" type="submit" value="Ingresar" class="btn btn-warning">
				</form>
			</div>
		</div>
	</div>
	</section>

	<footer id="feature">
		<div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<h2>Cancerbero captive portal</h2>
							<p><span class="border">visit: WWW.pupilabox.net.ec for more info about this service</span></p>
						</div>
						<div class="col-md-5 col-md-offset-1">
							<img class="pull-right image-logo" src="ioet.png" width="70">
							<img class="pull-right image-logo" src="pupilabox.png" width="105">
							<img class="pull-right image-logo" src="captiveportal-kokenlogo.png" width="65">
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>
