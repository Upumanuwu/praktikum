
<?php
            $names= ["akil kil", "udin", "samsudin", "haha","aiuek"];
        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BAB 1</title>
</head>
<body>
      <table border="1" cellpadding="10" cellspacing="1">
          <thead>
            <tr>
               <th>Nama</th>
            
              <th>Kebalikan Nama</th>
             
            </tr>
          </thead>
      
           <?php foreach ($names as $name) :  ?>
      
                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                        <td><?php echo strrev($name)."<br>"; ?></td>
                
                    </tr>            
	                  <?php endforeach; ?>   
      </table>
</body>
</html>