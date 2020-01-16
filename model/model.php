<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
function getSnows(){
    return json_decode(file_get_contents("model/dataStorage/Snows.json"),true);
}
function getName(){
    return json_decode(file_get_contents("model/dataStorage/Users.json"),true);
}
?>
