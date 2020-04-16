# pdf-upload
Merupakan penambahan fitur upload file pdf dalam contoh php server dari Demo File Upload (https://blueimp.github.io/jQuery-File-Upload/).

Modifikasi dilakukan dengan menambah komponen create thumbnail jpg dari file pdf yang di upload. Untuk membuat file jpg dari pdf dilakukan menggunakan GhostScript (https://www.ghostscript.com/), setiap halaman pertama pdf akan diconvert menjadi jpg sebagai thumbnail.


## Cara menggunakan

Pertama Install GhostScript (https://www.ghostscript.com/).

Selanjutnya tambah options dalam file index.php

```php
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
```
