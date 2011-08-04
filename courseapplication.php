<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Course Application",
	'content' => <<<END
<div class="welcome">Course Application Form</div>

<form class="inputform" name="form2" method="post" action="/cgi-sys/formmail.pl">

<input name="recipient" value="info@elitechikung.com" type="hidden">
<input name="subject" value="Elitechikung.com - Course Application Form Submission" type="hidden">
<input name="redirect" value="http://www.elitechikung.com/thankyou.html" type="hidden">
<table border="0" cellpadding="15" width="80%">
<tbody><tr>
<td width="50%"><div align="right"><strong>Full Name: </strong></div></td>
<td width="50%"><label>
        <input name="full_name" id="full_name" size="35" type="text">
 </label></td>
 </tr>
<tr>
<td><div align="right"><strong>Address: </strong></div></td>
<td><input name="address" id="address" size="35" type="text"></td>
    </tr>
<tr>
      <td><div align="right"><strong>City: </strong></div></td>
      <td><input name="city" id="city" size="35" type="text"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>State: </strong></div></td>
      <td><input name="state" id="state" size="35" type="text"></td>
    </tr>
    <tr>
	<div class="third last">
        <!--
           	<div class="centeredBordered">
				<img src="images/sifulasvegas2006.jpg" alt="Grandmaster wong Kiew Kit" width="207" height="533"><br/>
				Grandmaster Wong Kiew Kit
			</div>
            
            <div class="centeredBordered">
				<img src="images/picture1.jpg" alt="students after a course" width="200" height="133"><br/>
				Look at the happy faces at the conclusion of a Wahnam West seminar<br/>
                <a href="images/picture1_large.jpg">click to enlarge&hellip;</a>
			</div> -->
            
		</div>
		<div style="clear: both;"></div>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
