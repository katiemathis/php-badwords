<?php

    $paragraph = 'This is a paragraph. 
    What a pretty fucking paragraph it is. 
    Have you ever seen a paragraph so fucking 
    beautiful in your entire fucking life?';

    $paragraphLength = strlen($paragraph);

    $badWord = $_GET['badword'];

    $censorBadWord = str_replace($badWord, '***', $paragraph);

    $censoredParagraphLength = strlen($censorBadWord);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censorship</title>
</head>
<body>

    <h1>Please excuse the vulgar language utilized in this exercise</h1>
    <h2>It is purely for educational purposes :)</h2>

    <h4>This is my uncensored paragraph NSFW: </h4>

    <p><?php echo $paragraph ?></p>

    <h4>This is the length of my uncensored paragraph:</h4>

    <p><?php echo $paragraphLength ?> characters</p>

    <h4>This is the word I have decided to censor: </h4>

    <p><?php echo $badWord ?></p>

    <h4>This is the SFW version: </h4>

    <p><?php echo $censorBadWord ?></p>

    <h4>This is the length of my censored paragraph:</h4>

    <p><?php echo $censoredParagraphLength ?> characters</p>
    
</body>
</html>