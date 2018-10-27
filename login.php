<?php      
         $u = $_GET['username'];
         $p = $_GET['password'];

        $mysqldb=new mysqli("localhost","root","","shop");

        $q="SELECT * from user where username='$u' AND password='$p'"; 
        $r=$mysqldb->query($q);

        if($r->num_rows>0){
          echo "success";
        }
        else{
          echo "fail";
        }

      
  ?>