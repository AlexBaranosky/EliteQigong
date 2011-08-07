<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => FAQ,
	'content' => <<<END
<div class="welcome">FAQ</div>
    <br />
    <strong>Q:</strong> How can Shaolin Wahnam Chi Kung help me?<br/>
    <strong>A:</strong> We help you overcome any health problem and restore joy and energy to your life!<br /><br />
    <strong>Q:</strong> What will you teach me to do all this?<br />
    <strong>A:</strong> You will learn an enjoyable and easy to practice exercise you can practice on their own on a regular basis.<br /><br />
    <strong>Q:</strong> What is the "exercise"?<br />
    <strong>A:</strong> It is called Shaolin Wahnam Chi Kung.<br /><br />
    <strong>Q:</strong> What is Shaolin Wahnam Chi Kung?<br />
    <strong>A:</strong> Shaolin Wahnam Chi Kung is a world famous style of Chi Kung noted for being<br /><ul type="bullet"><li>enjoyable</li><li>easy</li><li>practical</li></ul>
    <strong>Q:</strong> What is Chi Kung?<br />
    <strong>A:</strong> Chi Kung is a ancient Art of Energy. Shaolin Chi Kung is the Art of Energy developed and refined by many famous masters at the world famous Shaolin Temple in China. Shaolin Wahnam Chi Kung is the distillation of the best of this tradition to make it very easy and relevant to the needs of people today. Wahnam West provides an easy to follow program for individuals and organizations.<br /><br />
    <strong>Q:</strong> Is Chi Kung like Tai Chi Chuan?<br />
    <strong>A:</strong> It is very similar but it is not a Martial Art. It is simple movements done in a gentle, slow meditative state of mind. It much less complicated than Tai Chi Chuan. The focus in Chi Kung is on relaxation. It can be called an exercise but it is a very gentle, slow and enjoyable "Meditative Exercise". It also embodies Zen because the practice is simple, direct and effective.<br /><br />
    <strong>Q:</strong> Do I have to practice on a regular basis to get results?<br />
    <strong>A:</strong> Yes. If you only practice during the class or seminar and never practice again you may find that they had an interesting and inspiring day but you cannot expect to get effective long term results. However, that is why we have designed your regular practice session to be very enjoyable, easy and carefree. After a 5 to 15 minute practice session you will feel very refreshed, no matter how they were feeling before the session. Thus, you will look forward to practicing.<br /><br />
    <strong>Q:</strong> Where does the name Wahnam come from?<br />
    <strong>A:</strong> The name was coined by my teacher the world famous Author and Shaolin Grandmaster Wong Kiew Kit, who resides in Malaysia. Grandmaster Wong named our school Shaolin Wahnam in gratitude to two of his own most special Shaolin teachers, Lai Chin Wah and Ho Fat Nam. Thus, Wah-nam. We carry on the name of Wahnam in gratitude and respect to our cherished teachers who preserved a very rare art so that we can benefit from it today.<br /><br /><br />
    <strong>Q:</strong> Does one need to face in a certain direction to practice Qigong?<br /><br />
    <strong>A:</strong> It is true that facing east is best but there are other factors to consider.  For example, if facing east requires you to stand a few feet away from and facing a wall then facing east wouldn&lsquo;t be best.  It would be better to face toward an open area.  You should follow the guidelines of the type of Chi Kung that you practice.  In some types of Chi Kung it is important to face east.  This can be because the extra benefit of facing east is necessary to help get results.  In a high level type of Chi Kung like Shaolin Wahnam Chi Kung not facing east isn&lsquo;t a hindrance.<br /><br />
    <strong>Q:</strong> Are there any dietary restrictions for practicing Chi Kung?<br /><br />
    <strong>A:</strong> As stated previously you should follow the guidelines of the style of Chi Kung that you practice.  In a high level Chi Kung like Shaolin Wahnam Chi Kung there are no dietary restrictions of any kind.<br /><br />
    <strong>Q:</strong> Can someone with a mental illness practice Chi Kung?<br /><br />
    <strong>A:</strong> Yes, but if someone has a severe emotional problem or mental illness they need to be personally taught by a competent instructor.  It is likely that the Chi Kung will need to be modified to suit the person&rsquo;s unique condition.<br /><br />
    <strong>Q:</strong> Can children practice Chi Kung?<br /><br />
    <strong>A:</strong> Yes, but they usually should be taught at a lower level than adults.  A competent instructor will be able to provide useful guidance to them. Although there is a science to Chi Kung which makes use of the Chinese Medicine Health Paradigm the instruction and practice of Chi Kung is an Art.  This is why a competent instructor is essential in order to obtain great results in a safe manner.<br /><br />
    <strong>Q:</strong> Are there any signs to watch for that help me know if &rsquo;Im practicing Chi Kung correctly?<br /><br />
    <strong>A:</strong> Certainly!  You should feel refreshed after your practice, no matter how you were feeling before you practiced.   If you do&rsquo;nt feel refreshed something is wrong with your practice.  What is wrong could be any number of things that are too numerous to list.  This is another reason that people should practice under the guidance of a Master.  They can consult with the Master as necessary.<br /><br />
    <strong>Q:</strong> What will I experience during a practice session of Chi Kung?<br /><br />
    <strong>A:</strong> You will feel very relaxed and at peace.  You may experience sensations like warmth or tingling in your hands or feet or in other parts of your body.  Your body may sway gently or at times vigorously.  You may not move at all but you will feel a profound stillness that is pleasurable.  What is important is that you enjoy yourself and leave behind concerns and worries about what you may experience.  It is counterproductive to critically analyze your experience or results each time you practice.  Just enjoy the practice and the results like overcoming illnesses will take care of themselves before too long.<br /><br />
    <strong>Q:</strong> Do I have to avoid eating or doing anything else before or after my daily 15 minute practice?<br /><br />
    <strong>A:</strong> Allow yourself 15 to 30 minutes after your practice before you take a shower.  You may take a shower right before your practice.  Also, try to wait about 30 minutes or so before making love.  This will allow the Chi that you have generated in your session to "settle" and not be drained away.  If you can&rsquo;t wait to make love then go right ahead and enjoy yourself.  Just be aware of this consideration in terms of your regular, daily practice.  As for eating, one may eat right before or after their practice in our style of Chi Kung.<br /><br />
    <strong>Q:</strong> I&rsquo;ve been practicing for several weeks now since learning from you and I&rsquo;ve noticed that I&rsquo;ve been passing a bit of gas recently.  Is this normal?<br /><br />
    <strong>A:</strong> Please keep in mind that as you progress in your practice your body will experience cleansing as toxins are gently flushed out of your body.  Temporary passing of gas or bad breath are just that, temporary, as your body cleanses.  You are experiencing a remarkable and natural detoxification.  You&rsquo;re doing well so carry on!<br /><br />
    <strong>Q:</strong> Can Chi Kung help people with addictions?<br />
    <strong>A:</strong> Yes, of course.  In fact in can be the most powerful factor in allowing people to overcome their addictions.  An addiction represents an energy blockage that causes the person to have compulsive behavior even when it is against their will.  Remove the blockage and the person&rsquo;s compulsions are removed because their energy is in proper balance.  The person may need to take further steps like being aware of bad habits and taking necessary action.  Don&rsquo;t confuse bad habits with addictions.<br /><br />
    <strong>Q:</strong> I&rsquo;m so inspired by learning about Chi Kung that I want to become a teacher so I can help others.  How can I become a teacher?<br /><br />
    <strong>A:</strong> Teachers in profound Arts are chosen, they don&rsquo;t choose themselves.  For your best benefit, focus on being a good student and enjoying the benefits.<br /><br />Generations of Shaolin Masters have passed down to us important time tested wisdom in the form of guidelines and rules for our benefit.  These guidelines help us and others avoid unwanted results.  Chi Kung is a powerful Art of profound depth.  It is very irresponsible to teach it before learning to practice successfully, being instructed in how to best teach it and also to be able to help students that may obtain unwanted results when necessary.  Becoming competent in practice takes time and cannot be rushed.  Please have some respect for the Art, the wisdom of the Masters and consideration for your would be students.  Realize that one cannot fully appreciate its depth after simply reading a book, watching a video or taking a class.  Good teachers of Chi Kung are good students first.  Good students typically aren&rsquo;t interested in being teachers but simply in practicing in order to obtain benefits in their own lives.  Be sure to adhere to the 10 Shaolin Laws found in the Appendix and note several of them including, &ldquo;Respect the Master&rdquo;, &ldquo;Be wise&rdquo;, &ldquo;Train the Arts diligently&rdquo;, etc.  In order to get good results from practice simply focus on being a good student and enjoying your practice.  As in all guidelines provided for your benefit please don&rsquo;t be reckless and disrespectful and think that you know better than the Master.<br /><br />Good students, those who listen to their teachers and practice faithfully, are able to be taught further and learn more and more of the seemingly endless treasure that is the Shaolin Arts.  Those who are not good students, including those who think they know better than the Master, deny themselves the opportunity to learn more.  They are not taught further mainly for their own good.<br /><br />
    <strong>Q:</strong> What Chi Kung techniques do you practice?<br /><br />
    <strong>A:</strong> I practice the Chi Kung techniques that I teach.<br /><br />
    <strong>Q:</strong> I&lsquo;ve tried practicing Chi Kung before but I didn&lsquo;t get any results.  Why would this be?<br /><br />
    <strong>A:</strong> One must consider three factors necessary for successful results in Chi Kung practice.  The Master, the Method (Art) and the Student.  If any of these three factors are lacking it isn&lsquo;t reasonable to expect good results.<br /><br /> 
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
