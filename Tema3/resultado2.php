<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <?php $hora=$_GET['num1'];
    if(($hora>6) && ($hora<12)){
        echo "buenos días";
    }else if(($hora>12) && ($hora<21)){
        echo "buenas tardes";
    }else{
        echo "buenas noches";
    }
    
    ?>
    
</body>