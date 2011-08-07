<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Instruction",
	'content' => <<<END
<div id="welcome">Instruction</div>
      <p><br/>
        Instruction is provided in seminars for special groups and private lessons to individuals.  <br/><br/>
                
        The Curriculum available to be used in classes is vast but the focus is on what is best for the student.  In general, the principle of "less is more" is applicable for most students.  Students get the best benefits by learning less and practicing more which allows them to gain the depth of skill required to get the benefits from their practice.  The Shaolin Arts have such a profound depth that gaining skill in a single technique or skill can be enough to allow a student to realize seemingly limitless benefits in their lives.  All students must agree to keep <a href="more_info.html">the 10 Shaolin Laws.</a><br/><br/>
                
        The curriculum includes: <br/><br/>        
        
        <strong>Chi Kung</strong></p>
      <p>18 Lohan Hands 
        </p>
      <p>Sinew Metamorphosis
        </p>
      <p>Self-Manifested Chi Movement
        </p>
      <p>Massaging Internal Organs
        </p>
      <p>Abdominal Breathing
        </p>
      <p>Cosmic Shower
        </p>
      <p>Shaolin Chi Kung Eighteen Techniques Part 1 
        </p>
      <p>Shaolin Chi Kung Eighteen Techniques Part 2 
        </p>
      <p>Shaolin Chi Kung Eighteen Techniques Part 3 
        </p>
      <p>Zhan Zhuan</p>
      <p>Iron-Wire Set (practiced as a powerful Chi Kung exercise)<br/><br/>
        </p>
      <p><strong>Executive and Organizational Skills</strong></p>
      <p>Practical Zen, Chi Kung and Kung Fu to improve Executive and Organizational Effectiveness <br/><br/>
        </p>
      <p><strong>Kung Fu</strong></p>
      <p>Shaolin Wahnam Kung Fu      </p>
      <p align="left">Wahnam Tai Chi Chuan </p>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>