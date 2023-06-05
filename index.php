<?php
//here I try to find x in y=(0.5*(x^2))-3
$x;
$y;
function uravnenie ($arg){ 
    $y=(0.5*($arg*$arg))-3;
    return $y;
    
}

echo "f(6)=".uravnenie (6);
echo "<br>";
echo uravnenie (7);
echo "<br>";
echo uravnenie (8);
echo "<br>";

//next step -- make the graphic
?>

<svg version="1.1"
     baseProfile="full"
     width="700" height="600"
     xmlns="http://www.w3.org/2000/svg">

   <rect width="100%" height="100%" fill="white" />
  
   <?php // отрисовка координатной сетки. draw coordinate grid.
   for ($step=50; $step<=700;$step=$step+50){
   echo '<line x1="'.$step.'" y1="0" x2="'.$step.'" y2="600" stroke="black" style=" stroke-opacity: 0.6" />';
   echo '<line x1="0" y1="'.$step.'" x2="700" y2="'.$step.'" stroke="black" style=" stroke-opacity: 0.6" />';   
   
   }
   
   
   ?>
   <line x1="0" y1="400" x2="700" y2="400" stroke="black" /> <!--axis x-->
   <line x1="670" y1="390" x2="700" y2="400" stroke="black" /><!--arrow -->
   <line x1="670" y1="410" x2="700" y2="400" stroke="black" /><!--arrow -->
   <line x1="350" y1="0" x2="350" y2="600" stroke="black" /> <!--axis y -->
   <line x1="350" y1="0" x2="340" y2="30" stroke="black" /> <!--arrow -->
   <line x1="350" y1="0" x2="360" y2="30" stroke="black" /> <!--arrow -->
   
  <text x="360" y="430" font-size="30" text-anchor="middle" fill="black">0</text>
  <text x="410" y="430" font-size="30" text-anchor="middle" fill="black">1</text>
  <text x="670" y="430" font-size="30" text-anchor="middle" fill="black">x</text>
  <text x="370" y="20" font-size="30" text-anchor="middle" fill="black">y</text>
  
  <?php // отрисовка графика по отдельным точкам-пикселам. draw graph as separate points, in a "pixel-style".
    for ($x=-7; $x<=14; $x=$x+0.02){
        $xScale= ($x*50)+350;
        $y = uravnenie ($x);
        if ($y<0){
            $yScale= 400 + ($y*(-50));
        }elseif ($y == 0){
            $yScale= 300;
        }else{
            $yScale= 400 - ($y*50);
        }
        
        echo '<rect x="'.($xScale-1).'" y="'.($yScale-1).'" width="3" height="3" stroke="green" />';
    }
    //next step -- is to make this graph drawer in OOP -style
?>
</svg>

<div>// So, now try to build your own graph of a function...</div>