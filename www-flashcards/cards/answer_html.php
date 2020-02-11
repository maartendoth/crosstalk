<body>
    <button id="settingsButton" onclick="window.location.href = 'settings_answer.php';" ><img src="images/icons8-settings-20.png"></button>

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

       
    <p>* please note that this app doesn't work yet, still in development.</p>
        </body>
    </html>