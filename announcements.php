<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Announcements",
	'content' => <<<END
<div id="welcome">Announcements</div>
   <div style="height: 300px;"></div>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>