<?php

$date = date('m/d/Y h:i:s a', time());

$db = pg_connect('host=database dbname=data_db port=5432 user=data_user password=data_password');
if (!$db)
{
	header('Content-Type: application/json; charset=utf-8');
	echo '{"nb_requests": 0,"time": "ERROR : unable to connect to DB"}';
	exit();
}

pg_query_params($db,
				'INSERT INTO data (data) VALUES ($1)',
				array($date));

$result = pg_fetch_object(pg_query_params( $db, 'SELECT COUNT(id) as nb_hits FROM data', array()));
if (!$result)
{
	header('Content-Type: application/json; charset=utf-8');
	echo '{"nb_requests": 0,"time": "ERROR : unable to fetch from DB"}';
	exit();
}

header('Content-Type: application/json; charset=utf-8');
echo '{"nb_requests": '.$result->nb_hits.',"time": "'.$date.'"}';
