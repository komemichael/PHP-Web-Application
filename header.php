<header  id="head">
				<nav >
					<div class="w3-bar">
					  <a href="#" id="sidebaropener" class="w3-bar-item w3-button w3-hover-shadow">
					  	<strong><span class="glyphicon glyphicon-menu-hamburger"></span></strong>
					  </a>
					  <a href="index.php" id="home" class="w3-bar-item w3-button w3-hover-shadow">
					  	<strong><span class="glyphicon glyphicon-home"></span></strong>
					  </a>
					  <a href="guys.html#!kome" class="w3-bar-item w3-button w3-hover-shadow">
					  	<span class="w3-hide-small"><strong>Kome</strong></span>
					  	<span class="w3-hide-medium w3-hide-large" ><img src="images/kome.jpg" style=" height:30px; width: 40px" class="w3-round-xxlarge"></span>
					  </a>
					  <a href="guys.html#!jeremys" class="w3-bar-item w3-button w3-hover-shadow">
					  	<span class="w3-hide-small"><strong>Jeremy</strong></span>
					  	<span class="w3-hide-medium w3-hide-large" ><img src="images/jeremys.jpg" style=" height:30px; width: 40px" class="w3-round-xxlarge"></span>
					  </a>
					  <div id="nav-elem">
						  <a href="guys.html#!alex" class="w3-bar-item w3-button w3-hover-shadow" id="nav-elem">
						  	<span class="w3-hide-small"><strong>Alex</strong></span>
						  	<span class="w3-hide-medium w3-hide-large" ><img src="images/alex.jpg" style=" height:30px; width: 40px" class="w3-round-xxlarge"></span>
						  </a>
						  <a href="guys.html#" class="w3-bar-item w3-button w3-hover-shadow">
						  	<span class="w3-hide-small"><strong>Hans</strong></span>
						  	<span class="w3-hide-medium w3-hide-large" ><img src="images/hans.jpg" style=" height:30px; width: 40px" class="w3-round-xxlarge"></span>
						  </a>
						  <a href="#" class="w3-bar-item w3-button w3-hover-shadow">
						  	<span class="w3-hide-small"><strong>JeremyD</strong></span>
						  	<span class="w3-hide-medium w3-hide-large" ><img src="images/jeremyd.jpg" style=" height:30px; width: 40px" class="w3-round-xxlarge"></span>
						  </a>
						  <a href="#" class="w3-bar-item w3-button w3-hover-shadow">
						  	<span class="w3-hide-small"><strong>Mark</strong></span>
						  	<span class="w3-hide-medium w3-hide-large" ><img src="images/kome.jpg" style=" height:30px; width: 40px" class="w3-round-xxlarge"></span>
						  </a>
						</div>
					  <a href="#" class="w3-bar-item w3-button w3-hover-shadow" id="nav-more" ">
					  	<strong>More <span class="glyphicon glyphicon-option-vertical"></span></strong>
					  </a>

					  <div class="w3-right">
					  	<a href="#" onclick="$('#loginmodal').show();" class="w3-bar-item w3-button w3-hover-shadow">
					  		<span class="glyphicon glyphicon-log-in"></span>
					  	</a>
					  	<div id="loginmodal" class="w3-modal">
					  		<div class="w3-modal-content w3-display-container w3-round-large">
					  			<span class="w3-button w3-red w3-display-topright" 
		        					onclick="document.getElementById('loginmodal').style.display='none'">
		        					&times;
		        				</span>
					  			<?php include 'login.php' ?>
					  		</div>
					  	</div>
					  	<div id="search" style="display: none;" class="w3-hide-small" onmouseleave="this.style.display='none'">
					  		<input type="text" class="w3-round" >
					  	</div>
					  	<a href="#" onclick="document.getElementById('createuser').style.display='block'" class="w3-bar-item w3-button w3-hover-shadow">
					  		<span class="glyphicon glyphicon-user"></span>
					  	</a>
					  	<a href="#" onmouseover="document.getElementById('search').style.display='inline-block'" class="w3-bar-item w3-button w3-hover-shadow">
					  		<span class="glyphicon glyphicon-search"></span>
					  	</a>
					  </div>
					</div>
				</nav>

				<div class="w3-modal" id="createuser">
					<div class="w3-modal-content w3-animate-zoom w3-card-4 w3-display-container w3-round-large">
						<?php include 'createuser.php' ?>
					</div>
				</div>
			</header>