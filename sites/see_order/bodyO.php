<form action="../../components/addComment.php" method="POST">
	<div id="site" class="container-fluid">
		<div class="row">

			<div class="header-main">
				<p id="loginName">Witaj: <i class="orange"><?php echo strtoupper($_SESSION['userName']) ?></i></p>
				<p id="logout"><a href="../../components/logout.php">Wyloguj</a></p>	
			</div>

			<br><hr><br>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Zobacz wersję: 						
						<select name="orderVersion" id="orderVersion">
							<?php getVersion(); ?>
						</select></p>
					</div>
				</div>
			</div>

			<br><hr><br>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php getOrderData(); ?>
					</div>
				</div>
			</div>

			<br><hr><br>

			<div class="container" >
				<div class="row">
					<div class="col-md-12">
						<p><i class="fa fa-television" aria-hidden="true"></i><i class="orange"> Sprzęt odebrany:</i></p>
						<div style="max-height: 400px; overflow-y: scroll; overflow-x: hidden; margin-top: 20px;">	
							<?php getHardwareData(); ?>
						</div>

						<br>

						<div class="row">
							<div class="neworderleft col-md-6">
								<?php getDesc(); ?>

								<div class="col-md-6">
									<div class="buttons" id="backButton"><< Powrót</div>
								</div>

								<div class="col-md-6">
									<div class="buttons" id="editButton">Edytuj >></div>
								</div>
							</div>

							<div class="neworderright col-md-6" style="text-align: center;">
								<div class="row">
									<div class="col-md-12"><p class="addressLabel">Sprzęt przypisany do:</p>
										<select id="changeWorker">
											<?php getEmpl(); ?>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12"><p class="addressLabel">Status zlecenia:</p>
										<select id="changeStatus">
											<?php getStatus(); ?>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<br><hr><br>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p><i class="fa fa-comments" aria-hidden="true"></i><i class="orange"> Komentarze do zlecenia: </i></p>
							<div style="max-height: 400px; overflow-y: scroll; overflow-x: hidden;">	
								<?php getComm(); ?>
							</div>
							<br><hr>
								<div class="row">
									<div class="neworderleft col-md-12" style="margin-top: 10px;">

										<div class="row">
											<div class="col-md-12">
												<br><p class="addressLabel">Treść: </p>
												<textarea name="sendComment"></textarea>
											</div>
											<br><input type="submit" class="buttons" value="Dodaj komentarz >> ">
											<br><br>
										</div>
									</div>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>