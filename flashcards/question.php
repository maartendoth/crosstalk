
<?php

include 'router.php';

?>

<html>
    <head>
        <style></style>
    </head>
    <body>
    
    <div class="field2"><?php echo "${$from}"; ?></div> 
    
    <form method="get" action="answer.php" >
    <input type="submit" class="button" name="next" value="show answer" />
    <input type="hidden" name="nid" value="<?php echo $nid; ?>" />
    <input type="hidden" name="from" value="<?php echo $from; ?>" />
    <input type="hidden" name="to" value="<?php echo $to; ?>" />
    </form>

    <div>
    
    <div class='subtitle'>(repeat pronunciation, and try to remember the meaning.)</div>
    <p>Go <a href="decks.php">back</a> to deck selection</p>
           
        
        </div>
        <div>
            <p>* please note that this app doesn't work yet, still in development.</p>
            <p></p>
        </div>
    
    </body></html>

    