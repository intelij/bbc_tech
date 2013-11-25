<?php

require_once('includes/constants.php');
require_once('includes/conn.php');
require_once('includes/functions.php');



$html = '';
$html .= '<li class="result">';
$html .= '<a target="_blank" href="urlString">';
$html .= '<h3>nameString</h3>';
$html .= '</a>';
$html .= '</li>';


$search_string = database::grabSearchString($_POST['query']);

	
// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	$result = mysql_query('SELECT * FROM movie WHERE movie_title LIKE "%'.$search_string.'%"');
	while($results = mysql_fetch_array($result)) {
		$result_array[] = $results;
	}
	
	// Check If We Have Results
	if (isset($result_array)) {
		foreach ($result_array as $result) {
			
			$display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['movie_title']);
			$display_url = 'http://www.bbc.co.uk/programmes/'.urlencode($result['movie_title']);

			// Substitute Name
			$output = str_replace('nameString', $display_name, $html);

			// Substitute URL
			$output = str_replace('urlString', $display_url, $output);

			// Output
			echo($output);
		}
	}else{

		// Format No Results Output
		$output = str_replace('urlString', 'javascript:void(0);', $html);
		$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
		$output = str_replace('funcStr', 'Sorry :(', $output);

		// Output
		echo($output);
	}
}





?>