<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Announcements",
	'content' => <<<END
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
