<?php
//David Roulet
// 23 01 2020
// ICT-133
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
function InsertAcc($data){
    file_put_contents("model/dataStorage/Users.json",json_encode($data));
}
function SuppAcc($data){
    file_put_contents("model/dataStorage/Users.json",json_encode($data));
}
function ChangeAcc($data){
    file_put_contents("model/dataStorage/Users.json",json_encode($data));
}
?>
