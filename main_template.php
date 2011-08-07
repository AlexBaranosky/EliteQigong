<?php
$main_template = <<<END
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <title>{{title}}</title>
  <link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div style="background-image:url(images/head_left.jpg); background-repeat:no-repeat; background-position:right; height:246px"></div></td>
    <td><div style="background-image:url(images/head_right.jpg); background-repeat:no-repeat; background-position:left; height:246px"></div></td>
  </tr>
</table>

  <table width="1260" border="0" cellspacing="5" cellpadding="0" align="center">
      <tr>
        <td colspan="6"><img src="images/space.gif" /></td>
      </tr>
      <tr>
        <td align="left"><a href="home.html"><img src="images/home.gif" alt="Home" border="0" title="Home"/></a></td>
        <td align="left"><a href="shaolin.html"><img src="images/shaolin.gif" alt="Shaolin" border="0" title="Shaolin"/></a></td>
        <td align="left"><a href="results.html"><img src="images/results.gif" alt="Results" border="0" title="Results"/></a></td>
        <td align="left"><a href="instruction.html"><img src="images/instruction.gif" alt="Instruction" border="0" title="Instruction"/></a></td>
        <td align="left"><a href="faq.html"><img src="images/faq.gif" alt="FAQ" border="0" title="FAQ"/></a></td>
        <td align="left"><a href="announcements.html"><img src="images/announcements.gif" title="Announcements" alt="Announcements" border="0" /></a></td>
        <td align="left"><a href="contact.html"><img src="images/contact.gif" alt="Contact" border="0" title="Contact"/></a></td>
      </tr>
      <tr>
        <td colspan="6"><img src="images/space.gif" height="30" /></td>
      </tr>
      <tr>
        <td align="left"><a href="chikung.html"><img src="images/chikung.gif" alt="Chi Kung" border="0" title="Chi Kung"/></a></td>
        <td align="left"><a href="zen.html"><img src="images/zen.gif" alt="Zen" border="0" title="Zen" /></a></td>
        <td align="left"><a href="master.html"><img src="images/master.gif" alt="Master" border="0" title="Master" /></a></td>
        <td align="left"><a href="chitherapy.html"><img src="images/chitherapy.gif" alt="Chi Therapy" border="0" title="Chi Therapy" /></a></td>
        <td align="left"><a href="books.html"><img src="images/books.gif" alt="Books" border="0" title="Books" /></a></td>
        <td align="left"><a href="more_info.html"><img src="images/more_info.gif" alt="More Info" border="0" title="More Info" /></a></td>
        <td align="left"><a href="other_info.html"><img src="images/other.gif" alt="Other" border="0" title="Other" /></a></td>
      </tr>
    </table>

    <div class="content">
    	{{{content}}}
    </div>
</body>
</html>
END;
?>
