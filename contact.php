<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Contact",
	'content' => <<<END
<div class="welcome">Contact</div><br />
   <p><em></em></p>
<p>To contact Sifu Anthony Spinicchia with questions please fill out the form below and you will be contacted ASAP. Your information will not be shared with anyone.</p>
        <form id="form1" name="form1" method="post" action="/cgi-sys/formmail.pl">  
      
        <table border="0" cellpadding="12" width="80%" style="align: right;">
          <tr>
            <td width="50%" class="leftcolumn"><strong>Full name: </strong></td>
            <td width="50%"><input name="textfield" type="text" id="textfield" value="" maxlength="30" /></td>
          </tr>
          <tr>
            <td class="leftcolumn"><strong>Company name:</strong></td>
            <td><input name="textfield2" type="text" id="textfield2" value="" maxlength="50" /></td>
          </tr>
          <tr>
            <td class="leftcolumn"><strong>Email address:</strong></td>
            <td><input name="textfield3" type="text" id="textfield3" value="" maxlength="50" /></td>
          </tr>
          <tr>
            <td class="leftcolumn"><strong>Phone number: </strong></td>
            <td><input name="textfield4" type="text" id="textfield4" value="" maxlength="20" /></td>
          </tr>
          <tr>
            <td class="leftcolumn"><strong>Best time to contact:</strong></td>
            <td><input name="textfield5" type="text" id="textfield5" value="" maxlength="30" /></td>
          </tr>
          <tr>
            <td class="leftcolumn"><strong>Comments/Questions:</strong></td>
            <td><textarea name="textfield6" rows="10" id="textfield6"></textarea></td>
          </tr>
          <tr>
            <td class="leftcolumn"><strong>How did you hear about <br />
            Elite Shaolin Chi Kung?:</strong></td>
            <td><textarea name="textfield7" rows="5" id="textfield7"></textarea></td>
          </tr>
          <tr>
            <td class="leftcolumn">&nbsp;</td>
            <td><input type="submit" name="button" id="button" value="Submit" /></td>
          </tr>
          <tr>
            <td class="leftcolumn">&nbsp;</td>
            <td><p>
              <input name="recipient" type="hidden" id="recipient" value="info@elitechikung.com" />
              <input name="subject" value="elitechikung.com - Contact Form Submission" type="hidden">
  <input name="redirect" value="http://www.elitechikung.com/contact.html" type="hidden">
            </p>
              <p>via mail at<br>
                 Anthony Spinicchia<br>
                 72 W. Horizon Ridge Parkway, 120-191<br>
                 Henderson, NV 89012</p></td>
          </tr>
        </table>
       </form>  
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
