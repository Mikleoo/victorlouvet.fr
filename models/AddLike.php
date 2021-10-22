<?php
include("SQL/Like.php");

// Executed when the like button is clicked thanks to the ajax in JS/Like.js
if (isset($_POST['data-vote'])) {
    if ($_POST['data-vote'] == "0") {
        $change = 0;
    } else {
        $change = 1;
    }
  $like = new Like;
  $like->AddJaime($change);
}
