<?php
function niceTimeLeft($timeDiff){
	if ($timeDiff <= 1)			return 'one second';
	if ($timeDiff < 60)			return $timeDiff.' seconds';
	if ($timeDiff < 120)		return 'one minute';
	if ($timeDiff < 3600)		return floor($timeDiff / 60).' minutes';
	if ($timeDiff < 7200)		return 'one hour';
	if ($timeDiff < 86400)		return floor($timeDiff / 3600).' hours';
	if ($timeDiff < 172800)		return 'one day';
	// TODO: one month = 30 days. Not precise.
	if ($timeDiff < 2592000)	return floor($timeDiff / 86400).' days';				
	if ($timeDiff < 5184000)	return 'one month';
	if ($timeDiff < 31536000)	return floor($timeDiff / 2592000).' months';
	if ($timeDiff < 63072000)	return 'one year';
	return floor($timeDiff / 31536000).' years';
}

?>