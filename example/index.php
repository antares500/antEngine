<?php


include('../src/ant.inc.0.0.1.php');

$data = array(
	
	'title'		=> 'Ant',
	'subtitle'	=> 'Micro extensible template engine',
	'hero_image'=> '//bootstrap-themes.github.io/marketing/assets/img/iphone-to-iphone-sized.jpg',
	
	'avatar'	=> '//bootstrap-themes.github.io/marketing/assets/img/avatar-mdo.png',
	'opinion'	=> 'Task management. Calendars. Email. They all have one thing in common…literally no one enjoys managing them. Thanks to years of research, we can now predict every single thing you\'ll ever have to do or go to. Yeah, we\'re that good.',
	'name'		=> 'Mark Otto',
	'position'	=> 'Creator of Mochi',
	
	'info'		=> 'We\'ve been working for over 100 years to build the best possible app for all your needs. We\'re glad that others agree.',
	'dataBlock1'=> '92m',	'dataUnit1'	=> 'DOWNLOADS',
	'dataBlock2'=> '8m',	'dataUnit2'	=> 'REVIEWS',
	'dataBlock3'=> '78k',	'dataUnit3'	=> 'DEVELOPERS',
	'dataBlock4'=> '97%',	'dataUnit4'	=> 'HAPPINESS',
	
	'characteristics'	=> 'With over <strong>20 years of collective experience</strong>, we take the unthinkable and make it just a couple quick taps away.',
	
	'charTitle1'	=> 'Upload unlimited images',
	'charContent1'	=> 'We process all the images you upload and take full advantage of modern cloud based storage to host them at blazing fast speeds.',
	
	'charTitle2'	=> 'Tracked time savings',
	'charContent2'	=> 'This means you save tons of time by using our world class task manager and calendar and constantly reminds you how great it is.',
	
	'charTitle3'	=> 'Share from anywhere',
	'charContent3'	=> 'Do it over the cloud, from anywhere, on any device. Mochi is super fast and always available, to not only you, but all your friends',
	
	'charTitle4'	=> 'Use stickers and express yourself',
	'charContent4'	=> 'Share with emoji anyone in the world. We\'ve baked them directly into Mochi. These probably won\'t help with productivity though.',
);
$_lap = microtime();
echo ant::render_file('bootstrap.ant.tpl', $data);
echo $_lap - microtime();
#echo "\n";
#print_r($data);


?>