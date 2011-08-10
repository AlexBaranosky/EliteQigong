<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Books",
	'content' => <<<END
      <p><br />
        The Wonders of Chi Kung:  Relieving Stress and Unlocking Glowing Health and Vitality, Third Edition, By Anthony Spinicchia<br/>
      </p>
      <p><img src="images/Screen shot 2010-03-17 at 10.11.02 PM.png" width="169" height="258" alt="Book Cover" /></p>
      <p>Please visit <a href="https://www.createspace.com/3442294">here </a>for more info.
  </li>
  </ul>
</p>
      <p><br />
        As both a Western Medical Doctor and a long time Chi Kung practitioner I believe that Sifu Anthony Spinicchia’s, Wonders of Chi Kung, is a fascinating and profound contribution to helping people understand how relevant Chi Kung can be in their lives.  Unlike many volumes on the subject this book is written in an easy to read manner making it accessible to people from all walks of life including those who may have not been interested in Chi Kung or any type of Eastern Art.   The author demystifies an Ancient Art while focusing on its practical applications for people in the fast paced Western world.   </p>
      <p>I highly recommend this book and in fact encourage my own interested patients to get a copy. At a minimum, readers can enlighten themselves on what Chi Kung is as the International Media begins to reference the Art more and more.  At best, readers will be inspired by this book to make significant improvements in their lives.<br />
      </p>
<p>Damian Kissey, M.D.</p>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
