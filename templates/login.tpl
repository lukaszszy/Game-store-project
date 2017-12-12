<link rel="stylesheet" href="assets/css/styleLoginForm.css" type="text/css" />
			<div id="content">
					<div id="loginBox">
	{if $info != ""}
					Popraw następujące błędy: {$info}
	{/if}
					<form method="POST" action="login.php">
						{$info}
						<div>
							<input id="name" name="name" type="text" placeholder="Login...">
							<label for="name">Login</label>
						</div>
						<div>
							<input id="password" name="password" type="password" placeholder="Hasło...">
							<label for="password">Hasło</label>
						</div>
						<div>
							<input id="securityq" name="securityq" type="text" placeholder="Podaj wynik działania">
							<label for="securityq">Ile to 2+2?</label>
						</div>
						<button type="submit" class="confirmationButton" name="register">Login</button>
					</form>
				</div>
			</div>
			<div style="clear:both;"></div>
