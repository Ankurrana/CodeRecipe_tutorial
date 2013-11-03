<?php

return array(
	'connections' => array(
		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => $_SESSION['DB1_HOST'],
			'database' => $_SESSION['DB1_NAME'],
			'username' => $_SESSION['DB1_USER'],
			'password' => $_SESSION['DB1_PASS'],
			'charset'  => 'utf8',
			'prefix'   => ''
		)
	)
)