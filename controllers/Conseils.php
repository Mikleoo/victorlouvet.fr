<?php
// Here we are in the controller of GetPassions

//headers for not caching the results
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

//headers to tell that result is JSON
header('Content-type: application/json');

require('models/SQL/Form.php');
$form = new Form;
$data = $form->getPassion('Manga', 0);
echo json_encode($data);
//$data = json_encode($data);
//print_r(json_encode($data));
return json_encode($data);
