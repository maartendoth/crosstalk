<?php

//if no deck is selected, reroute to index.html
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
$hendles = [
    "greek" => "../decks/greek.csv",
    "afrikaans" => "../decks/afrikaans.csv",
    "crosstalk" => "../decks/crosstalk.csv",
];
$handle = fopen($hendles[$deck], "r");
if (!$handle) {
    // error opening the file.
    echo "Sorry our '$deck' deck is still in development, please try agian in the near future.<br>";
    echo "You will be redirected to our main page in 3 seconds.";
    header( "refresh:3;url=$url_main" );
    exit;
}

// if no language is selected, reroute to decks.php
$from = htmlspecialchars($_GET["from"]);
$to = htmlspecialchars($_GET["to"]);
$url_lang = "decks.php?deck=$deck";
if ((!$from) || (!$to)) {
    //echo "Langages is not set, You will be redirected to our language selection page in 3 seconds.";
    header( "refresh:0;url=$url_lang" );
    exit;
}


// if no currenct note, then set note id to 1
if (htmlspecialchars($_GET["nid"])) {
    $nid = htmlspecialchars($_GET["nid"]);
} else {
    $nid = 1;
}

// locate note and read content
$ext = "wav";
if ($deck == "crosstalk") {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $fields = explode('|', $line);

        if ($fields[0] == $nid) {
            $english = $fields[3];
            $korean = $fields[4];
            $chinese = $fields[5];
            $dutch = $fields[6];
            $spanish = $fields[7];  

            $korean_audio = "../decks/media/korean/${korean}.$ext";
            $dutch_audio = "../decks/media/nederlands/${dutch}.$ext";
            $english_audio = "../decks/media/english/${english}.$ext";
            $chinese_audio = "../decks/media/chinese/${chinese}.$ext";
            $spanish_audio = "../decks/media/spanish/${spanish}.$ext";

            $i++;
        }
    }
    fclose($handle);
}

$current_url = "assesment.php?nid=$nid&";