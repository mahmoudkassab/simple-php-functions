<?php 
// this function is to create a new file or open file, and write content at the end
// can create a new directory or if not want, you can Add NULL
// create_file(file_name, file_conent, file_path)

function create_file($name, $content, $path)
{
	if (!file_exists($path) & $path != NUll){  // if path not exist, create it
		mkdir($path, 0700);
	}elseif($path == NUll){ // if path NUll, ignore it
		$path = '';
	}

	$file = $path.$name;
	$fopen = fopen($file, "a+", $path) or die('Cannot open file:  '.$file); // r+ writes at the beginig
	fwrite($fopen, $content);
	fwrite($fopen, "\r\n");
	fclose($fopen);
}
create_file("text.txt", 'this is content2', NUll)
 ?>