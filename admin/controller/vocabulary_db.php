<?php
include './model/vocabularies.php';
$vocabularies = new Vocabularies();
$AllWords = $vocabularies->getWords();
$getWordsTopics = $vocabularies->getWordsTopics();
$getTopics = $vocabularies->getTopics();
$getPartsOfSpeech = $vocabularies->getPartsOfSpeech();
if(isset($_POST['word'])){
    $getSearch = $vocabularies->getSearch($_POST['word']);
}
if(isset($_POST['start'])){
    $getTiktok = $vocabularies->Tiktok($_POST['start']);
}