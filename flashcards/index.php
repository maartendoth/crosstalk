<?php

$url = "decks.php";

echo "will auto redirect to: $url";
header( "refresh:0;url=$url " );
