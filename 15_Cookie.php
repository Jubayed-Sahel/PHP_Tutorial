<?php
    /*    it is a piece of information that will be stored inside our system for 
          a particular time,so that next time if that person visit that website again 
          then he will see similar contents saved as cookies. Also neer use username &
          password to set as cookies.                                                               */
    



    // Syntax : setcookie(name , value , expire_date , path)               ---> except name we can avoid others if we want
    $category_name="Food";;
    $category_value="Biryani";
    setcookie($category_name,$category_value,time()+84600,"/");                 //   --> time()+84600 means current_time + 84600s = 1 day from now.
                                                                                //   --> / means setting the cookie for the entire site
    echo "Cookie Is Set";

    //check the next file named (15_Get_Cookies).


?>