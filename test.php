<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include 'lib.php';
         selectPToEdit();//2 draw form to select product to edit it:::::
         
        
            
          $conn = createConnection("root","654321");//1 connect to db


          $query = "select * from products where p_name ='".$_POST["pname"]."'";
          $result =mysqli_query($conn, $query);//3

          $row = mysqli_fetch_array($result);
            for($i=0;$i<count($row);$i++)
             {    
               //echo"dakhal el array <br/>"; 
              echo $row[$i];
              echo"<br/>";
              }
                          //  echo"msh dakhal el while ";
              //array_push($productList[$count],$row[$count]); //4 store query result in array ::::
              //echo "element number".$count. "is :" .$productList[$count];   
             // $count++;
              // header('location:index.php');
            
           //  echo"kharag mn  el while ";
         /* for($count=0;$count<count($productList);$count++)
           {
             echo"dakhal fe el for ";
             echo "element number".$count. "is :" .$productList($count);
           }*/
           mysqli_close($conn);


     
      ?>
    </body>
</html>
