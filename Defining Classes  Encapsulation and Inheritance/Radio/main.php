<?php
$num = readline();
$total = 0;
$count = 0;
for ($i = 0; $i < $num; $i++){
    $input = explode(';', readline());
    $artist = $input[0];
    $songName = $input[1];
    $length = $input[2];
    try{
        $song = new Song($artist, $songName, $length);
        echo "Song added.\n";
        $count++;
        $total += $song->getLength();
    }
    catch (Exception $e){
        echo $e->getMessage() . "\n";
    }
}
echo "Songs added: " . $count . "\n";
$hours=gmdate("G", $total);
$mins=gmdate("i", $total);
$seconds=gmdate("s", $total);
echo "Playlist length: " . $hours."h ".$mins."m ".$seconds."s";