<!-- <?php
//$file=fopen('sample.txt','r');
//$data=fread($file,filesize('sample.txt'));
//$data=fgets($file);//single line
//$data=fgetc($file);//single character
?>
<pre>
<?php
echo $data;?></pre>
<?php
fclose($file);
?> -->
<?php
if(file_exists('samples.php'))
{
    echo "exists";
}
else{
    echo "doesn't exists";
}
?>