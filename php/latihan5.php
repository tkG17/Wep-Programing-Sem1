<?php
	$day = date("sun");
	switch ($day){
		case 'sun':
		$hari = "Minggu";
		break;
		
		case 'Mon':
		$hari = "Senin";
		break;
		
		case 'Tue':
		$hari = "Selasa";
		break;
		
		case 'Wed':
		$hari = "Rabu";
		break;
		
		case 'Thu':
		$hari = "Kamis";
		break;
		
		case 'Fri':
		$hari = "Jumat";
		break;
		
		case 'Sat':
		$hari = "Sabtu";
		break;
		
		default:
		$hari = "Bahagia";
	}
	echo "hari ini hari <b>$hari</b>"
	
?>
