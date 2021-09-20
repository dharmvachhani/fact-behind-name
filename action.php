<?php
    
  $name = $_GET['name'];
  

     //$a=array("kind drgdghfh","clever dhfdghgf","fair gdfg","nice gsgdfgdfgdfgdfg gdg","preety gdgdfg","handsome","lovely","attitude","fighter","happy");


     $a=array(
     "Beautiful",
"Incredible",
"Splendid.",
"Victory",
"Listen",
"Speechless",
"Serendipity",
"Life.",
"Positivity",
"Sparkle",
"Chill",
"Boom",
"Ambivert",
"Sunkissed",
"Soul",
"Aquaholic",
"Happy",
"OPTIMISM",
"Happiness",
"Grateful",
"Savage",
"Brace.",
"Serendipity",
"Escape",
"Hope",
"Free",
"Smile",
"Comfy",
"Bliss",
"Lineage",
"Ecstasy",
"Cuddles",
"Thankful",
"Accomplishment",
"Eating",
"Newbie",
"Aquatic",
"Fierce",
"Vibes",
"Dream",
"Joy",
"Golden",
"Explore",
"Eden",
"Ageless",
"Relax",
"Enigmatic",
"Reflection",
"Scorching",
"Calm.",
"Unpredictable",
"Lucky",
"Balance",
"Savoury",
"Kind-hearted",
"Think",
"Para-para-paradise",
"Blissful",
"Countdown",
"Bookworm",
"Thrilled",
"Freedom",
"Buddies",
"Obsessed",
"Wanderer",
"Dreaming",
"Sick",
"Simplify.",
"Flawless",
"Weeeeeeekend",
"Different.",
"Brotherhood",
"Ecstatic",
"Abracadabra!",



     );





     $fact= $a[array_rand($a)];
     
           

      $im = imagecreatefromjpeg("aa.jpg");
       
      $width1 = imagefontwidth(12) * strlen($name);
      $width2 = imagefontwidth(12) * strlen($fact);

      $x = 240 - ($width1/ 2);
      $x2 = 240 - ($width2/2);
      
       
      $backgroundColor = imagecolorallocate ($im, 200, 200, 200);
       
      $textColor = imagecolorallocate ($im, 102, 0,102);
       
      imagestring ($im, 12, $x, 200, $name, $textColor);
      
      imagestring ($im, 12, $x2, 260, $fact, $textColor);
     
      $aaa = imagejpeg($im);

       $aa = imagejpeg($im,"name.jpg",100);

    

   
?>