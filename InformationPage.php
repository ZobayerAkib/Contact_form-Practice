<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
       body{
           text-align: center;
           font-weight: bold;
       }
       td{
           height: 30px;
       }
      
   </style>
    <title>Information Page</title>
</head>
<body>
<table border="3" style="width:100% ;float:left;">
	
    <tr bgcolor="#04AA6D" style=" color: white;">
    
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone No.</td>
        <td>Message</td>
        <td>Date</td>  
    </tr>
    
    <?php
    
        $fp = fopen ( "Information.csv" , "r" );
        while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) {
            
            $i = 1;
            echo "<tr>";
            foreach($data as $row) {
               echo "<td>" . $row . "</td>";
               echo "   ";
               $i++ ;
            }
            
            echo "</tr>";
        }
        
        fclose ( $fp );
        
        ?>
        
</table>

</body>
</html>