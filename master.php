<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Master",
	'content' => <<<END
	<img style="float: left; margin-right: 20px; margin-bottom: 20px;" src="images/master_image.jpg" />
	
    <p>Sifu Anthony Spinicchia has been practicing Shaolin Arts since 2000 as a disciple of the world famous Shaolin Grandmaster Wong Kiew Kit.  Sifu was dedicated in his practice and excelled to the point that he became of one Grandmaster Wong's best students.   Under the direction of Grandmaster Wong, Sifu began to teach the special Arts in 2004. Since 2000 Sifu has traveled numerous times to Grandmaster Wong's home in remote Malaysia to learn from him in hundreds of hours of instruction.  Also, since 2005 Sifu has hosted Grandmaster every year in his home in the USA for more personal instruction.  During these visits with Grandmaster Wong, Sifu has the honor of spending weeks at a time receiving personal and in depth instruction in the seemingly unfathomably profound Arts and Philosophy of Shaolin.  The focus of the training is how best to understand, practice, apply and transmit the Arts to deserving students so they can improve their lives to attain health, peace, joy and fulfillment.</p>
	
        <p style="clear: both;">A message from Anthony Spinicchia-</p>
        
        <p>Eleven years ago I had difficulty doing my job effectively. I held a position as a Corporate Salesmen that required intensive travel. My energy and effectiveness were reduced due to some chronic illnesses that I was suffering. I suffered from painful asthma that was aggravated as I tried to breathe the cabin air on airplanes. I suffered from insomnia which reduced my energy during the day. Finally I also had a painful heart condition called Mitral Valve Prolapse.<br /><br />No cures in Western Medicine were to be found so in 2000 I traveled to a remote area of Malaysia to learn Shaolin Wahnam Chi Kung from a world famous author and teacher. Within months of regular practice all of my conditions disappeared never to return again. One year later an M.D. examined me and told me she couldn't believe I ever had my heart problem. Furthermore, headaches and stress related illnesses disappeared from my life never to return.<br /><br />Since 2000 I've traveled frequently to Malaysia to learn and train under the world famous Author and Shaolin Grandmaster Wong Kiew Kit. Grandmaster Wong was named Chi Kung Master of the Year in 1997 by the World Chi Kung Congress in San Francisco and is the author of 10 books including the best selling, Art of Chi Kung.<br /><br />After a couple of years my teacher asked me to train under him to become a teacher of this amazing Art in order to bring it to the United States. I did and in 2004 I began to teach individuals and small groups. The reactions and results encouraged me to bring our special art to as many people as I could to help improve their lives.</p>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
