<?php

function get_formatted_date($date){
	if ($date!= '') {
		$date = strtotime($date);
		return date('d-M y / h:i:s A',$date);
	}
}