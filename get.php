<?php
fopen("hasil.txt", "w+");
$data = file_get_contents("https://free-proxy-list.net/");
preg_match_all('/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b<\/td><td>\d{2,5}/',$data, $hasil);
foreach ($hasil[0] as $hasil1) {
	$proxy = str_replace("</td><td>", ":", $hasil1);
	fwrite(fopen("hasil.txt", "a"), $proxy."\n");
}
echo "Berhasil\n";
?>