<?php

$conf['path']		= './firewall';
$conf['site_url']	= 'http://invisionviet.net';
$conf['mailadds']	= 'invision4viet@gmail.com';
$conf['mailname']	= 'The InV-Staff';
$conf['maxaccess']	= 5;	// If exceed the limits, the client will be banned from access
$conf['interval']	= 2;	// Time interval in seconds
$conf['requests']	= 10;	// Number of possible requests during $conf['interval'] seconds
$conf['blocktime']	= 900;	// How long the client has to wait when they are blocked

?>