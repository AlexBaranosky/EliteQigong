<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Chi Kung",
	'content' => <<<END
<p>Chi Kung, also known as Qigong, is a family of Energy Arts that have been practiced since ancient times to the present for different purposes.  Yoga, when practiced as originally intended, is an example of an Energy Art.  Chi Kung has been practiced around the world in different cultures in different manners.  Chi Kung has been practiced in China for thousands of years. Different types of Chi Kung can be very different in methodology and results.</p>

<p>Shaolin Chi Kung is the type of Chi Kung that was developed and refined at the world famous Shaolin Temple located in Central China.  The original Shaolin Temple, an Imperial Temple where the Emperor would go to pray once a year, was visited about 1500 years ago by the famous Indian Prince, Bodhidharma (also known as Damo) who introduced the famous 18 Lohan Hands, as profound type of Chi Kung.  The purpose of this Chi Kung at that time was to enhance the spiritual cultivation of monks at the Temple.</p>

<p>Shaolin Wahnam Chi Kung is the type of Chi Kung that we practice and teach.  It was named Wahnam by my own teacher, the world famous Shaolin Grandmaster Wong Kiew Kit, to honor two of his most special Shaolin Masters, Sigung Lai Chin Wah and Sigung Ho Fatt Nam.</p>

<p>Shaolin Wahnam Chi Kung is non-religious and doesn�t involve chanting, special music, any type of prayer or special clothing.  Shaolin Chi Kung is gentle movements and breathing performed in a relaxed manner leaving the practitioner refreshed on several levels including physical, mental, emotional and spiritual.  For those not interested in the spiritual the other levels are more than enough to improve their quality of life.</p>

<p>Zen originated at Shaolin and is incorporated into Shaolin Wahnam Chi Kung.  Over the past 1500 years Shaolin Chi Kung has been refined to a remarkable level incorporating Zen philosophy.  The philosophy of Zen, �Simple, direct and effective� is embodied in Shaolin Wahnam Chi Kung.</p>

<h4>A Gentle, Meditative Exercise &mdash; an excerpt from &ldquo;The Wonders of Chi Kung&rdquo;</h4>

<p>I often describe the Shaolin Chi Kung that we practice and teach as a �gentle, meditative exercise�.  We can say exercise because there are bodily movements.  We say meditative because we are in a meditative state of mind when we practice.  Gentle because the movements, breathing and meditation are gentle.</p>

<p>Interestingly we don�t set out to meditate when we practice.  We simply relax and practice the movements and breathing and enjoy our Chi Kung.  As we practice we find we are in a meditative state of mind.  What does meditative state of mind mean?   As is typical in Chi Kung, descriptions are somewhat poor substitutes for actual experience but it means among other things-</p>

<ul type="bullet">
    <li>We aren�t in an agitated state of mind.  We are relaxed.</li>
    <li>We aren�t thinking about �problems� at work or other concerns elsewhere.  Even if a thought can come up about a �problem� we simply note it and �throw it away�.</li>
    <li>We feel deep pleasure and peace.</li>
    <li>We are focused.  The focus is on the pleasure of the practice itself.</li>
    <li>Our awareness is heightened.  Without trying we notice things nearby that we may not have noted in our typical day to day mindset when we may be rushing about.  Things like birds singing and the subtle, beautiful scent of flowers and plants we haven�t noticed before.  (with practice our awareness is heightened even when we are aren�t formally practicing Chi Kung)</li>
</ul>

<p>Our meditation isn�t forced and because of the profound development by generations of Shaolin Masters it is accomplished easily.  We don�t ever have to think of it as meditation.   Shaolin Masters weren�t and aren�t concerned with analyzing whether we are meditating or not.  The measure of a Shaolin Art is if it is effective and that is the Master�s concern.</p>

<p>We also may call it an exercise because we use movements.  An observer may think it is simple stretching and rotation of limbs.  However, we don�t breathe hard and our breath rate doesn�t go up as we practice as most people would associate with physical exercise.   The purpose of the movements isn�t physical.  It is energetic.  It is to open up energy channels and facilitate a smooth flow of energy in an effective way.  The physical movements accomplish this.  Their purpose isn�t to strain muscles in order to generate a muscular result.</p>

<p>Finally the Shaolin Chi Kung that we teach is gentle in all respects.  The meditation as explained above is gentle and not forced. The movements and associated breathing patterns are gentle.  The patterns and techniques that we teach in our classes and seminars are gentle.  There are some Shaolin Chi Kung practices that aren�t as gentle and can even be forceful but that are only taught to certain students under careful supervision as needed to accomplish a particular goal.</p>

<p>So, we can say that the Shaolin Chi Kung that our students enjoy is a gentle, meditative exercise.  But what does it accomplish?  It brings pleasure and other benefits both during the session and in our everyday lives.  When one considers the seemingly countless health benefits that Shaolin Chi Kung provides like overcoming numerous chronic illnesses, improving ones energy and preventing illnesses one can say that it is profound.  Please consider that according to Shaolin and Chinese philosophy health isn�t just physical but also emotional, mental and spiritual.  The 4 levels are directly related.  However one must practice our special Chi Kung to really appreciate its profundity.  Our students typically begin to appreciate the profundity during their first training session with us if not within a very short time.  Over time they may never stop marveling at the profundity of this �gentle, meditative, exercise�</p>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
