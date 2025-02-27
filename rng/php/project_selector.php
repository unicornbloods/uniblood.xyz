<?php

	// define variables and set empty values
	$projectsErr = "";
	$projects = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["projects"])) {
		  $projectsErr = "Projects list is required";
		} else {
		  $projects = choose_random($_POST["projects"]);
		}
		
	}

	function choose_random($data) {
		// Always be safe with your inputs kids.
		$data = sanitize_input($data);
		// Split up the inputted options for selection.
		$pieces = explode(",", $data);
		// Start at -1 because we still want to be able to get the first option.
		$counter = -1;

		// Count number of options inputted
		foreach($pieces as $i) { $counter += 1; }

		// Pick random option.
		$data = $pieces[rand(0,$counter)];
		// Remove possible white space from ends out output.
		$data = trim($data);

		return $data;
	}

	function sanitize_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>