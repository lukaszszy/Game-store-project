<link rel="stylesheet" href="assets/css/styleRegisterForm.css" type="text/css" />
				<div id="registerBox">
{if $info != ""}
				Popraw następujące błędy: {$info}
{/if}
				<form method="POST" action="register.php">
					<div>
						<input id="name" name="name" type="text" placeholder="Login..." />
						<label for="name">Login</label>
					</div>
					<div>
						<input id="email" name="email" type="email" placeholder="E-mail..."/>
						<label for="email">Email</label>
					</div>
					<div>
						<input id="password" name="password" type="password" placeholder="Hasło..."/>
						<label for="password">Hasło</label>
					</div>
					<div>
						<input id="cpassword" name="cpassword" type="password" placeholder="Hasło..."/>
						<label for="cpassword">Potwierdź hasło</label>
					</div>
					<div id="termsCheckbox">
						<input type="checkbox" name="agree" id="agree"/>
						<label for="agree">Przeczytałem i akceptuje <a href="#">regulamin</a>.</label>
					</div>
					<div style="clear:both;"></div>
					<div>
						<input id="securityq" name="securityq" type="text"placeholder="Podaj wynik działania...">
						<label for="securityq">Ile to 2+2?</label>
					</div>
					<button type="submit" name="register" class="confirmationButton">Zarejestruj</button>
				</form>
				</div>

			<div style="clear:both;"></div>
