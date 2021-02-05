<html>
<body>
<p>
  <?php
$filepath = 'version.txt';

if (file_exists($filepath)) {

} else {
    fopen($filepath,'w');
    fwrite($filepath, '1');
    fclose($filepath);
}

$variablesave = fopen($filepath, 'r');
echo fgets($filepath);
fclose($filepath);
fopen($filepath,'w');
fwrite($filepath, 'ayayayay');
fclose($filepath);
?>
</p>
</body>
</html>
