<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Thank You!",
	'content' => <<<END
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
