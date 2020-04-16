<?php
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
 
define('_GS_WINDOWS_','"C:/Program Files/gs/gs9.52/bin/gswin64c.exe"');

$isWin = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
$options=[
	'gs_command'=>$isWin?_GS_WINDOWS_:'gs', 
	'gs_image_dpi'=>72, 
	'gs_image_quality'=>50, 
	'image_versions'=>[
		'thumbnail' =>[
			'max_width'=>600, 
			'max_height'=>600
		]
	],
];
$upload_handler = new UploadHandler($options);
