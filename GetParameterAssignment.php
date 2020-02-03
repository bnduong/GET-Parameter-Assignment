<?php
/* INF653-Get Parameter Assignment
   Due date: 2/3/2020
   By BachHien Duong */

if (isset($_GET['$first_name']))
{
    echo $first_name;
}
if (isset($_GET['$last_name']))
{
    echo $last_name;
}
if (isset($_GET['$age']))
{
    echo $age;

}
$first_name = 'BachHien';
$last_name = 'Duong';
$age = '46';
?>
<!DOCTYPE html>
<html>
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