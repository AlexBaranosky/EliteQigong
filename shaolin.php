<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Shaolin",
	'content' => <<<END
<p>The Shaolin Temple, made famous in the West by Television and Movies was very real and significant in the history of China.  The original Temple was located on Shaolin Mountain in Central China and was in fact an Imperial Temple, sponsored by the Emperor.  Once a year the Emperor would journey to Shaolin to pray on behalf of the people.  Later additional temples were established in Southern China.</p>

<p>Shaolin was an exclusive temple only accessible by special people.   It was a gathering place for many of the most accomplished people in the Kingdom.  Generals, royalty and people of special accomplishment would gather at Shaolin to cultivate spiritually.  This special gathering also allowed for the opportunity to refine special Arts to incredibly high levels.  The Masters and Generals would compare techniques, strategies and experiences to refine them in an objective and methodical manner over the centuries.  This University-like setting resulted in the Arts practiced there to be known throughout the literature in China as the "Greatest Arts".</p>

<p>The Patriarch of Shaolin, the venerable Bodhidharma, also known as Damo, initiated Chi Kung and Zen in the temple.  The philosophy of Zen, "Simple, direct and effective" was applied to all of the Arts practiced there resulting in remarkable achievements.  If a technique, practice or skill didn't adhere to this philosophy it was either modified or discarded.  The practicality of Zen meant everything practiced must produce real and beneficial results.</p>
  
<p>One of the original Chi Kung practices at Shaolin, the "18 Lohan Hands" later evolved in Shaolin Kung Fu which became famous as, "The Greatest Martial Art in the World".</p>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
