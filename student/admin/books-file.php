<?php

if(isset($_GET['path']))
{
//Read the filename
$filename = $_GET['path'];
//Check the file exists or not
if(file_exists($filename)) {

//Define header information
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename="'.basename($filename).'"');
header('Content-Length: ' . filesize($filename));
header('Pragma: public');

//Clear system output buffer
flush();

//Read the size of the file
readfile($filename);

//Terminate from the script
die();
}
else{
echo "File does not exist.";
}
}
else
echo "Filename is not defined."
?>
<html>
<head>
<title>Download Files</title>
</head>
<body>
<p><a href="download.php?path=downloads/lecture.pdf">Download PDF file</a></p>
<p><a href="download2.php?path=downloads/rose.jpg">Download JPG file</a></p>
</body>
</html>


<?php
if(isset($_GET['path']))
{
//Read the url
$url = $_GET['path'];

//Clear the cache
clearstatcache();

//Check the file path exists or not
if(file_exists($url)) {

//Define header information
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($url).'"');
header('Content-Length: ' . filesize($url));
header('Pragma: public');

//Clear system output buffer
flush();

//Read the size of the file
readfile($url,true);

//Terminate from the script
die();
}
else{
echo "File path does not exist.";
}
}
echo "File path is not defined."

?>