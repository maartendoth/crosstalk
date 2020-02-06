
<?php

include 'router.php';

?>

<html>
    <head>
        <style></style>
    </head>
    <body>
    
    <div class="field2"><?php echo "${$to}"; ?></div> 
    
    <form method="get" action="assesment.php" >
    <input type="submit" class="button" name="level" value="clueless" />
    <input type="submit" class="button" name="level" value="wrong" />
    <input type="submit" class="button" name="level" value="good" />
    <input type="submit" class="button" name="level" value="easy" />
    <input type="submit" class="button" name="level" value="know by hart" />
    <input type="hidden" name="nid" value="<?php echo $nid; ?>" />
    <input type="hidden" name="from" value="<?php echo $from; ?>" />
    <input type="hidden" name="to" value="<?php echo $to; ?>" />
    </form>

    <div>
    
        <p>clueless: the flashcard will be shown again in < 3 min.</p>
        <p>wrong: not completely correct, or not sure</p>
        <p>good: correct, but had to think about it for a couple of seconds</p>
        <p>easy: show me this card again in couple a of days</p>
        <p>know by hart: remove this card from the deck. will not be asked again unless you reset the deck.</p>
            
        
        </div>
        <div>
    
    </body></html>

    