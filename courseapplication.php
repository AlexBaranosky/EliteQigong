<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Course Application",
	'content' => <<<END
<form class="inputform" name="form2" method="post" action="/cgi-sys/formmail.pl">

<input name="recipient" value="info@elitechikung.com" type="hidden">
<input name="subject" value="Elitechikung.com - Course Application Form Submission" type="hidden">
<input name="redirect" value="http://www.elitechikung.com/thankyou.html" type="hidden">
<table border="0" cellpadding="12" width="80%">
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
    <td><div align="right"><strong>Zip Code: </strong></div></td>
      <td><input name="zip" id="zip" size="35" type="text"></td>
    </tr>
<tr>
      <tr>
      <td><div align="right"><strong>Home #: </strong></div></td>
      <td><input name="home_phone" id="home_phone" size="35" type="text"></td>
      </tr>
      <tr>
      <td><div align="right"><strong>Cell #: </strong></div></td>
      <td><input name="cell_phone" id="cell_phone" size="35" type="text"></td>
      </tr>
      <tr>
      <td><div align="right"><strong>Work #: </strong></div></td>
      <td><input name="work_phone" id="work_phone" size="35" type="text"></td>
      </tr>
</tr>
    <tr>
      <td><div align="right"><strong>Email: </strong></div></td>
      <td><input name="email" id="email" size="35" type="text"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Age: </strong></div></td>
      <td><input name="age" id="age" size="35" type="text"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Occupation: </strong></div></td>
      <td><input name="occupation" id="occupation" size="35" type="text"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Employer: </strong></div></td>
      <td><input name="employer" id="employer" size="35" type="text"></td>
    </tr>
    <tr>
    <td><div align="right"><strong>Please list any health problems you may have: </strong></div></td>
    <td><textarea name="health" cols="45" rows="8" id="health"></textarea></td>
    </tr>
    <tr>
      <td class="alt"><div align="right"><strong>Do you have a heart condition?   Y/N?  If yes please explain: </strong></div></td>
      <td><textarea name="heart" cols="45" rows="8" id="heart"></textarea></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Have you had any operations in the past 5 years?  Y/N?  If yes, please list here: </strong></div></td>
      <td><textarea name="operations" cols="45" rows="8" id="operations"></textarea></td>
    </tr>
    <tr>
      <td class="alt"><div align="right"><strong>Has your doctor warned you about any physical activity due to any conditions? 	Y/N? If yes, please explain: </strong></div></td>
      <td><textarea name="doctor" cols="45" rows="8" id="doctor"></textarea></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Have you ever practiced an energy art like Chi Kung, Yoga or any other?  Y/N?  If yes, please list what and when: </strong></div></td>
      <td><textarea name="practiced" cols="45" rows="8" id="practiced"></textarea></td>
    </tr>
    <tr>
      <td class="alt"><div align="right"><strong>What are your expectations for taking a Chi Kung course?(Please indicate <u>which course</u> <u>and date</u> you are applying for): </strong></div></td>
      <td><textarea name="expectations" cols="45" rows="8" id="expectations"></textarea></td>
    </tr>
    <tr>
      <td><div align="right"><strong>How did you hear about this course?: </strong></div></td>
      <td><textarea name="hear_about" cols="45" rows="8" id="hear_about"></textarea></td>
    </tr>
    <tr>
<tr>
	<td></td>
    <td><p>
      <input name="application" class="bg_keyboard" id="application" value="Submit Course Application" type="submit">
    </p>
      <p>All information gathered will only be used to evaluate applicant&rsquo;s suitability for Elite Chi Kung services and will not be shared with anyone outside of Elite Chi Kung</p></td>
</tr>
  </tr></tbody></table>
</form>
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
