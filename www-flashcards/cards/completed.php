<?php

$from = "$_GET[from]";
$to = "$_GET[to]";
$deck = "$_GET[deck]";
$url_question = "question.php?nid=1&from=${from}&to=$to&deck=$deck";
$url_deck = "decks.php?deck=$deck";

?>


<html>
    <head>
        <style></style>
    </head>
    <body>

    <div>
            <p>you have completed all cards in this deck. click <a href="<?php echo "$url_question" ?>">here</a> to start again, or <a href="<?php echo "$url_deck" ?>">here</a> to select an other deck.</p>
        </div>
    
    </body></html>