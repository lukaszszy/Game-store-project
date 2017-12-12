			<div id="content">
{if $info != ""}
				Popraw następujące błędy: {$info}
{/if}
				<form method="POST" action="register.php">
					{$info}
					<div>
						<input id="name" name="name" type="text" />
						<label for="name">Login</label>
					</div>
					<div>
						<input id="email" name="email" type="email" />
						<label for="email">Email</label>
					</div>
					<div>
						<input id="password" name="password" type="password" />
						<label for="password">Hasło</label>
					</div>
					<div>
						<input id="cpassword" name="cpassword" type="password" />
						<label for="cpassword">Potwierdź hasło</label>
					</div>
					<div>
						<input type="checkbox" name="agree" id="agree" />
						<label for="agree">Przeczytałem i akceptuje <a href="#">regulamin</a>.</label>
					</div>
					<div>
						<input id="securityq" name="securityq" type="text">
						<label for="securityq">Ile to 2+2?</label>
					</div>
					<button type="submit" name="register">Zarejestruj</button>
				</form>
			</div>
			<div style="clear:both;"></div>