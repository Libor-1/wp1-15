<?php
$submit = filter_input(INPUT_POST, 'submit');
$paste = filter_input(INPUT_POST, 'paste');
$ham = filter_input(INPUT_POST, 'ham');
$cheese = filter_input(INPUT_POST, 'cheese');
$olives = filter_input(INPUT_POST, 'olives');
$tuna = filter_input(INPUT_POST, 'tuna');
$sausage = filter_input(INPUT_POST, 'sausage');
$garlic = filter_input(INPUT_POST, 'garlic');
$bacon = filter_input(INPUT_POST, 'bacon');
$pineapple = filter_input(INPUT_POST, 'pineapple');
$corn = filter_input(INPUT_POST, 'corn');
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
 
 if(isset($submit)) { ?>

     <h2>Potvrzení objednávky</h2>
     <p>Děkujeme za vaši objednávku, kterou vám odvezeme co nejdříve.</p>
     <p>Objednal jste si pizzu s:</p>
     <p><?= $paste ?> těsto</p>
     <?php 
     if(isset($cheese)) { ?>
         <p>se sýrem</p>
     <?php } 
     if(isset($ham)) { ?>
         <p>se šunkou</p>
     <?php } 
     if(isset($olives)) { ?>
     <p>s olivami</p>
     <?php }
     if(isset($tuna)) { ?>
     <p>s tuňákem</p> 
     <?php }
     if(isset($sausage)) { ?>
     <p>se salámem</p>
     <?php }
     if(isset($garlic)) { ?>
     <p>s česnekem</p>
     <?php }
     if(isset($bacon)) { ?>
     <p>se slaninou</p>
     <?php }
     if(isset($pineapple)) { ?>
     <p>s ananasem</p>
     <?php }
     if(isset($corn)) { ?>
     <p>s kukuřicí</p>
     <?php } else {
         ?>
         <p> Znovu vyplňte formulář</p>
     <?php }

     ?>
     <?php } ?>
</body>
</html>