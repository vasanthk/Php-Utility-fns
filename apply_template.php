<?php
/**
 * Return output HTMl from a PHP template file
 */
function apply_template($tpl_file, $vars = []) {
	extract($vars);
	ob_start();
	require($tpl_file);
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
