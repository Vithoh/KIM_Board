<div id="signup">	
	<form method="post" action="" name="signup">
		<h1>Registrieren</h1>
		<hr>
			<div class="center">

				<div layout="row" >

					<label id="icon"><i class="material-icons md-light">email</i></label>

						<md-input-container flex="80">

							<label>E-Mail</label>
							<input required name="emailReg" ng-model="project.email" autocomplete="off">

							<div ng-message="required">Eingabe benötigt.</div>

						</md-input-container>
				</div>
				
				<div layout="row">

					<label id="icon"><i class="material-icons md-light">vpn_key</i></label>

					<md-input-container flex="80">

							<label>Passwort</label>
							<input required name="passwordReg" ng-model="project.password" type="password" autocomplete="off">

							
							<div ng-message="required">Eingabe benötigt.</div>

					</md-input-container>
				</div>
				
				<div layout="row">

				<label id="icon"><i class="material-icons md-light">vpn_key</i></label>

						<md-input-container flex="80">

							<label>Passwort bestätigen</label>
							<input required name="re-passwordReg" ng-model="project.re_password" type="password" autocomplete="off">

							
								<div ng-message="required">Eingabe benötigt.</div>

						</md-input-container>
				</div>

				<!--<div class="errorMsg"><?php echo $errorMsgReg; ?></div> -->

				<md-button class="md-raised md-primary register" type="submit" name="signupSubmit" value="Signup">BESTÄTIGEN</md-button>
				
				<md-button class="md-raised register" ng-click="goto('login')">Einloggen</md-button>
			</div>
	</form>
</div>

