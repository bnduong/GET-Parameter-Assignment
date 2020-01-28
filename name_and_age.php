<?php
   $first_name = 'BachHien';
   $last_name = 'Duong';
   $age = '46';
?>
<!DOCTYPE html>
<html>
    <head>
         <title>Name Test</title>
    </head>
    <body>
         <p>Hello, My name is <?php echo $first_name;?> <?php echo $last_name; ?></p>
         I am <?php echo $age; ?> years old and
         <?php
         if ($age >= 18)
         echo "I am old enough to vote in the United States.";
         else
         echo "I am not old enough to vote in the United States.";
         ?>
    </body>
</html>