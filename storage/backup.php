<?php 
   $database=['application'];
   $user='root';
   $pass='';
   $host='localhost';

   date_default_timezone_set('Africa/Blantyre');
   if(!file_exists("C:/Users/user/Desktop/backup"))
   {

   	mkdir("C:/Users/user/Desktop/backup");
   }
     foreach ($databases as $backup) {

     	if(!file_exists("C:/Users/user/Desktop/backup/$backup"))
     	{
     		mkdir("C:/Users/user/Desktop/backup/$backup");
     	}
     	# code...

     	$filename=$backup.'_'.date("F_d_Y")."@".date("g_ia").uniqid("_",false);
     	$folder="C:/Users/user/Desktop/backup/$backup/".$filename.".sql";

     	exec("C:/wamp64/bin/mysql/mysql5.7.31/bin/mysqldump --user=($user) --password=($pass) --host=($host) $database --result-file=($folder)",$output);
     }

     print_r($output);

?>