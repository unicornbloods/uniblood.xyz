<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Home - RNG</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" content="Uniblood RNG website homepage">
		<link href="main.css" rel="stylesheet" type="text/css">
		<style>
			.error {color: #FF0000;}
		</style>
	</head>

	<body>
		<?php require 'php/project_selector.php'; ?>

		<P>
			Input projects to choose from seperated by commas then press choose.
		</p>


		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Projects: <input type="text" name="projects"> <span class="error">* <?php echo $projectsErr;?> </span> <br>
			<input type="submit" name="submit" value="Choose">
		</form>
		<span><?php echo $projects;?></span>
		

	</body>
</html>