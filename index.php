<?
	// $data = file_get_contents('test.txt');
	// $new_data = $data+1;
	// file_put_contents("test.txt",$new_data);
	// echo file_get_contents('test.txt');
	// $arr = ['1.txt', '2.txt', '3.txt'];
	// $data = '';
	// foreach ($arr as $key => $value) {
	// 	file_put_contents($value, $key);
	// 	$data =$data. file_get_contents($value) . ' ';
	// }
	// file_put_contents('test1.txt', $data);
	// echo file_get_contents('test1.txt')."<br/>";
	// unlink("test1.txt");
	// foreach ($arr as $key => $value) {
	// 	unlink($value);
	// 	echo 'Done' . "<br/>";
	// }
	// copy('new.txt', 'dir/new_copy.txt');
	// rename('new.txt', 'dir/new_copy.txt');
	
	// if (file_exists("test.txt")) {
	// 	echo 'yes';
	// 	unlink('test.txt');
	// } else {
	// 	echo 'no';
	// 	file_put_contents('test.txt', 'data');
	// };
	// $arr = ['1.txt', '2.txt', '3.txt'];
	// foreach ($arr as $key => $value) {
	// 	if (file_exists($value)) {
	// 		echo $value . ' Существует' . "<br/>";
	// 	}else{
	// 		echo $value . ' Не существует' . "<br/>";
	// 	}
	// }
	//echo filesize('test.txt')/1024;
	//$arr = [1, 2, 3, 4, 5];
	// $text = file_get_contents('test.txt');
	// $arr = explode(PHP_EOL, $text);
	// $sum = 0;
	// foreach ($arr as $key => $value) {
	// 	$sum=$sum+$value;
	// }
	// file_put_contents('new.txt', $sum);
	// $arr = file('test.txt');
	// $file = file_get_contents('test.txt');
	// $sum = 0;
	// foreach ($arr as $key => $value) {
	// 	echo $value . "<br/>";
	// 	$sum=$sum+$value;
	// }
	// file_put_contents('test.txt',$file."<br/>". $sum); 
	// mkdir('folder');
	// $arr = [1, 2, 3];
	// foreach ($arr as $key => $value) {
	// 	mkdir($value);
	// }
	// $ar = ['1.txt', '2.txt', '3.txt']; 
	// foreach ($ar as $key => $value) {
	// 	file_put_contents('folder/' . $value, 'data');
	// }
	// $ar = ['1', '2', '3', 'folder']; 
	// foreach ($ar as $key => $value) {
	// 	rmdir($value);
	// }
	// mkdir('folder');
	// rename('folder', 'newfolder');
	// $files = array_diff(scandir('folder'), ['..','.']);
	// $file_content='';
	// foreach ($files as $key => $value) {
	// 	//echo $value . "<br/>";
	// 	if (is_file('folder/'.$value)){
	// 		echo "Это файл ". $value . file_get_contents('folder/'.$value) . "<br/>";
			
	// 	}else{
	// 		echo "Это папка ". $value . "<br/>";

	// 	}
	// 	echo $file_content;
	// }
// if (is_file('test.txt')){
// 	echo '234';
// }
	// function getFiles($folder){	
	// 	$files = array_diff(scandir($folder), ['..','.']);
	// 	$file_content='';
	// 	foreach ($files as $key => $value) {
	// 		$path = $folder . '/' . $value;
	// 		if (is_file($folder.'/'.$value)){
	// 			echo "Это файл ". $value.' ' . file_get_contents($folder.'/'.$value) . "<br/>";
				
	// 		}elseif(is_dir($path)){
	// 			echo "Это папка ". $value.' ' . "<br/>";
	// 			getFiles($path);
	// 		}
	// 		echo $file_content;
	// 	}
	// }

	// getFiles('folder');
	//c 1-43 готово
tempnam('folder', 'prefix');
?>


