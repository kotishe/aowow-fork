<?php
global $AoWoWconf;

// -- MaNGOS Database --
$AoWoWconf['mangos']['host']	= '127.0.0.1';
$AoWoWconf['mangos']['user']	= 'root';
$AoWoWconf['mangos']['pass']	= '1234';
$AoWoWconf['mangos']['db']		= 'ytdb';
$AoWoWconf['mangos']['aowow']	= 'aowow.aowow_'; // AoWoW table prefix
// -- Realmd Database --
$AoWoWconf['realmd']['host']	= '127.0.0.1';
$AoWoWconf['realmd']['user']	= 'root';
$AoWoWconf['realmd']['pass']	= '1234';
$AoWoWconf['realmd']['db']		= 'realm';
// Site Configuration
$AoWoWconf['aowow']['name'] = 'AoWoW';
$AoWoWconf['aowow']['template'] = 'wowhead';
$AoWoWconf['aowow']['cache_time'] = (60*60*24*7); // Time to keep cache in seconds (Default: 1 week)
// Default locale
$AoWoWconf['locale'] = 8;
$AoWoWconf['register'] = false;
$AoWoWconf['expansion'] = 2; // Used with register
$AoWoWconf['limit'] = 300;
$AoWoWconf['debug'] = true;

// Map object grouping factor. Meters = 10^param.
// 0 to disable.
// 1 is default and highly recommended.
// Do not use float values or values > 3.
$AoWoWconf['map_grouping'] = 1;
?>