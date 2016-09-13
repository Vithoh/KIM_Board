<div id="signup">	
	<form method="post" action="" name="login">
		<h1>Einloggen</h1>
		<hr>
			<div class="center">
				<div layout="row">
				<label id="icon"><i class="material-icons md-light">email</i></label>
					<md-input-container flex="80">
						<label>E-Mail</label>
						<input required name="MAIL" ng-model="project.email">
						<div ng-messages="projectForm.email.$error">
							<div ng-message="required">Eingabe benötigt.</div>
						</div>
					</md-input-container>
				</div>
				
				<div layout="row">
				<label id="icon"><i class="material-icons md-light">vpn_key</i></label>
					<md-input-container flex="80">
						<label>Passwort</label>
						<input required name="password" ng-model="project.password" type="password">
						<div ng-messages="projectForm.password.$error">
							<div ng-message="required">Eingabe benötigt.</div>
						</div>
					</md-input-container>
				</div>

				<!--<div class="errorMsg"><?php echo $errorMsgReg; ?></div>-->

				<md-button class="md-raised md-primary login" type="submit" name="loginSubmit" value="login">Einloggen</md-button>
				
				<md-button class="md-raised register" ng-click="goto('register')">Registrieren</md-button>
				
			</div>
		</form>
</div>


