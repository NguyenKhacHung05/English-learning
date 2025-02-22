<?php
//connect database

include './mvc/model/connectdb.php';
include './mvc/controller/vocabulary_db.php';

// show header
$actived = '';
if (!isset($_GET['page'])) {
   $actived = 'words';
   include './mvc/view/block/header.php';
} else {
   $actived = $_GET['page'];
      include './mvc/view/block/header.php';
}

// ---- //show contents 
if (!isset($_GET['page'])) {
   include './mvc/view/words.php';
   $actived = 'words';
} else {
   switch ($_GET['page']) {
      case 'words':
         include './mvc/view/words.php';
         $actived = 'words';
         break;    
      case 'topics':
         $actived = 'topics';
         include './mvc/view/topics.php';
         break;
      case 'search':
         include './mvc/view/search.php';
         break;
         
      case 'test':
         include './mvc/view/test.php';
         break;
         
      case 'sentences':
         include './mvc/view/sentences.php';
         break;
         
      case 'tiktok':
         include './mvc/view/tiktok.php';
         break;
         
      default:
         echo 'Error';
         break;
   }
}

if (isset($_GET['result'])) {
   include './mvc/view/block/result.php';
}

//show footer
include './mvc/view/block/footer.php';