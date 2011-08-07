<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Elite Shaolin",
	'content' => <<<END
<div id="welcome">Thank you!</div><br/>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
