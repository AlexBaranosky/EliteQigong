<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Results",
	'content' => <<<END
<div class="welcome">Results</div>
      <p><br/>
        
        Shaolin Chi Kung has been treasured and practiced for over one thousand years because it gets real, beneficial results.  The results of practicing Shaolin Arts are legendary in the history and literature of China.  I've included recent comments from some of my students to give the reader some perspective on the breadth and depth of the many benefits that are relevant to people today and how obtainable they are with proper instruction.  If you are interested I would encourage you to do internet searches on the results of scientific, medical and peer reviewed studies of the results of Chi Kung (Qigong) practice.  There are many available and I'm made aware of more and more each week as some people alert me to them.  Doing one's own research may provide greater encouragement for those who need it.  Please note that most of my students don't come to me because of scientific research but from personal referral from my other students whom they know. <br/><br/>
                       
        Over the last couple of years I had noticed that my fingers on both hands were becoming stiff and did not easily bend. They also were frequently tingling. After practicing Chi Kung after learning from you only months ago, it only took a few days before I no longer had any difficulty bending my fingers.  The stiffness and tingling were totally gone!  Jennifer, Sitka, AK  <br/><br/>
        
        I just can't tell you how happy I am to have learned Chi Kung from you.  I've suffered from Rheumatoid Arthritis and Glaucoma.  Since practicing as I've learned from you one year ago, I no longer suffer symptoms of Rheumatoid Arthritis.  However, I noticed that if I don't practice for even 2 days that the pain and swelling will return.  The solution is simple, do my daily practice and prevent the symptoms from returning.   Also, my doctor has informed me that the pressure in my eyes has returned to optimum.  I knew they were better before he confirmed that.  I notice that my eyes look brighter and healthier.  I'm so grateful. Alice, Sitka, AK <br/><br/>
        I took your course at the recommendation of 2 of my friends. Since starting to practice 3 months ago I feel that I am not as anxious about the little things that happen on a daily basis.  In teaching there are so many times during the day that you run into stressful situations with small children, yet I feel that I don't get so frustrated and have more patience with them.  I am reacting to things with much more calmness so work performance has improved.  I have much more energy during the day, and feel more positive. I have recommended this course to others and I wish everyone could take it.<br/><br/>
        
        You were an excellent instructor and I appreciated your kindness.  You truly show the results of Chi Kung!!  I am anxious to see myself six months from now!<br/>
        
  -Susan, Lakewood, CA  <br/><br/>
        
        I took this course due to the strong recommendation of a friend. Since starting the course I am sleeping better and I have noticed more focus at work. I have recommended this course to others and I'll continue to do!<br/>
        
  -Louise, Bellflower, CA  <br/><br/>
        
        I took your course in March and 6 months later I'm amazed at the results. I had a problem with Migraines for a long time. I've tried the various medications for migraines but haven't had real success with them. I practiced as you taught me and for 2 months I didn't get a Migraine!! For some reason I slacked off in my practice and they started to come back. The correlation between practicing your special Chi Kung and eliminating Migraine Headaches is unquestionable. I'm back practicing again and I'm not going to let them come back. My husband and I are looking forward to your next seminar.<br/>
        
  -Julie, Sitka, AK  <br/><br/>
        
        I'm so excited I just had to tell you this. I took your seminars in March and May of this year and I've been practicing ever since. Over the summer my doctor told me I had a very large Kidney Stone. I was worried on how this might pass so I decided to practice the "Nourishing Kidneys" Chi Kung pattern that you taught me. After several weeks of practice I returned to my doctor to have him examine the stone. He couldn't believe it when he told me it was gone! Another amazing story you can share with others. Thank you Sifu! I'm looking forward to you upcoming seminar in November.<br/>
        
  -Alice, Sitka, AK  <br/><br/>
  I took a  course with Sifu Anthony Spinicchia in 2006 and I've been practicing regularly since then and I'm delighted with the results.   I was amazed at the simplicity yet effectiveness of Mr. Spinicchia's instruction and I've experienced the results that I had hoped for.  I have had abundant energy and mental clarity since taking the course.</p>
      <p>As a Business Professor who studies Organizational Effectiveness, I'm always curious about methods that might enhance personal and professional development. I was very pleased to learn and understand how using Sifu Anthony's unique approach to practicing Chi Kung could do this.  Furthermore, the principles explained and demonstrated in the course are directly relevant to the needs of organizations and the individuals who compose them.  Human Resources and Management Professionals should strongly consider Mr. Spinicchia's approach to improving their organizational effectiveness. </p>
      <p>As a bonus from the course, I learned the Shaolin approach to Zen.  It is all about being simple, direct and effective.  What Professional or Organization couldn't use more simplicity, directness and effectiveness in their actions and communications?  Very few I suppose. </p>
      <p>I highly recommend the unique but effective approach that Sifu offers, because not only do I  understand it intellectually, I have experienced and embodied it </p>
      <p><strong>Ronald Purser  Ph.D</strong><br />
        Professor of Management<br />
        College of Business<br />
        San Francisco State University</p>
<p>As a Professional Chinese Acupunturist I took this course both for my own health and for Professional Expansion. I can't think of anything that wasn't covered in the class that I would have liked covered. I will be directing patients of mine to your future seminars. Come back soon!<br/>
        
        -Mary, Glenwood Springs, CO <br/><br/>
        
        I missed the start of your seminar in the morning because I had to go to the hospital emergency room. Due to your encouragement I attended the afternoon session and began feeling much better. By the end of the seminar I felt really good. The best that I have in 6 weeks.<br/>
        
        -Aspen, CO  <br/><br/>
        
        I had a problem with insomnia going back to 1999. I gave up on pills some years ago and wasn't sure if I would ever solve this problem. As a Surgical RN this had made doing my job a challenge. Within weeks of learning Shaolin Wahnam Chi Kung from Sifu Spinicchia I was sleeping better and getting the best rest I've had in years. My sleep now is deep and refreshing. I'm so grateful.
        <br/>
        -A.R., Long Beach, CA<br/><br/>
        
        For years I had serious problem with very difficult monthly periods. Since learning incredible Shaolin Wahnam Chi Kung from Sifu Spinicchia this has been reduced dramatically. Thank you! <br/>
        
        -Ashland, OR<br/><br/>
        
        I have to admit I was a little skeptical about what results I would get from practicing Chi Kung but I took your class because my business associates really encouraged me to try. Now I want to tell everyone what remarkable results I'm getting. Two weeks ago during our weekly class you taught me the Chi Kung Pattern "Pushing Mountains" and mentioned the many benefits from practicing it. One of them is how it is great for overcoming back problems. I have had severe back pain for years. In the morning I haven't even been able to bend over the sink to brush my teeth. After the first day of practice I felt improvement. In the two weeks since I've practiced this my back pain is gone! Wow!<br/>
        
        The course was perfect! The benefits have gone beyond relieving my back pain. It has also contributed to balancing my emotional response to high stress situations. All this in such a short time! I'm definitely recommending this course to others!<br/>
        
        -Ericka, Long Beach, CA <br/><br/>
        
        I took your course for Stress Management, to reduce pain from my Fibromyalgia and for a TMJ disorder. I have already felt positive benefits. Since starting I've been able to significantly reduce my intake of anti-inflammatory drugs and I'm noticing an increase in energy throughout the day.<br/>
        
        -Tracy, Long Beach, CA <br/><br/>
        
        I've lost 10 pounds since starting this course only 6 weeks ago. I know it is because my energy is getting balanced. I enjoyed this course and feel the pacing was appropriate. I certainly am recommending it to others.<br/>
        
        -Barry, Long Beach, CA  <br/><br/>
        
        For the last couple of years my doctors have recommended surgical removal of some of my insides in order to get rid of the severe, chronic menstrual pain that I've had. Within 2 weeks of learning from you my pain went away and it is still gone another month later. Wow! I can't keep the smile off my face from this. I look forward to another course with you and I'm absolutely encouraging others to learn from you! The benefits are emotional as well as physical.<br/>
        
        -Marie, Long Beach, CA  <br/><br/>
        
        I took your course to improve my quality of life, to relieve stress and to learn to have peaceful moments. I'm already recommending it to as many people as I can. During the short time that I have been practicing as you taught me I have noticed significant results that have improved my quality of life. These include- <br/>
        
        I sleep soundly throughout the night without waking up. 
        My energy level is much higher. 
        I'm more focused at work. 
        I have a greater commitment to maintaining a healthy diet. 
        My sex drive has increased. 
        Others have commented that I look less stressed. 
        The list goes on! 
        Thank you for your expertise and leadership. I love the light and spirit that you share with others. I have benefitted from your talents tremendously and I appreciate you more than you realize. With gratitude,<br/>
        
        -Ruth, Long Beach, CA  <br/><br/>
        
        I took your course to increase my energy level and overcome illness so that I could feel healthier and get off my medications. I will definitely recommend this course to several people I know that could benefit from it. I feel very grateful for all of the skills that I learned.<br/>
        
        -J.R. Basalt, CO <br/><br/>
        
        Of course I'll be recommending this course to my friends and co-workers.<br/>
        
        -Steve, Carbondale, CO<br/><br/>
        
        I took this course at the recommendation of a friend to help me overcome several health problems including shoulder pain and allergies. My comment after the seminar? What a treat!<br/>
        
        -K, Aspen, CO <br/><br/>
        
        Siheng Anthony. Thank you for coming to the brand new WIN Institute here in Basalt, CO to share the amazing art of Shaolin Chi Kung. You know how important this was to us. We look forward to having you here at our world class Institute, where we only provide the best to our clients, on a regular basis.<br/>
        
        -Chris. Basalt, CO www.winhealthinstitute.com <br/><br/>
        
        As an attorney who's worked on a several pressure packed cases this year I needed this course. I'll be bringing my wife with me when you return for your next seminar.<br/>
        
        -Bill. Snowmass Village, CO <br/><br/>
        
        I have been having severe leg pain for the last 4 months. This morning I didn't think I could even walk to get into your seminar today in Henderson, Nevada. Thank you very much for making my day and getting rid of my leg pain. It was gone within an hour of practicing Chi Kung. I'm sorry I kept repeating all day that I couldn't believe my leg pain was gone but it simply seemed unbelievable. I am very grateful to get rid of it, more than you'll ever know.<br/>
        
        -S.R. Columbus, Ohio<br/><br/>
        
        You made our day one we will always remember.  We felt so comfortable and enlightened by your presentation and self confidence.  The seminar exceeded our expectations. We hope we will see you again at another seminar or event.<br/>
        
        -B.R. Columbus, Ohio<br/><br/>
        
        Thank goodness for this course. I've already noticed the beginnings of positive changes. This class provided a great deal of information. Certainly I'll be talking about this and recommending it to my family and friends/co-workers. What more can I say without restating- Sifu Anthony certainly deserves the title, "Sifu"<br/>
        
        -Chris S. Sitka, Alaska  <br/><br/>
        
        If you come to Sitka again I hope to have my wife attend. I enjoyed your "positive energy" and methods of teaching. Thank you for the positive corrections to improve on the practice.<br/>
        
        -Mike R, Sitka, Alaska  <br/><br/>
        
        I attended this seminar because I have a demanding job-extremely long hours/often up all night and I've been finding it hard to maintain vitality and health under this level of stress. I feel that Shaolin Wahnam Chi Kung will help me achieve my health goals. Thank you for coming so far to teach us. The light in your eyes says more than any testimonial.<br/>
        
        -Sharon S. Sitka, Alaska  <br/><br/>
        
        I attended this seminar to be more healthy, happy, calm, and to enhance my spiritual life. (I have 6 children and suffer from migraines). I will recommend this seminar to others. Also, as a Christian I was very impressed with the 10 Shaolin Laws. I feel very at home with this and I know my spiritual life will be enhanced.<br/>
        
        -Julianne S. Sitka Alaska  <br/><br/>
        
        I took this seminar to improve health, physical, mental wellness and to bring balance to life. Also, to increase energy and physical stamina. I'm already experiencing clearer thinking, I'm more calm and happier and feeling more alive. Thank you! What an honor to have you come here to share your art.<br/>
        -Julie J. Sitka, Alaska  <br/><br/>
        
        I took this seminar to work on inner peace and improve general health. I feel my practice will relieve anxiety and improve energy. I enjoyed the simplicity of the art and I'm looking forward to the benefits.<br/>
        
        -Matt S. , Sitka, Alaska  <br/><br/>
        
        I took this course to help me in Life Fulfillment and to maintain health. I feel that this will help me achieve this.<br/>
        
        -Kent, Sitka, Alaska  <br/><br/>
        
        I took this course to improve my health on all levels and I would recommend it to others. I am a long time practitioner of meditation and this feels like a wonderful way to combine simple but powerful movements with a meditative breathing practice involving Chi. What could be better?<br/>
        
        -A.H., Sitka, Alaska  <br/><br/>
        
        I attended this seminar for 2 reasons. To increase energy and clear my system of toxins that manifest in sinus/nasal allergies. The biggest reason I attended was to join/support my husband who is very excited, encouraged and hopeful about the practice. After taking this seminar I would recommend it to others.<br/>
        
        -Mary K, Sitka, Alaska  <br/><br/>
        
        I took this course in a desire for health, happiness and more energy. After this course I feel my heart opened. I will recommend it to others!<br/>
        
        -Tess H., Sitka, Alaska <br/><br/>
        
        I came to this course because a friend recommended it and now I will recommend it. I started to feel Chi and I was calm and relaxed after each session.<br/>
        
        -Joann T., Sitka, Alaska  <br/><br/>
        
        I took this seminar for health improvement and I will now recommend it to friends, family and co-workers.<br/>
        
        -Kevin K., Sitka, Alaska  <br/><br/>
        
        I attended this seminar because I have seen my husband's health progress after taking another Wahnam West seminar down in Las Vegas. I'm always open to improving my life. Sifu, your energy is contagious. I enjoyed sharing the space with you. I feel energized and excited to experience continued Chi Flow. Looking forward to seeing you again in Sitka.<br/>
        
        -Jenn L., Sitka, Alaska  <br/><br/>
        
        I had a serendipitous moment-a pleasant surprise- while standing in line at the Mellow Day Café, there was Zach who introduced me to this nice person giving a Chi Kung seminar over the weekend and I knew I had to come. And I'm glad I did! I'm excited to continue to practice. I'm grateful that Sifu Anthony was able to visit Sitka and share this gift. I know there are fellow Sitkans here who are interested in continuing the practice. Enjoy! Relax-smile from the heart. Just enjoy and let Chi flow.<br/>
        
        -Kathleen M., Sitka, Alaska  <br/><br/>
        
        It was a terrific intro class and refreshes my practice.<br/>
        
        -Zach L., Sitka, Alaska  <br/><br/>
        
        I've felt unhealthy since I had strep throat over a year ago and have a continual runny nose. I'm looking for anything to help me feel healthy again, like I was before the strep throat. I absolutely already feel the energy flowing and a release. I will absolutely recommend this to others. My family is already curious, interested and asking questions. I love feeling the energy flow. It makes me feel more alive already which is wonderful after struggling for over a year now with not feeling healthy. Thank you!<br/>
        
        -Arika F., Sitka, Alaska  <br/><br/>
        
        I took this course because of concern for arthritis in my knees and somewhat in my hips. The knees are already much less painful even after standing for 15 minutes during the practice.<br/>
        
        I have learned more in the past 2 days than I have in 10 years. I already have 9 people in mind to recommend.<br/>
        
        -Alice S., Sitka, Alaska  <br/><br/>
        
        I took this course as a remedy for E.D. and also for general well being. I have high expectations that this will help me achieve my goals and I will recommend it to others. It has given me high hopes for improvement.<br/>
        
        -Name withheld<br/><br/>
        
        I had a problem with insomnia going back to 1999. I gave up on pills some years ago and wasn't sure if I would ever solve this problem. As a Surgical RN this had made doing my job a challenge. Within weeks of learning Shaolin Wahnam Chi Kung from Sifu Spinicchia I was sleeping better and getting the best rest I've had in years. My sleep now is deep and refreshing. I'm so grateful.
        <br/>
        -A.R., Long Beach, CA<br/><br/>
        
        I haven't been able to bend down on knees without pain for a long time. After only a couple of months of practice in a Wahnam West class I now bend on my knees without pain without even thinking about it. Amazing! 
        <br/>
        -P.H., Long Beach, CA<br/><br/>
        
        For years I had serious problem with very difficult monthly periods. Since learning incredible Shaolin Wahnam Chi Kung from Sifu Spinicchia this has been reduced dramatically. Thank you! 
        <br/>
        -Ashland, OR<br/><br/>
        
        Within 2 weeks of practice I was able to pass a lot of Kidney Stones with minimal discomfort. My doctor told me it was incredible. Thank you Sifu!
        <br/>
        -L.A. Mexicali, Baja California<br/><br/>
        
        I've practiced and taught different types of Qigong for many years but now I know that nothing compares to Shaolin Wahnam Qigong. The deep levels of relaxation and energy flow I've experienced during and after a Wahnam West seminar are like nothing I've experienced before. As a Medical Doctor I would recommend it to all my patients. Truly amazing!
        <br/>
        -J.L., Ashland, OR<br/><br/>
        
        I took Sifu Spinicchia's class at the recommendation of my Doctor. I'm glad I did. When people ask me why they should learn this incredible and convenient art I tell them, "Because it works". It's amazing what results you can get from a simple 15 daily session.
        <br/>
        -P.M., Long Beach, CA<br/><br/>
        
        I took a Chi Kung course here in Las Vegas before but I can say that it doesn't compare at all to Wahnam Chi Kung.
        <br/>
        -N.A., Las Vegas, NV<br/><br/>
        I took a Wahnam West seminar only 6 weeks ago and people already tell me that I look 10 years younger. Also, I feel great.
        <br/>
        -M.B., Sitka, AK<br/><br/>
        
        I never felt as much joy I did during our practice in class last week. So much joy coming from my heart.
        <br/>
        -L.B. Mexicali<br/><br/>
        
        I've taken other Qigong classes but none of them compare to Shaolin Wahnam West. The highest level that only specially selected advanced students attain in other courses is where Shaolin Wahnam West starts off! Amazing and beautiful. 
        <br/>
        -E.P. Mexicali<br/><br/>
        
        I took your course for a new experience and because I need major, new energy during this job changing time of life. You are a very patient, calming and knowledgeable teacher. I've already been forwarding information on your courses to a lot of people.
        <br/>
        -Louise, Long Beach, CA  <br/><br/>
        
        My mom convinced me to take this course to help reduce my stress/anxiety. I'm already recommending this course to others and I will continue to do so. 
        <br/>
        -Josh, Corona, CA  <br/><br/>
        
        I took your course for better health and energy. I'm already recommending this course to others. People have been saying, "Carol is getting in touch with her Chi". I'm looking forward to your next course.
        <br/>
        -Carol, Long Beach, CA <br/><br/>
        
        It took this course at the recommendation of one of your previous students for my health and personal improvement. I will recommend this course to others.
        <br/>
        -Nubia, Long Beach, CA <br/><br/>
        
        I really appreciate your sincerity and enthusiasm as a teacher. I'm recommending the course to others.
        <br/>
        -Lillian, Long Beach, CA <br/><br/>
      </p>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>