<html>
<head>
	<title>Zoo In Your Woo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@200&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="script.js" type="text/javascript" ></script>
	<script src="animalsJSON.json" type="text/javascript" ></script>

</head>

<body>


	<!-- main slider images or not slider just image -->

	<div class = "big_main_window"> 

		<!-- Logo -->
		<div class = "logo_on_main"><img id = "main_logo_icon" src = "https://cdn2.iconfinder.com/data/icons/cutecritters/t9tuqui_trans.png"> </div>
		
		<!-- Buttons -->
		<div class = "buttons_after_logo"> 
			<a class = "hvr-shutter-out-vertical" id = "a_link" href = "/LoginAndSignUpPage/SignUp.php">SIGN UP</a>
			<a class = "hvr-shutter-out-vertical" id = "a_link" href = "/LoginAndSignUpPage/login.php">LOG IN</a>
			<a class = "hvr-shutter-out-vertical" id = "a_link" href = "#body_block">ANIMALS</a>
			<a class = "hvr-shutter-out-vertical" id = "a_link" href = "#our_mission_teleport">OUR MISSION</a>
		</div>

		<div class = "buttons_after_logo_buttons">
			<a class = "hvr-shutter-out-vertical" href = "/DonateAndSafe/donation.php" id = "a_link" >DONATE & SAFE </a>
			<a class = "hvr-shutter-out-vertical" href="/EventPage/events.php" id = "a_link">EVENTS</a>

		</div>
		

		<div class = "text_in_bottom_main"> 
			<div id = "bottom_text_main">Look into wild eyes</div>
			<div id = "main_vertical_line"></div>
			<div id = "bottom_text_main_2">Closed</div>
		 </div>

	</div>


	<!--      User/Guest/Admin        -->
	<div class = "UGA_place">

		<?php 
			if(isset($_GET['name'])){

				if(strpos($_GET['name'], "Admin")){
					echo '<div class = "UGA_block"><img class = "UGA_logo admin" src="https://cdn2.iconfinder.com/data/icons/veterinary-line-fluffy-pet/512/First_aid_pet-128.png"><div id = "centered_text">YOU ARE ADMIN<a class = "hvr-shutter-out-vertical admin_page_css" href="/AdminPage/adminPage.php" target="_blank" >GO TO ADMIN PAGE</a></div><a class = "exit_link" href="/index.php">exit</a></div>';
				}
				
				else if(strpos($_GET['name'], "User")){
					echo '<div class = "UGA_block">';

					echo '<img class= "UGA_logo user" src="https://cdn3.iconfinder.com/data/icons/pirate-outline-4/340/whale_ocean_sea_nature_animal_underwater_aquatic-128.png">';

					echo '<div id = "centered_text">Welcome ' . $_GET['name'] . '</div>';

					echo '<a class = "exit_link"  href="/index.php">exit</a></div>';
				}

				else{
					echo '<div class = "UGA_block">';

					echo '<img class= "UGA_logo user" src="https://cdn0.iconfinder.com/data/icons/business-and-education-1/512/29_idea_share_transfer_staff-128.png">';

					echo '<div id = "centered_text">Welcome ' . $_GET['name'] . '</div>';

					echo '<a class = "exit_link"  href="/index.php">exit</a></div>';
				}

			}
			else{
				echo '<div class = "UGA_block" id = "guest_image"><img class = "UGA_logo guest" src="https://cdn4.iconfinder.com/data/icons/zoo-line-welcome-to-zootopia/512/parrot-128.png"><div id = "centered_text">YOU ARE GUEST</div></div>'; 
			}

		?>

	</div>




	<div class = "space_between_main_block_and_body">

		<div class = "logo_on_main" style="padding-top: 25px;"> <img id = "main_logo_icon" src="https://cdn3.iconfinder.com/data/icons/animal-flat-colors/64/Lion-128.png"></div>

		<div class = "little_words">LET'S MEET OUR FRIENDS <hr id = "little_words_line"></div>

	</div>

	<button onclick='document.body.scrollTo({top: 0, behavior: "smooth"});' id="myBtn"></button>
	<div id = "body_block" class = "body_block">
		
		<!-- The blocks which will create the group of animal main block-->
		<div class = "big_block cats">

			<!-- background image of certain group -->

			<div id = "animal_group_text"> WILD CATS </div>
			<div class = "animal_group_description_text"> Lions, tigers, cheetahs, jaguars, pumas, and three kinds of
leopards—the big cats are magnifi cent predators that roam every
continent except Australia and Antarctica. </div>

		</div>

		<div class = "big_block bears">

			<!-- background image of certain group -->

			<div id = "animal_group_text"> BEARS </div>
			<div class = "animal_group_description_text">Bears have large bodies, stocky legs, a long snout, shaggy hair, paws with claws, and a short tail. </div>

		</div>

		<div class = "big_block penguins">

			<!-- background image of certain group -->

			<div id = "animal_group_text"> PENGUINS </div>
			<div class = "animal_group_description_text"> Penguins are very funny animals. They are birds that cannot fly, but love to swim!</div>
		</div>

	</div>

	<div class="body_block">
			<div class = "big_block birds">

			<!-- background image of certain group -->

			<div id = "animal_group_text"> BIRDS </div>
			<div class = "animal_group_description_text"> A bird cal fly higher, further, and faster than any other animal </div>
		</div>


		<div class = "big_block monkeys">

			<!-- background image of certain group -->

			<div id = "animal_group_text"> MONKEYS </div>
			<div class = "animal_group_description_text"> Monkeys are very vocal animals and that is their name way of communicating with each other.  </div>
		</div>


		<div class = "big_block snakes">

			<!-- background image of certain group -->

			<div id = "animal_group_text"> SNAKES </div>
			<div class = "animal_group_description_text"> Snakes are masters of disguise, skilled hunters, and champion eaters.  </div>
		</div>
	</div>


	<div class = "space_between_main_block_and_body">

		<div class = "logo_on_main" style="padding-top: 25px;"> <img id = "main_logo_icon" src="https://cdn3.iconfinder.com/data/icons/animal-flat-colors/64/koala-128.png"></div>

		<div class = "little_words">WANNA SEE MORE? <hr id = "little_words_line"></div>

	</div>


	<!-- the block only for user who wants to see more about zoo animals-->
	<div class = "user_interface_block">
		

		<div class = "interaction_board">
			
			<div class = "fill_fields">

				<form method="POST">
				
				<div class = "left_content">Select Animal</div>
				<select name="Animal_name">
					<?php 
						$conn = oci_connect('SYSTEM', '123', 'localhost/orcl');
						$stid = oci_parse($conn, 'SELECT DISTINCT ANIMAL_NAME FROM ANIMALS ORDER BY ANIMAL_NAME');
						$exe = oci_execute($stid);
						if(!$exe){
							someError();
						}

						while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS) ) {
							echo "<option value ='" . $row['ANIMAL_NAME'] . "'>" . $row['ANIMAL_NAME'] . "</option>";
						}

						oci_close($conn);

					?>
				</select>

				<div class = "left_content">Select Zoo</div>
				<select name="Zoo_name">
					<?php 
						$conn = oci_connect('SYSTEM', '123', 'localhost/orcl');
						$stid = oci_parse($conn, 'SELECT DISTINCT ADDRESS FROM ZOO');
						$exe = oci_execute($stid);
						if(!$exe){
							someError();
						}

						while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS) ) {
							echo "<option value ='" . $row['ADDRESS'] . "'>" . $row['ADDRESS'] . "</option>";
						}

						oci_close($conn);

					?>


				</select>

				<div class = "left_content">Order By</div>
				<select name="OrderBy">
					<option value = "ANIMAL_ID">ID</option>
					<option value = "AGE">Age</option>
					<option value = "ANIMAL_NAME">Name</option>
				</select>

				<select name="AscDesc">
					<option value = "Ascending">Ascending</option>
					<option value = "Descending">Descending</option>
				</select>


				<?php 

				if(isset($_GET['name'])){
					if(strpos($_GET['name'], "Staff") || strpos($_GET['name'], "Admin")){


						echo '<div class = "left_content">Join Staff And Zoo</div>';
						echo '<input id="staff_zoo_input" min=0 type="number" name= "get_zoo_id_join"  placeholder="ZOO ID">';
						echo '<input id="staff_zoo_join" type ="submit" name = "JOIN" value="JOIN(ONLY ZOO ID)">';


					}
				}
					

				if(isset($_POST['JOIN'])){
					$zooooid  = $_POST['get_zoo_id_join'];
					$conn = oci_connect('SYSTEM', '123', 'localhost/orcl');
					$stid = oci_parse($conn, "SELECT S.ZOOID, S.FIRST_NAME, S.LAST_NAME, S.STAFF_EMAIL, Z.ADDRESS, Z.ZOO_EMAIL, Z.ZOO_NAME FROM STAFF_TABLE S JOIN ZOO Z ON(S.ZOOID = Z.ZOOID) WHERE Z.ZOOID = " . $zooooid);

					$exe = oci_execute($stid);

					global $tio;

					$tio = "";

					$tio .="<table border='1'>\n";
					$ncols = oci_num_fields($stid);

					$tio .= "<tr class = 'column_name_row'>\n";
					for ($i = 1; $i <= $ncols; $i++) {
					    $column_name  = oci_field_name($stid, $i);
					    $tio .= "<td>$column_name</td>\n"; 
					}
					$tio .= "</tr>\n";

					while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS) ) {
		    			$tio .= "<tr>\n";
		    			foreach ($row as $item) {
	    					$tio .= "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
		    			}
		    			$tio .= "</tr>\n";
					}
					$tio .= "</table>\n";

				}


				?>


				<input id = "animal_find_input" type="submit" name="animal_find" value = "Find animal">

				<input id = "animal_find_input" type="submit" name="give_all" value = "Select all">
				
				<?php
				if(isset($_GET['name'])){
					if(strpos($_GET['name'], "Staff") || strpos($_GET['name'], "Admin")){
						echo "<div class = 'left_content'>ROLLUP OR CUBE (Food/Gen w Ani.)</div>";
						echo "<select name='foodOrGen'>";
							echo "<option value='FOOD_ID'>FOOD ID</option>";
							echo "<option value='GENUS'>GENUS</option>";
						echo "</select>";
						echo "<select name='RollupOrCube'>";
							echo "<option value='ROLLUP'>ROLLUP</option>";
							echo "<option value='CUBE'>CUBE</option>";
						echo "</select>";

						echo '<input id="roll_cube" type ="submit" name = "rollup_cube" value="ROLLUP/CUBE">';
					}

					if(isset($_POST['rollup_cube'])){
						$foodOrGen = $_POST['foodOrGen'];
						$RollupOrCube = $_POST['RollupOrCube'];

						$conn = oci_connect('SYSTEM', '123', 'localhost/orcl');
						$query = "SELECT ";

						if($foodOrGen == "FOOD_ID"){
							$query .= "NVL(". $foodOrGen . ", -1) AS FOOD_ID, NVL(GENUS, 'NOT FOUND') AS GENUS, TRUNC(AVG(AGE),2) AS AVGAGE FROM ANIMALS GROUP BY " . $RollupOrCube . "(FOOD_ID, GENUS)";
						}
						else{
							$query .= "NVL(" . $foodOrGen . ",'NOT FOUND') AS GENUS,CASE WHEN FOOD_ID IS NULL THEN -1 ELSE FOOD_ID END AS FOOD_ID, TRUNC(AVG(AGE),2) AS AVGAGE FROM ANIMALS GROUP BY " . $RollupOrCube . "(GENUS, FOOD_ID)";
						}
						//echo $query;
						$stid = oci_parse($conn, $query);

						$exe = oci_execute($stid);

						global $mio;

						$mio = "";

						$mio .="<table border='1'>\n";
						$ncols = oci_num_fields($stid);

						$mio .= "<tr class = 'column_name_row'>\n";
						for ($i = 1; $i <= $ncols; $i++) {
						    $column_name  = oci_field_name($stid, $i);
						    $mio .= "<td>$column_name</td>\n"; 
						}
						$mio .= "</tr>\n";

						while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS) ) {
			    			$mio .= "<tr>\n";
			    			foreach ($row as $item) {
		    					$mio .= "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
			    			}
			    			$mio .= "</tr>\n";
						}
						$mio .= "</table>\n";

					}
				}
					
				?>


				</form>

				<?php 
					if(!isset($_GET['name'])){
						echo "<a href = 'http://localhost/LoginAndSignUpPage/login.php' class = 'go_login'>To select or find please log in or sign up</a>";

							
					}
					else if(strpos($_GET['name'], "User") || strpos($_GET['name'], "Staff") || strpos($_GET['name'], "Admin")){
					
						if($_SERVER["REQUEST_METHOD"] == 'POST'){

							$conn = oci_connect('SYSTEM', '123', 'localhost/orcl');

							if(isset($_POST['give_all'])){
								$stid = oci_parse($conn, "SELECT IMAGE, ANIMAL_NAME, AGE, GENDER, GENUS FROM ANIMALS ORDER BY ANIMAL_ID");
								createJson($stid);

								// outputTheAnimals($stid);
							}

							else if(isset($_POST['animal_find'])){
								$selected_animal = $_POST['Animal_name'];
								$selected_zoo_name = $_POST['Zoo_name'];
								$selected_order = $_POST['OrderBy'];
								$ascOrDesc = $_POST['AscDesc'];

								$query = "SELECT * FROM ANIMALS WHERE ANIMAL_NAME LIKE '" . $selected_animal . "' AND ZOOID = (SELECT ZOOID FROM ZOO WHERE ADDRESS LIKE '" . $selected_zoo_name . "') ORDER BY " . $selected_order . " " . ($ascOrDesc == "Ascending" ? "ASC" : "DESC");

								$stid = oci_parse($conn, $query);
								createJson($stid);
							}

						}
					}
				

					function createJson($stid){
						$response = array();
						$posts = array();
						$result = oci_execute($stid);
						if(!$result){
							someError();
						}
						while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)){
							$image = $row['IMAGE'];
							$a_name = $row['ANIMAL_NAME'];
							$age = $row['AGE'];
							$gender = $row['GENDER'];
							$genus = $row['GENUS'];

							$posts[] = array('image'=>$image, 'animal_name'=>$a_name, 'age'=>$age, 'gender'=>$gender, 'genus'=>$genus);
						}

						//$response['posts'] = $posts;
						$fp = fopen('animalsJSON.json', 'w');
						fwrite($fp, json_encode($posts));
						fclose($fp);
					}

					function someError(){
						echo "<div class = 'animal_output'>You've done something wrong!<div>";
						die(2);
					}

				?>


			</div>

			<div id = "animal_output">

			<?php 
				if(isset($_POST['JOIN'])){
					echo $tio;
				}

				if(isset($_POST['rollup_cube'])){
					echo $mio;
				}
			?>



				<script>
					
					<?php 
						if(!isset($_GET['name']) || isset($_POST['JOIN']) || isset($_POST['rollup_cube'])){
							echo "dontMove";
						}
						else{
							echo "";
							
						}
					?>fetch('animalsJSON.json').then(response => response.json())
						.then(function(data) {
							appendData(data);
						});
					var image;
					var name;
					var gender;
					var age;
					var genus;
					function appendData(data){
						for(var i = 0; i < data.length; i++){

							i_image = data[i].image;
							i_name = data[i].animal_name;
							i_gender = data[i].gender;
							i_age = data[i].age;
							i_genus = data[i].genus;

							var image_finder = "<div class='animal_image'><img class ='animal_image_image' src= '" + i_image +"'></div>";


							document.getElementById('animal_output').innerHTML += "<div class='animal_block'>" + image_finder + "<div  class='right_block_side'><div class='animal_name'>Animal: " + i_name + "</div><div class='animal_gender'>Gender: " + i_gender + "</div><div class='animal_age'>Age: " + i_age + "</div><div class='animal_genus'>Genus: " +  i_genus + "</div></div></div>";
						}
						
					}


				</script>


			</div>
				
		</div>



	</div>

	<div class = "space_between_main_block_and_body">

		<div class = "logo_on_main" style="padding-top: 25px;"> <img id = "main_logo_icon" src="https://cdn3.iconfinder.com/data/icons/animal-flat-colors/64/elepant-128.png"></div>

		<div id = "our_mission_teleport" class = "little_words">OUR MISSION <hr id = "little_words_line"></div>

		<div class = "our_mission_text">Our mission: save the rare sort of animals from poachers, give love and take care our little friends.</div>

	</div>

	<div class = "sticky_end">
		<div class = "SMM">
			<div class = "social_media"><img src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-64.png"></div>
			<div class = "social_media"><img class = "social_media" src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/linkedin-64.png"></div>
			<div class = "social_media">
			<img class = "social_media" src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/instagram-64.png"></div>
			<div class = "social_media"><img class = "social_media" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-64.png"></div>
			<div class = "social_media"><img class = "social_media" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/youtube_circle-64.png"></div>
			<div class = "social_media"><img class = "social_media" src="https://cdn0.iconfinder.com/data/icons/social-media-2092/100/social-56-64.png"></div>
			
			
		</div>

		<div id = "bottom_vertical_line"></div>
		<div class = "About">About
				<div class = "About_text">
			We are group of people who are making animals life better and safe their life. We work 9:00AM till 6:00PM. Tickets only available at enter to each zoo.

			<div>©Desgined by Toleubay Alikhan</div>
		</div></div>

	</div>



</body>

</html>

