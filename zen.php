<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Zen",
	'content' => <<<END
<br />Zen has at least 3 meanings.<br /><ul type="bullet"><li>Meditation</li><li>A glimpse of Cosmic Reality</li><li>Cosmic Reality</li></ul>It also is embodied in the philosophy of "Simple, direct and effective".  If something doesn't adhere to this philosophy, it cannot be called Zen. Bodhidharma, the Patriarch of Shaolin is also known as the Patriarch of Zen.  Bodhidharma was an Indian Prince and a successor to the Buddha who had traveled from India to China.  His legacy is vast because of the remarkable Arts that he taught and transmitted to his disciples.
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
