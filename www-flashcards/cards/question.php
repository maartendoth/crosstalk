
<?php

include 'router.php';

?>

<html>
    <head>
        <style></style>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "";
  } else {
    x.style.display = "block";
  }
}
</script>
<script>


function playAudio() { 
  var y = document.getElementById("myAudio"); 
  y.play(); 
} 
</script>


    </head>
    <body>

    <div id="myDIV" hidden><?php echo "${$from}"; ?></div> 
    <p>unhide <a onclick="myFunction()" href="javascript:void(0);">transcription</a> by clicking here</p>

    <button id="play" onclick="playAudio()">(R)eplay</button>
    <audio id="myAudio" autoplay preload><source src="<?php $audio = "${from}_audio"; echo "${$audio}"; ?>" type="audio/x-wav">You will see this text if native audio playback is not supported.
    <!-- You could use this fall-back feature to insert a JavaScript-based audio player. --></audio>
    
    <form method="get" action="answer.php" >
    <input type="submit" class="button" name="next" value="(S)how answer" />
    
    <input type="hidden" name="nid" value="<?php echo $nid; ?>" />
    <input type="hidden" name="from" value="<?php echo $from; ?>" />
    <input type="hidden" name="to" value="<?php echo $to; ?>" />
    <input type="hidden" name="deck" value="<?php echo $deck; ?>" />
    </form>
    
    <div>
    
    <div class='subtitle'>(repeat pronunciation, and try to remember the meaning.)</div>
    <p>Go <a href="../index.html">back</a> to deck selection</p>
    <p><a href="decks.php?deck=<?php echo "${deck}"; ?>">restart</a> current deck</p>
           
        
        </div>
        <div>
            <p>* please note that this app doesn't work yet, still in development.</p>
            <p></p>
        </div>
    
    </body></html>

    