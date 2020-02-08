<?php



print_r($_GET);

if ($_GET[nid]) {
    $nid = $_GET[nid] + 1;
    echo "<p>new nid=$nid</p>";
} else {
    $nid = 1;
}

$handle = fopen("../decks/crosstalk.csv", "r");

if ($handle) {
    //    echo "<p>file found</p>";
    
        while (($line = fgets($handle)) !== false) {
            // process the line read.
            $fields = explode('|', $line);
    
            if ($fields[0] == $nid) {
    
               $i++;
            }
    
            
        }
    
        if ($i) {
            $url = "question.php?nid=$nid&from=$_GET[from]&to=$_GET[to]&deck=$_GET[deck]";

        } else {
            $url = "completed.php?nid=$nid&from=$_GET[from]&to=$_GET[to]&deck=$_GET[deck]";
        }
        echo "i=$i";
        
        fclose($handle);
    } else {
        // error opening the file.
        echo "error: cannot open selected card deck."; exit;
} 

echo "will auto redirect to: $url";
header( "refresh:0;url=$url " );

