<?php

$sdPlugin['credits'] = array(
	'name'=> 'Bugzilla',
	'author-name' => 'Lewis Cawte',
	'author-link' => 'http://www.lewiscawte.me',
	'author-email' => 'lewis@lewiscawte.me',
);
$sdPlugin['assoc'] = array(
	'name' => 'Bugzilla',
	'link' => 'http://bugzilla.org',
	'license' => 'GPL',
	'type' => 'bugtracker',
);
$sdPlugin['desc'] = "A plugin to allow login and interface between the Bugzilla bug tracking software and StaffDash";

$sdLogin['Bugzilla'] = "$sdPath/sd-plugins/Bugzilla/BugzillaLogin.php";
