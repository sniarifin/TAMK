<?php
	$koneksi = new mysqli("localhost","root","","eseminar");
	if (!$koneksi){
		echo "connection error!";
		exit();
	}