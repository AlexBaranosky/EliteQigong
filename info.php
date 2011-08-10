<?php
include_once('mustache.php');
include_once('main_template.php');

$dataForTemplate = array(
	'title' => "Ten Shaolin Laws",
	'content' => <<<END
    <p>The Ten Shaolin Laws are very important and  shouldn&rsquo;t be ignored by practitioners of our very special art.Â  The Laws were compiled and combined by my  teacher from wisdom passed down to him from previous masters and texts on  Shaolin Arts to make it a short and easy reference of important  principles. These principles have proven  to be important to adhere to in order to get not only the best results from  practice but to help students avoid problems as well.</p>
    
    <p>The Ten Shaolin Laws are  non-religious, and transcend all cultures and races, i.e. people of any culture  and race would agree that they promote values that are worthy and desirable.  Laws, in the Shaolin tradition, are not meant to be punitive or restrictive,  but as practical means to help followers achieve set aims and objectives; in  this case to help them attain the best possible results in practicing Shaolin  Chi Kung for health, joyful living, mind expansion and spiritual fulfillment.</p>
      
<p>There is no legal binding on the Ten Shaolin Laws; one cannot be prosecuted in a court of law if he breaks these laws. The binding is  moral and they are not forced upon the follower; the follower accepts them  because he chooses to because he believes they are helpful to him in his physical, emotional, mental and spiritual cultivation. If he breaks the laws, despite sufficient warnings, he may be asked to leave the Shaolin training, not as a punishment, but because the training is not suitable for him.</p>

<ol start="1" type="1">
    <li>Required to respect the Master, honor the Moral Way and love fellow disciples as brothers and sisters. </li>
    <li>Required to train the Shaolin arts diligently and to be physically and mentally healthy. (For those that are not yet healthy this gives them at least one goal in their practice)</li>
    <li>Required to be filial to parents, be respectful to the elderly, and protective of the young.</li>
    <li>Required to uphold righteousness, and to be both wise and courageous.</li>
    <li>Forbidden to be ungrateful and unscrupulous, ignoring the Laws of man and heaven. </li>
    <li>Forbidden to rape, molest, do evil, steal, rob, abduct or cheat. </li>
    <li>Forbidden to associate with wicked people; forbidden to do any sorts of wickedness.</li>
    <li>Forbidden to abuse power, be it official or physical; forbidden to oppress the good and bully the kind.</li>
    <li>Obliged to be humane, compassionate and spread love, and to realize everlasting peace and happiness for all people.</li>
    <li>Obliged to be chivalrous and generous, to nurture talents and pass on the Shaolin arts to deserving disciples. (Passing on the Shaolin Arts is only done by properly trained and certified individuals. It is irresponsible to attempt to pass on the Arts otherwise)</li>
</ol>
END
);

$m = new Mustache;
echo $m->render($main_template, $dataForTemplate);
?>
