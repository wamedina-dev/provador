<?php
$i = 1;
$pNota=0; $mNota=0; $gNota=0; $ggNota=0; $xgNota=0;

$sqlT = mysqli_query($db,"SELECT * FROM tabela WHERE id = '".$table."'");
$tabela = mysqli_fetch_array($sqlT);
$sqlTm = mysqli_query($db,"SELECT * FROM tamanho ");
$tamanhos = mysqli_fetch_array($sqlTm);
$sqlMd = mysqli_query($db,"SELECT * FROM medida  WHERE id_tabela = '".$table."'");
$categ = $tabela['categoria'];

while($medidas = mysqli_fetch_array($sqlMd)){

  $gap1 = $medidas['medida2'] - $medidas['medida1'];
  $gap2 = $medidas['medida3'] - $medidas['medida2']; $gap2 <= 0 ? $gap2 = $gap1 : $gap2;
  $gap3 = $medidas['medida4'] - $medidas['medida3']; $gap3 <= 0 ? $gap3 = $gap2 : $gap3;
  $gap4 = $medidas['medida5'] - $medidas['medida4']; $gap4 <= 0 ? $gap4 = $gap3 : $gap4;
  $gap5 = $medidas['medida6'] - $medidas['medida5']; $gap5 <= 0 ? $gap5 = $gap4 : $gap5;
  $gap6 = $medidas['medida7'] - $medidas['medida6']; $gap6 <= 0 ? $gap6 = $gap5 : $gap6;
  $gap7 = $medidas['medida8'] - $medidas['medida7']; $gap7 <= 0 ? $gap7 = $gap6 : $gap7;

  $med1b1 = $medidas['medida1'] - ($gap1/2); $med1a1 = $medidas['medida1'] + ($gap1/2); 
  $med2b1 = $medidas['medida2'] - ($gap1/2); $med2a1 = $medidas['medida2'] + ($gap2/2); 
  $med3b1 = $medidas['medida3'] - ($gap2/2); $med3a1 = $medidas['medida3'] + ($gap3/2); 
  $med4b1 = $medidas['medida4'] - ($gap3/2); $med4a1 = $medidas['medida4'] + ($gap4/2); 
  $med5b1 = $medidas['medida5'] - ($gap4/2); $med5a1 = $medidas['medida5'] + ($gap5/2); 
  $med6b1 = $medidas['medida6'] - ($gap5/2); $med6a1 = $medidas['medida6'] + ($gap6/2); 
  $med7b1 = $medidas['medida7'] - ($gap6/2); $med7a1 = $medidas['medida7'] + ($gap7/2); 
  $med8b1 = $medidas['medida8'] - ($gap7/2); $med8a1 = $medidas['medida8'] + ($gap7/2); 

  $med1b = $medidas['medida1'] - $gap1; $med1a = $medidas['medida1'] + $gap1; 
  $med2b = $medidas['medida2'] - $gap1; $med2a = $medidas['medida2'] + $gap2; 
  $med3b = $medidas['medida3'] - $gap2; $med3a = $medidas['medida3'] + $gap3; 
  $med4b = $medidas['medida4'] - $gap3; $med4a = $medidas['medida4'] + $gap4; 
  $med5b = $medidas['medida5'] - $gap4; $med5a = $medidas['medida5'] + $gap5;
  $med6b = $medidas['medida6'] - $gap5; $med6a = $medidas['medida6'] + $gap6;
  $med7b = $medidas['medida7'] - $gap6; $med7a = $medidas['medida7'] + $gap7;
  $med8b = $medidas['medida8'] - $gap7; $med8a = $medidas['medida8'] + $gap7;

  
if($med[$i] > $med1a && $med[$i] <= ($med1a + 1)){ 
  $p[$i]['seloD1'] = "selo-x.png"; $p[$i]['msgD1'] = "Apertado";$pNota = $pNota + 0; $p[$i]['guia']="fita-".$categ.$tipo."030".$i.".png"; 
}elseif($med[$i] >= $med1a1 && $med[$i] <= $med1a){ 
  $p[$i]['seloD1'] = "selo-o.png"; $p[$i]['msgD1'] = "Levemente Justo"; $pNota = $pNota + 2; $p[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] < $med1a1 && $med[$i] >= $medidas['medida1']){ 
  $p[$i]['seloD1'] = "selo-v.png"; $p[$i]['msgD1'] = "Ideal"; $pNota = $pNota + 3; $p[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med1b1 && $med[$i] < $medidas['medida1']){ 
  $p[$i]['seloD1'] = "selo-v.png"; $p[$i]['msgD1'] = "Levemente largo"; $pNota = $pNota + 2; $p[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med1b && $med[$i] < $med1b1){ 
  $p[$i]['seloD1'] = "selo-o.png"; $p[$i]['msgD1'] = "Levemente largo"; $pNota = $pNota + 2; $p[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] <= ($med1b - 1)){ 
  $p[$i]['seloD1'] = "selo-o.png"; $p[$i]['msgD1'] = "Largo"; $pNota = $pNota + 1; $p[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}else{ 
  $p[$i]['seloD1'] = "selo-x.png"; $p[$i]['msgD1'] = "Não recomendado";$pNota = $pNota - 1;$p[$i]['guia']="fita-".$categ.$tipo."030".$i.".png";}


if($med[$i] > $med2a && $med[$i] <= ($med2a + 1)){ 
  $m[$i]['seloD1'] = "selo-x.png"; $m[$i]['msgD1'] = "Apertado";$mNota = $mNota + 0; $m[$i]['guia']="fita-".$categ.$tipo."030".$i.".png"; 
}elseif($med[$i] >= $med2a1 && $med[$i] <= $med2a){ 
  $m[$i]['seloD1'] = "selo-o.png"; $m[$i]['msgD1'] = "Levemente Justo"; $mNota = $mNota + 2; $m[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] < $med2a1 && $med[$i] >= $medidas['medida2']){ 
  $m[$i]['seloD1'] = "selo-v.png"; $m[$i]['msgD1'] = "Ideal"; $mNota = $mNota + 3; $m[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med2b1 && $med[$i] < $medidas['medida2']){ 
  $m[$i]['seloD1'] = "selo-v.png"; $m[$i]['msgD1'] = "Levemente largo"; $mNota = $mNota + 2; $m[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med2b && $med[$i] < $med2b1){ 
  $m[$i]['seloD1'] = "selo-o.png"; $m[$i]['msgD1'] = "Levemente largo"; $mNota = $mNota + 2; $m[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] <= ($med2b - 1)){ 
  $m[$i]['seloD1'] = "selo-o.png"; $m[$i]['msgD1'] = "Largo"; $mNota = $mNota + 1; $m[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}else{ 
  $m[$i]['seloD1'] = "selo-x.png"; $m[$i]['msgD1'] = "Não recomendado";$mNota = $mNota - 1;$m[$i]['guia']="fita-".$categ.$tipo."030".$i.".png";}


if($med[$i] > $med3a && $med[$i] <= ($med3a + 1)){ 
  $g[$i]['seloD1'] = "selo-x.png"; $g[$i]['msgD1'] = "Apertado";$gNota = $gNota + 0; $g[$i]['guia']="fita-".$categ.$tipo."030".$i.".png"; 
}elseif($med[$i] >= $med3a1 && $med[$i] <= $med3a){ 
  $g[$i]['seloD1'] = "selo-o.png"; $g[$i]['msgD1'] = "Levemente Justo"; $gNota = $gNota + 2; $g[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] < $med3a1 && $med[$i] >= $medidas['medida3']){ 
  $g[$i]['seloD1'] = "selo-v.png"; $g[$i]['msgD1'] = "Ideal"; $gNota = $gNota + 3; $g[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med3b1 && $med[$i] < $medidas['medida3']){ 
  $g[$i]['seloD1'] = "selo-v.png"; $g[$i]['msgD1'] = "Levemente largo"; $gNota = $gNota + 2; $g[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med3b && $med[$i] < $med3b1){ 
  $g[$i]['seloD1'] = "selo-o.png"; $g[$i]['msgD1'] = "Levemente largo"; $gNota = $gNota + 2; $g[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] <= ($med3b - 1)){ 
  $g[$i]['seloD1'] = "selo-o.png"; $g[$i]['msgD1'] = "Largo"; $gNota = $gNota + 1; $g[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}else{ 
  $g[$i]['seloD1'] = "selo-x.png"; $g[$i]['msgD1'] = "Não recomendado";$gNota = $gNota - 1;$g[$i]['guia']="fita-".$categ.$tipo."030".$i.".png";}


if($med[$i] > $med4a && $med[$i] <= ($med4a + 1)){ 
  $gg[$i]['seloD1'] = "selo-x.png"; $gg[$i]['msgD1'] = "Apertado";$ggNota = $ggNota + 0; $gg[$i]['guia']="fita-".$categ.$tipo."030".$i.".png"; 
}elseif($med[$i] >= $med4a1 && $med[$i] <= $med4a){ 
  $gg[$i]['seloD1'] = "selo-o.png"; $gg[$i]['msgD1'] = "Levemente Justo"; $ggNota = $ggNota + 2; $gg[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] < $med4a1 && $med[$i] >= $medidas['medida4']){ 
  $gg[$i]['seloD1'] = "selo-v.png"; $gg[$i]['msgD1'] = "Ideal"; $ggNota = $ggNota + 3; $gg[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med4b1 && $med[$i] < $medidas['medida4']){ 
  $gg[$i]['seloD1'] = "selo-v.png"; $gg[$i]['msgD1'] = "Levemente largo"; $ggNota = $ggNota + 2; $gg[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med4b && $med[$i] < $med4b1){ 
  $gg[$i]['seloD1'] = "selo-o.png"; $gg[$i]['msgD1'] = "Levemente largo"; $ggNota = $ggNota + 2; $gg[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] <= ($med4b - 1)){ 
  $gg[$i]['seloD1'] = "selo-o.png"; $gg[$i]['msgD1'] = "Largo"; $ggNota = $ggNota + 1; $gg[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}else{ 
  $gg[$i]['seloD1'] = "selo-x.png"; $gg[$i]['msgD1'] = "Não recomendado";$ggNota = $ggNota - 1;$gg[$i]['guia']="fita-".$categ.$tipo."030".$i.".png";}


if($med[$i] > $med5a && $med[$i] <= ($med5a + 1)){ 
  $xg[$i]['seloD1'] = "selo-x.png"; $xg[$i]['msgD1'] = "Apertado";$xgNota = $xgNota + 0; $xg[$i]['guia']="fita-".$categ.$tipo."030".$i.".png"; 
}elseif($med[$i] >= $med5a1 && $med[$i] <= $med5a){ 
  $xg[$i]['seloD1'] = "selo-o.png"; $xg[$i]['msgD1'] = "Levemente Justo"; $xgNota = $xgNota + 2; $xg[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] < $med5a1 && $med[$i] >= $medidas['medida5']){ 
  $xg[$i]['seloD1'] = "selo-v.png"; $xg[$i]['msgD1'] = "Ideal"; $xgNota = $xgNota + 3; $xg[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med5b1 && $med[$i] < $medidas['medida5']){ 
  $xg[$i]['seloD1'] = "selo-v.png"; $xg[$i]['msgD1'] = "Levemente largo"; $xgNota = $xgNota + 2; $xg[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med5b && $med[$i] < $med5b1){ 
  $xg[$i]['seloD1'] = "selo-o.png"; $xg[$i]['msgD1'] = "Levemente largo"; $xgNota = $xgNota + 2; $xg[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] <= ($med5b - 1)){ 
  $xg[$i]['seloD1'] = "selo-o.png"; $xg[$i]['msgD1'] = "Largo"; $xgNota = $xgNota + 1; $xg[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}else{ 
  $xg[$i]['seloD1'] = "selo-x.png"; $xg[$i]['msgD1'] = "Não recomendado";$xgNota = $xgNota - 1;$xg[$i]['guia']="fita-".$categ.$tipo."030".$i.".png";}

$m6Nota = 0;
if($med[$i] > $med6a && $med[$i] <= ($med6a + 1)){ 
  $m6[$i]['seloD1'] = "selo-x.png"; $m6[$i]['msgD1'] = "Apertado";$m6Nota = $m6Nota + 0; $m6[$i]['guia']="fita-".$categ.$tipo."030".$i.".png"; 
}elseif($med[$i] >= $med6a1 && $med[$i] <= $med6a){ 
  $m6[$i]['seloD1'] = "selo-o.png"; $m6[$i]['msgD1'] = "Levemente Justo"; $m6Nota = $m6Nota + 2; $m6[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] < $med6a1 && $med[$i] >= $medidas['medida6']){ 
  $m6[$i]['seloD1'] = "selo-v.png"; $m6[$i]['msgD1'] = "Ideal"; $m6Nota = $m6Nota + 3; $m6[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med6b1 && $med[$i] < $medidas['medida6']){ 
  $m6[$i]['seloD1'] = "selo-v.png"; $m6[$i]['msgD1'] = "Levemente largo"; $m6Nota = $m6Nota + 2; $m6[$i]['guia']="fita-".$categ.$tipo."010".$i.".png";
}elseif($med[$i] >= $med6b && $med[$i] < $med6b1){ 
  $m6[$i]['seloD1'] = "selo-o.png"; $m6[$i]['msgD1'] = "Levemente largo"; $m6Nota = $m6Nota + 2; $m6[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}elseif($med[$i] <= ($med6b - 1)){ 
  $m6[$i]['seloD1'] = "selo-o.png"; $m6[$i]['msgD1'] = "Largo"; $m6Nota = $m6Nota + 1; $m6[$i]['guia']="fita-".$categ.$tipo."020".$i.".png";
}else{ 
  $m6[$i]['seloD1'] = "selo-x.png"; $m6[$i]['msgD1'] = "Não recomendado";$m6Nota = $m6Nota - 1;$m6[$i]['guia']="fita-".$categ.$tipo."030".$i.".png";}
  
  $i++;

}