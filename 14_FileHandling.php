<?php

/*

//         1. readfile() 
echo readfile("14_Data_File.txt");

*/



/*

//         2. fopen("file_name","Mode")   ---> r=read_mode ,w=write_mode
$mydata=fopen("14_Data_File.txt","r");
echo fread($mydata,filesize("14_Data_File.txt"));
fclose($mydata);          //---> Must close the File, if i open one.

*/

/*

//        3. fgets()                 --> reads only the first Line
$mydata=fopen("14_Data_File.txt","r");
echo fgets($mydata);
fclose($mydata);      

*/



//     4. feof()               ---> To Print Everythin as it is written in the file.
$mydata=fopen("14_Data_File.txt","r");
while (!feof($mydata)) {
    echo fgets($mydata);
    echo "<br>";
}
fclose($mydata);



/*         ----------->   More things About File are in the video
=> creating and writing inside the files.



?>