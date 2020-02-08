
<?php

include 'router.php';

?>

<html>
    <head>
        <style></style>
    </head>
    <body>
    
    <div class="field2"><?php echo "${$to}"; ?></div> 
    <audio autoplay><source src="<?php $audio = "${to}_audio"; echo "${$audio}"; ?>" type="audio/x-wav">You will see this text if native audio playback is not supported.
    <!-- You could use this fall-back feature to insert a JavaScript-based audio player. --></audio>
    
    <form method="get" action="assesment.php" >
    <input type="submit" class="button" name="level" value="clueless" />
    <input type="submit" class="button" name="level" value="wrong" />
    <input type="submit" class="button" name="level" value="good" />
    <input type="submit" class="button" name="level" value="easy" />
    <input type="submit" class="button" name="level" value="know by hart" />
    <input type="hidden" name="nid" value="<?php echo $nid; ?>" />
    <input type="hidden" name="from" value="<?php echo $from; ?>" />
    <input type="hidden" name="to" value="<?php echo $to; ?>" />
    <input type="hidden" name="deck" value="<?php echo $deck; ?>" />
    </form>

    <div>
    
        <p>clueless: (show me this card again in < 3 min)</p>
        <p>wrong: not completely correct, or not completely sure</p>
        <p>good: correct, but had to think about it for a second or two</p>
        <p>easy: instat recall, but dont remove from deck. (show me this card again in: X days)</p>
        <p>know by hart: remove this card from the deck. will not be asked again unless you reset the deck.</p>
            
        
        </div>
        <div>
    
    </body></html>

    