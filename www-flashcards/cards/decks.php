<!DOCTYPE html>
<html>

<head>
<script>
function playAudio() { 
  var y = document.getElementById("myAudio"); 
  y.play(); 
} 
</script>
</head>
<body onLoad="playAudio();">

<?php

//from index
$deck = htmlspecialchars($_GET["deck"]);
$url_main = "../index.html";

if (!$deck) {
    echo "Fatal error: you have selected an invalid deck. You will be redirected to our main page in 3 seconds.";
    header( "refresh:3;url=$url_main" );
} 

$decks = array("greek", "afrikaans", "crosstalk");
if (!in_array($deck, $decks)) {

    echo "Error deck does not exists. You will be redirected to our main page in 3 seconds.";
    header( "refresh:3;url=$url_main" );
    exit;

}
?>


<p>welcome, </P>
<p>Currently level selection is not implemented jet.</P>
<p>and only Korean to and from Dutch are implemented.</P>
<p><br> But; before you continue, make sure your browser's auto-play permission for this website is enabled.</P>
<p>If <a onclick="playAudio()" href="javascript:void(0);">this</a> audio clip is not playing automaticly, then you have to change autoplay permissions in your browser. and then reload the page (press F5)</p>

<p><br>enable auto-play in <a href="https://support.mozilla.org/en-US/kb/block-autoplay#w_site-settings">firefox</a></P>
<p>enable auto-play in <a href="https://www.howtogeek.com/326532/safari-now-disables-auto-playing-videos.-heres-how-to-allow-them-for-certain-sites/">safari (apple)</a></P>
<p><br>enable auto-play in <a href="https://www.macrumors.com/how-to/access-website-settings-in-safari/">iOS (iPhone, iPad)</a></P>

<audio id="myAudio" autoplay="" preload=""><source src="../decks/media/korean/가족.wav" type="audio/x-wav">You will see this text if native audio playback is not supported.
<!-- You could use this fall-back feature to insert a JavaScript-based audio player. --></audio>



<form action="question.php" method="get">
    level
    <select name="level" id="level2" >
         <option value="preview">quick preview</option>
        <option value="listening">listening</option>
        <option value="speaking">speaking</option>
        <option value="reading">reading</option>
        <option value="writing">writing</option>
    </select>
    
    from
    <select name="from" id="from2" >
         <option value="dutch">Dutch</option>
        <option value="korean">Korean</option>
        <option value="english">English</option>
        <option value="chinese">Chinese</option>
        <option value="spanish">Spanish</option>
    </select>
to
    <select name="to" id="to2" >
        <option value="dutch">Dutch</option>
        <option value="korean">Korean</option>
        <option value="english">English</option>
        <option value="chinese">Chinese</option>
        <option value="spanish">Spanish</option>
    </select>

    <input type="submit" class="button" value="start" />
    <input type="hidden" name="deck" value="<?php echo $deck; ?>" />
</form>


</body>
</html>

    