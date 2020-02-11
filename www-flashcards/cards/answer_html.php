<body>
    <div class="field2"><?php echo "${$to}"; ?></div> 
    <audio autoplay><source src="<?php $audio = "${to}_audio"; echo "${$audio}"; ?>" type="audio/x-wav">You will see this text if native audio playback is not supported.
    <!-- You could use this fall-back feature to insert a JavaScript-based audio player. --></audio>
    
    <form method="get" action="assesment.php" >
    <input type="submit" id="cluelessButton" name="level" value="clueless" />
    <input type="submit" id="wrongButton" name="level" value="wrong" />
    <input type="submit" id="goodButton" name="level" value="good" autofocus="autofocus" />
    <input type="submit" id="easyButton" name="level" value="easy" />
    <input type="submit" id="knownButton" name="level" value="know by hart" />
    <input type="hidden" name="nid" value="<?php echo $nid; ?>" />
    <input type="hidden" name="from" value="<?php echo $from; ?>" />
    <input type="hidden" name="to" value="<?php echo $to; ?>" />
    <input type="hidden" name="deck" value="<?php echo $deck; ?>" />
    </form>

    <div>
    
        <p>keyboard shortcuts: q,w,e,r,t,space, backspace. space enter selected button, backspace go to previous page.</p>
        <p>clueless (q): (show me this card again in < 3 min)</p>
        <p>wrong(w): not completely correct, or not completely sure</p>
        <p>good(e): correct, but had to think about it for a second or two</p>
        <p>easy(r): instant recall, but dont remove from deck. (show me this card again in: X days)</p>
        <p>know by hart(t): remove this card from the deck. will not be asked again unless you reset the deck.</p>
            
        
        </div>
        <div>
        
        </body>
    </html>