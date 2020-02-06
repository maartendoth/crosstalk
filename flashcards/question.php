
<?php

$handle = fopen("../korean/crosstalk.csv", "r");
$from = htmlspecialchars($_GET["from"]);
$to = htmlspecialchars($_GET["to"]);




if (htmlspecialchars($_GET["nid"])) {
    $nid = htmlspecialchars($_GET["nid"]);

} else {
    $nid = 1;
}

//echo "$nid";

if ($handle) {
//    echo "<p>file found</p>";
    
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $fields = explode('|', $line);

        if ($fields[0] == $nid) {
           $korean = $fields[4];
           $dutch = $fields[6];
           $korean_audio = $fields[7];
           $dutch_audio = $fields[8];

           $i++;
        }

        $i++;
    }

    fclose($handle);
} else {
    // error opening the file.
    echo "error"; exit;
} 

$current_url = "assesment.php?nid=$nid&"
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
    
            <p>cluless: the flashcard will be shown agian in < 3 min.</p>
            <p>wrong: not completly correct</p>
            <p>good: correct, but had to think about it for a coule of seconds</p>
            <p>easy: show me this card again in coule a of days</p>
            <p>know by hart: remove this card from the deck. wil not be asked again unless you reset the deck.</p>
            
        
        </div>
        <div>
            <p>* pleace note that this app doesn't work yet, still in development.</p>
            <p></p>
        </div>
    
    </body></html>

    