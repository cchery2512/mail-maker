<?php

return [
    'oracle' => [
        'driver'         => 'oracle',
        'tns'            => env('DB_TNS', '(DESCRIPTION= (ADDRESS= (PROTOCOL=TCP)(HOST= 172.26.11.44)(PORT=1521))
		(CONNECT_DATA=
		(SERVER=DEDICATED)
		(SERVICE_NAME = desaprocudbpdb.procuraduria.local)
		))'),
        'host'           => env('DB_HOST'),
        'port'           => env('DB_PORT'),
        'database'       => env('DB_DATABASE'),
        'username'       => env('DB_USERNAME'),
        'password'       => env('DB_PASSWORD'),
        'charset'        => env('DB_CHARSET'),
        'prefix'         => env('DB_PREFIX'),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX'),
        'edition'        => env('DB_EDITION'),
        'server_version' => env('DB_SERVER_VERSION'),
    ],
    /*'oracle' => [
        'driver'         => 'oracle',
        'tns'            => env('DB_TNS', '(DESCRIPTION= (ADDRESS= (PROTOCOL=TCP)(HOST= 172.26.11.44)(PORT=1521))
		(CONNECT_DATA=
		(SERVER=DEDICATED)
		(SERVICE_NAME = desaprocudbpdb.procuraduria.local)
		))'),
        'host'           => env('DB_HOST', '172.26.11.44'),
        'port'           => env('DB_PORT', '1521'),
        'database'       => env('DB_DATABASE', 'desaprocudbpdb.procuraduria.local'),
        'username'       => env('DB_USERNAME', 'DMP'),
        'password'       => env('DB_PASSWORD', 'ministerio'),
        'charset'        => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
        'edition'        => env('DB_EDITION', 'ora$base'),
        'server_version' => env('DB_SERVER_VERSION', '11g'),
    ],*/
];
