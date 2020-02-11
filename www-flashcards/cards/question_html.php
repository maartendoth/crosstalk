<body>

<button id="settingsButton" onclick="window.location.href = 'settings_question.php';" ><img src="images/icons8-settings-20.png"></button>
<button onclick="unhide_from()" ><img src="images/icons8-eye-20.png"></button>

    <div id="myDIV" hidden><?php echo "${$from}"; ?></div> 
    <p> </p>
    <?php //<p>unhide <a onclick="myFunction()" href="javascript:void(0);">transcription</a> by clicking here</p> ?>

        
        <audio id="myAudio" autoplay preload><source src="<?php echo "${$from_audio}"; ?>" type="audio/x-wav">You will see this text if native audio playback is not supported.
        <!-- You could use this fall-back feature to insert a JavaScript-based audio player. --></audio>
        <button id="replay" onclick="playAudio()">(R)eplay</button>
        <form method="get" action="answer.php" >
            <input type="submit" id="showButton" name="next" value="(S)how answer" autofocus="autofocus" />
            
            <input type="hidden" name="nid" value="<?php echo $nid; ?>" />
            <input type="hidden" name="from" value="<?php echo $from; ?>" />
            <input type="hidden" name="to" value="<?php echo $to; ?>" />
            <input type="hidden" name="deck" value="<?php echo $deck; ?>" />
        </form>
        
    <div>
    
    <p>* please note that this app doesn't work yet, still in development.</p>
    </body>
</html>