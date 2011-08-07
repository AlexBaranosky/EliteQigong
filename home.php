<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Elite Shaolin",
	'content' => <<<END
<div class="welcome">Welcome!</div>

<p>Shaolin Wahnam Chi Kung is the most remarkable and practical Art in the world. &nbsp;Probably more important to you, is that it can make a meaningful improvement in your life.&nbsp; &nbsp;This is my goal as an instructor in the special Art and this website is dedicated to explaining why this is true and how you can learn more.&nbsp; However, only personal experience will allow you to fully appreciate this special and profound Art.</p>

<p>The typical result of those that learn and practice our special gentle exercise is tangible improvement in their lives.&nbsp; The results vary according to the needs and aspirations of students.</p>

<p>Through history our special, non-religious, Chi Kung was only taught to the most elite members of China, some of whom were not aware of the breadth or the background and philosophy that I provide here, in my books and in my lectures. However, one doesn&rsquo;t even need to have the knowledge to enjoy the benefits of our special Chi Kung. One simply needs to learn and practice this gentle exercise 15 minutes a day.&nbsp; &nbsp;</p>

<p>Notwithstanding the traditionally exclusive environment that this Art was practiced and preserved in, it is applicable and accessible today to people from all walks of life.&nbsp; Whether you are a Business Executive, student, husband, father, mother, wife,  artist, athlete, retiree or someone suffering and struggling with a chronic or painful health condition, this simple and practical Art has something to offer you.&nbsp; I encourage you to contact me to discuss how you may benefit from practice.</p>

<p>I&rsquo;m based in the Western USA and conduct public lectures, seminars (open to the public), special courses for groups and organizations, private lessons, as well as providing special, personalized  <a href="chitherapy.html">Chi Therapy</a> for those suffering from chronic and painful health conditions. You can learn a lot about the relevancy of Chi Kung in my book, <a href="https://www.createspace.com/3442294">The Wonders of Chi Kung</a><a href="books.html"></a>.</p>

<p>Our Art doesn&rsquo;t include music, chanting, special clothing or rituals.&nbsp; It is non-religious.&nbsp; It is, however, Zen, which means its focus is on real and practical benefits for practitioners.&nbsp; It <u>isn&rsquo;t</u> New Age.&nbsp; In fact, it is better described as &ldquo;Old Age&rdquo; but, because it is a Zen art, it means it is still relevant to people living in the modern, fast paced world.&nbsp;</p>

<p>Some years ago my honored teacher asked me to teach this Art to deserving students so they could also improve their lives.&nbsp; This is what I&rsquo;ve dedicated myself to and my gift is the many heartwarming stories of <a href="results.html">results</a> that my students tell me they experience in their lives.&nbsp; I hope that you will consider what our special Art can do to improve your quality of life and help you reach your own personal goals.&nbsp; I look forward to meeting you.</p>

<p>If you would like to be informed of upcoming events in your area or would like to receive special articles on Chi Kung please go to the contact page and submit your info.</p>

<p>Please enjoy this site and  <a href="contact.html">contact me</a> with questions on how our special Art can benefit your life.</p>
<p>Sincerely,</br />
Anthony Spinicchia</p>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
