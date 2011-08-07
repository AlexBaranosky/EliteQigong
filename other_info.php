<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Elite Shaolin",
	'content' => <<<END
      <div id="welcome">Other Info</div><br/>
      <p align="center">All attendees and particpants in our courses, classes and consultations must agree to the requirements below. A document will be provided to participants to review again and sign. Please take the time to carefully review this document. Do not apply to participate in our courses if you do not agree to this. </p>
      <p align="center">Release and Waiver of Liability and Indemnity Agreement<br />
        for courses conducted, hosted or associated with </p>
      <p align="center">Anthony Spinicchia<br />
        <br />
        </p>
      <p align="center">Terms and conditions, disclaimer and release of liability for associated Anthony Spinicchia, Instructors, Affiliates, Wong Kiew Kit and any facilities that host Chi Kung classes, Chi Therapy, meetings or events.<br />
        Chi Kung is practiced gently and&nbsp;carefully and is not complicated.&nbsp; It is harmless unless&nbsp;someone recklessly disregards instruction or obvious warning signs of improper practice.&nbsp;Results can only be obtained by regular, consistent and correct practice.&nbsp; These factors are controlled by the practitioner.&nbsp; By applying to enroll in the courses given by Anthony Spinicchia you agree to hold associated instructors, affiliates, Sifu Wong Kiew Kit and facilities that host related classes, meetings&nbsp;or events&nbsp;harmless for any claims, legal or otherwise,&nbsp;of any kind made against them regarding instruction, results, consultation or any other action or inaction. &nbsp;If you have any concerns about practicing Chi Kung due to your health status or any illness that you may have you should consult&nbsp;your licensed Medical Physician before practicing Chi Kung.&nbsp;&nbsp; Upon completion of the course you will <u>not be</u> competent to instruct others in Chi Kung.&nbsp; Instruction in Chi Kung is only done responsibly by trained individuals.&nbsp;&nbsp;&nbsp;It is irresponsible and potentially harmful to others if you attempt to instruct or advise without being properly certified to do so.&nbsp; Upon completion of the course you will only be prepared to practice safely on your own.&nbsp; <br />
        </p>
      <p align="center"><strong>I HAVE READ THIS RELEASE AND WAIVER OF LIABILITY, ASSUMPTION OF RISK AND INDEMNITY AGREEMENT, FULLY UNDERSTAND ITS TERMS, UNDERSTAND THAT I HAVE GIVEN UP SUBSTANTIAL RIGHTS BY SIGNING IT, AND HAVE SIGNED IT FREELY AND VOLUNTARILY WTHOUT ANY INDUCEMENT, ASSURANCE, OR GUARANTEE BEING MADE TO ME AND INTEND MY SIGNATURE TO BE COMPLETE AND UNCONDITIONAL RELEASE OF ALL LIABILITY TO THE GREATEST EXTENT ALLOWED BY LAW.&nbsp;I agree that I will not teach and advise others in the practice of Chi Kung learned in this class unless I am specifically authorized to do so by Anthony Spinicchia or Wong Kiew Kit because it would be irresponsible and potentially harmful to others.&nbsp; I also agree that I will abide by the <a href="more_info.html">10 Shaolin Laws.</a></strong></p>
<p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p> 
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>