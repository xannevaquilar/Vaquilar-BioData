<!DOCTYPE html>
<html>
<head>
	<title>Activity 2</title>
</head>
<link rel="stylesheet" type="text/css" href="istayl.css">
<body>

	<center>
		<form method="POST" action="bio.php">
			<table cellpadding="15" cellspacing="2">
				<tr>
					<th colspan="2" class="header">BIODATA</th>
				</tr>
				<tr>
					<td colspan="2">Name:<input class="input1" type="text" name="name"></td>
				</tr>
				<tr>
					<td colspan="2">Present Address: <input class="input1" type="text" name="present_addr"></td>
				</tr>
				<tr>
					<td colspan="2">Permanent Address: <input class="input1" type="text" name="permanent_addr"></td>
				</tr>
				<tr>
					<td>Date of Birth: <input style="width: 80%;" class="input1" type="text" name="DObirth"></td>
					<td>Religion: <input type="text" name="religion"></td>
				</tr>
				<tr>
					<td>Civil Status: <input style="width: 80%;" class="input1" type="text" name="civil_status"></td>
					<td>Age: <input type="text" name="age"></td>
				</tr>
				<tr>
					<td>Citizenship: <input style="width: 80%;" class="input1" type="text" name="citizenship"></td>
					<td>Weight: <input type="text" name="weight"></td>
				</tr>
				<tr>
					<td>Place of Birth: <input style="width: 80%;" class="input1" type="text" name="POBirth"></td>
					<td>Height: <input type="text" name="height"></td>
				</tr>
				<tr>
					<td colspan="2">Name of Father: <input class="input1" type="text" name="NOFather"></td>
				</tr>
				<tr>
					<td colspan="2">Name of Mother: <input class="input1" type="text" name="NOMother"></td>
				</tr>
				<tr>
					<td colspan="2">Address: <input class="input1" type="text" name="address"></td>
				</tr>
				<tr>
					<td colspan="2">Languages or Dialects Spoken: <input class="input1" type="text" name="languages_dialects"></td>
				</tr>
				<tr>
					<td colspan="2">Person to be notified In Case of Emergency: 
						<input class="input1" type="text" name="person_notified"></td>
				</tr>
				<tr>
					<th colspan="2" class="header2">
						EDUCATIONAL BACKGROUND:
					</th>
				</tr>
				<tr>
					<td>Elementary: <input style="width: 80%;" class="input1" type="text" name="elementary"></td>
					<td>Year Graduated: <input type="text" name="elementary_grad"></td>
				</tr>
				<tr>
					<td>High School: <input style="width: 80%;" class="input1" type="text" name="high_school"></td>
					<td>Year Graduated: <input type="text" name="high_school_grad"></td>
				</tr>
				<tr>
					<td>College: <input style="width: 80%;" class="input1" type="text" name="college"></td>
					<td>Year Graduated: <input type="text" name="college_grad"></td>
				</tr>
				<tr>
					<td colspan="2">Course: <input class="input1" type="text" name="course"></td>
				</tr>
				<tr>
					<td colspan="2">Special Skills: <input class="input1" type="text" name="skills"></td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
						<input class="button" type="submit" name="submit">
						</center>
					</td>
				</tr>
			</table>
		</form>
	</center>
	<br><br>
	<center>
		<?php
			if(isset($_POST['submit'])) {
				$name = $_POST['name'];
				$present_addr = $_POST['present_addr'];
				$permanent_addr = $_POST['permanent_addr'];
				$DObirth = $_POST['DObirth'];
				$religion = $_POST['religion'];
				$civil_status = $_POST['civil_status'];
				$age = $_POST['age'];
				$citizenship = $_POST['citizenship'];
				$weight = $_POST['weight'];
				$POBirth = $_POST['POBirth'];
				$height = $_POST['height'];
				$NOFather = $_POST['NOFather'];
				$NOMother = $_POST['NOMother'];
				$address = $_POST['address'];
				$languages_dialects = $_POST['languages_dialects'];
				$person_notified = $_POST['person_notified'];
				$elementary = $_POST['elementary'];
				$elementary_grad = $_POST['elementary_grad'];
				$high_school = $_POST['high_school'];
				$high_school_grad = $_POST['high_school_grad'];
				$college = $_POST['college'];
				$college_grad = $_POST['college_grad'];
				$course = $_POST['course'];
				$skills = $_POST['skills'];
				
			}
		?>

		<table>
			<th colspan="2">BIODATA</th>
			<tr>
				<td colspan="2"><?php echo "Name:" . $name; ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo "Present Address:" . $present_addr; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2"><?php echo "Permanent Address: " . $permanent_addr; ?></td>
			</tr>
			<tr>
				<td><?php echo "Date of Birth: " . $DObirth; ?></td>
				<td><?php echo "Religion: " . $religion; ?></td>
			</tr>
			<tr>
				<td>
					<?php echo "Civil Status: ".$civil_status; ?>
				</td>
				<td>
					<?php echo "Age: ".$age; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo "Citizenship: ".$citizenship; ?>
				</td>
				<td>
					<?php echo "Weight: ".$weight; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo "Place of Birth: ".$POBirth; ?>
				</td>
				<td>
					<?php echo "Height: ".$height; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo "Name of Father: ".$NOFather; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo "Name of Mother: ".$NOMother; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo "Address: ".$address; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo "Languages or Dialects Spoken: ".$languages_dialects; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo "Person to be notified In Case of Emergency: ".$person_notified; ?>
				</td>
			</tr>
			<th class="header2" colspan="2">EDUCATIONAL BACKGROUND: </th>
			<tr>
				<td>
					<?php echo "Elementary: ".$elementary; ?>
				</td>
				<td>
					<?php echo "Year Graduated: ".$elementary_grad; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo "High School: ".$high_school; ?>
				</td>
				<td>
					<?php echo "Year Graduated: ".$high_school_grad; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo "College: ".$college; ?>
				</td>
				<td>
					<?php echo "Year Graduated: ".$college_grad; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo "Course: ".$course; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo "Special Skills: ".$skills; ?>
				</td>
			</tr>
		</table>
	</center>

<!-- <tr>
				<td colspan="2">
					<?php  ?>
				</td>
			</tr> -->

</body>
</html>