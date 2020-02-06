<?php

$handle = fopen("../decks/crosstalk.csv", "r");
$from = htmlspecialchars($_GET["from"]);
$to = htmlspecialchars($_GET["to"]);

if (htmlspecialchars($_GET["nid"])) {
    $nid = htmlspecialchars($_GET["nid"]);
    $from = htmlspecialchars($_GET["from"]);
    $to = htmlspecialchars($_GET["to"]);

} else {
    $nid = 1;
}

if (htmlspecialchars($_GET["nid"])) {
    $nid = htmlspecialchars($_GET["nid"]);
    $from = htmlspecialchars($_GET["from"]);
    $to = htmlspecialchars($_GET["to"]);

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
                $english = $fields[3];
                $korean = $fields[4];
                $chinese = $fields[5];
                $dutch = $fields[6];
                $spanish = $fields[7];  

               $korean_audio = $fields[8];
               $dutch_audio = $fields[9];
               $english_audio = $fields[10];
               $chinese_audio = $fields[11];
               $spanish_audio = $fields[12];

               $i++;
            }
    
            
        }

        //echo "i=$i";
    
        fclose($handle);
    } else {
        // error opening the file.
        echo "error: cannot open selected card deck."; exit;
} 

$current_url = "assesment.php?nid=$nid&";