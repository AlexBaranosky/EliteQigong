<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Chi Therapy",
	'content' => <<<END
<div id="welcome">Chi Therapy</div>
<div align="center">
    <h4>A self-healing system that gives hope for those with severe and chronic health conditions!</h4>
      
    <p>Chi Therapy is an ancient health recovery therapy proven over thousands of years that emphasizes using energy (Chi) to help a participant recover from illness in a rapid and effective manner. The therapy utilizes the Chinese Medical Paradigm which emphasizes the restoration of a smooth flow of energy in a person to achieve health. Specifically the energy blockages that are causing the participant&rsquo;s illness are removed and a healthy energy flow is restored. The therapist will open the participant&rsquo;s relevant energy points then transmit and promote energy (Chi) flow throughout the body and specific area(s). The participant&rsquo;s treatment will be accompanied by a specific and tailored prescription of follow up Chi Kung exercises to enhance and assist the recovery. The benefits and results are remarkable.</p>

    <p>Chi Therapy usually requires up to 6 one hour sessions that may be weekly, every two weeks, monthly or by a schedule dictated by both the need and availability of the participant and therapist.  After the first session an estimate on the number of sessions required will be given but keep in mind it is an estimate and may not be accurate due to speed of progress made by the participant.</p>

    <p>Chi Therapy is appropriate for a myriad number of conditions and especially for those suffering pain.  Please contact us via the course application  to inquire about the suitability of your condition for Chi Therapy.  Please state that you are inquiring about Chi Therapy.<br /><br />No special diet or herbal supplements are required with Chi Therapy and lifestyle restrictions are rare.<br /><br />If one is already receiving Medical Treatment for a condition Chi Therapy is a fantastic complement to enhance recovery.<br /><br />Please consider that the most important element of recovery is the participant&rsquo;s adherence to the twice daily follow up practice of Chi Kung exercises specifically prescribed for the participant&rsquo;s condition.  This involves 15 minute practice sessions each morning and evening.  You will be trained in how to practice successfully on your own.  The practice is easy and enjoyable.<br /><br />Chi Therapy is provided by Sifu Anthony Spinicchia who received his training from world famous Shaolin Grandmaster Wong Kiew Kit over many years.  Sifu Anthony is certified to provide these services by Grandmaster and has helped many people recover from difficult conditions.</p>

    <h4>What is so special about your Chi Therapy?</h4>
    <p>Chi Therapy provided by Sifu Anthony Spinicchia is very special by comparison to other therapies.  Our Chi Therapy utilizes Shaolin Wahnam Chi Kung which is famous for being the best and most effective Chi Kung available.  Shaolin Arts are famous throughout history as being the best.  Shaolin Wahnam Chi Kung is a distillation of the best of Shaolin Chi Kung to make it even more direct and effective while also being safe.  Our Chi Therapy is provided by Sifu Anthony Spinicchia who is specially trained by Shaolin Grandmaster Wong Kiew Kit to perform these services.  Sifu Anthony continues to refine the effectiveness of his practice under the direct guidance of Grandmaster Wong.  Sifu Anthony is an inner chamber disciple of Grandmaster Wong</p>

    <h4>What is the difference in Chi Therapy sessions with Sifu Anthony and simply taking one of his regular classes or seminars?</h4>
    <p>Both are very effective but Chi Therapy is very direct in targeting the condition and has the added benefits of direct opening of energy points and transmission of Chi to the participant.  Also a custom Chi Kung practice is prescribed and taught to the participant.  Chi Therapy sessions involve direct Chi transmission, training and follow up practice.  In regular classes and seminars ample time is available and allotted for discussion of Chi Kung philosophy, guidelines, life application, etc.  There is no time for this in Chi Therapy sessions thus this is generally not provided.  Participants receive clear instruction and guidance in how to perform their daily follow up practice.  All they have to do is continue to practice as instructed.</p>

    <h4>How many sessions are required for Chi Therapy?</h4>
    <p>In many cases Chi Therapy treatment will require from 3 to 6 months of personalized therapy provided by the therapist. This may invovle from 6 to 8 one hour sessions. The relief of a participant&rsquo;s condition(s) would hopefully, and in most cases, come much sooner, sometimes immediatly, but it is best that the therapy continue for a period of time beyond initial relief.</p>
</div>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
