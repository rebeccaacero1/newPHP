<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>escaping example</title>
</head>
<body>
    <?php
        if(1==1){
            echo "<p>this works without escaping!</p>";
        }
    ?>

    <?php if(1==2){ ?>
        <p>this works too</p>
        <?php } ?>

</body>
</html>