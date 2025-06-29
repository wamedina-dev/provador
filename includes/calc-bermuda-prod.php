<?php
$table = 1; $i = 1;
$pNota=0; $mNota=0; $gNota=0; $ggNota=0; $xgNota=0;

$sqlT = mysqli_query($db,"SELECT * FROM tabela WHERE id = '".$table."'");
$tabela = mysqli_fetch_array($sqlT);
if($tabel["tipo"] == "Masculino"){$tipo = "M";}else{$tipo = "F";}
$sqlTm = mysqli_query($db,"SELECT * FROM tamanho ");
$tamanhos = mysqli_fetch_array($sqlTm);
$sqlMd = mysqli_query($db,"SELECT * FROM medida  WHERE id_tabela = '".$table."'");

while($medidas = mysqli_fetch_array($sqlMd)){

  $gap1 = $medidas['medida2'] - $medidas['medida1'];
  $gap2 = $medidas['medida3'] - $medidas['medida2'];
  $gap3 = $medidas['medida4'] - $medidas['medida3'];
  $gap4 = $medidas['medida5'] - $medidas['medida4'];

  $med1b1 = $medidas['medida1'] - ($gap1/2); $med1a1 = $medidas['medida1'] + ($gap1/2); 
  $med2b1 = $medidas['medida2'] - ($gap1/2); $med2a1 = $medidas['medida2'] + ($gap2/2); 
  $med3b1 = $medidas['medida3'] - ($gap2/2); $med3a1 = $medidas['medida3'] + ($gap3/2); 
  $med4b1 = $medidas['medida4'] - ($gap3/2); $med4a1 = $medidas['medida4'] + ($gap4/2); 
  $med5b1 = $medidas['medida5'] - ($gap4/2); $med5a1 = $medidas['medida5'] + ($gap4/2); 

  $med1b = $medidas['medida1'] - $gap1; $med1a = $medidas['medida1'] + $gap1; 
  $med2b = $medidas['medida2'] - $gap1; $med2a = $medidas['medida2'] + $gap2; 
  $med3b = $medidas['medida3'] - $gap2; $med3a = $medidas['medida3'] + $gap3; 
  $med4b = $medidas['medida4'] - $gap3; $med4a = $medidas['medida4'] + $gap4; 
  $med5b = $medidas['medida5'] - $gap4; $med5a = $medidas['medida5'] + $gap4;

  
    if($med[$i] < $med1b){ $p[$i]['seloD1'] = "selo-x.png"; $p[$i]['msgD1'] = "Apertado";$pNota-=1; $p[$i]['guia']="fitaBerm".$tipo."030".$i.".png"; 
    }elseif($med[$i] >= $med1b && $med[$i] <= $med1b1){ $p[$i]['seloD1'] = "selo-o.png"; $p[$i]['msgD1'] = "Justo"; $pNota = $pNota + 1; $p[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }elseif($med[$i] > $med1b1 && $med[$i] < $medidas['medida1']){ $p[$i]['seloD1'] = "selo-v.png"; $p[$i]['msgD1'] = "Levemente ideal"; $pNota = $pNota + 2; $p[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med1a1 && $med[$i] >= $medidas['medida1']){ $p[$i]['seloD1'] = "selo-v.png"; $p[$i]['msgD1'] = "Ideal"; $pNota = $pNota + 2; $p[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med1a && $med[$i] > $med1a1){ $p[$i]['seloD1'] = "selo-o.png"; $p[$i]['msgD1'] = "Levemente largo"; $pNota = $pNota + 1; $p[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }else{ $p[$i]['seloD1'] = "selo-x.png"; $p[$i]['msgD1'] = "Não recomendado";$pNota-=1;$p[$i]['guia']="fitaBerm".$tipo."030".$i.".png";}


    if($med[$i] < $med2b){ $m[$i]['seloD1'] = "selo-x.png"; $m[$i]['msgD1'] = "Apertado";$mNota -= 1;  $m[$i]['guia']="fitaBerm".$tipo."030".$i.".png"; 
    }elseif($med[$i] >= $med2b && $med[$i] <= $med2b1){ $m[$i]['seloD1'] = "selo-o.png"; $m[$i]['msgD1'] = "Justo"; $mNota = $mNota + 1; $m[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }elseif($med[$i] > $med2b1 && $med[$i] < $medidas['medida2']){ $m[$i]['seloD1'] = "selo-v.png"; $m[$i]['msgD1'] = "Levemente justo"; $mNota = $mNota + 2; $m[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med2a1 && $med[$i] >= $medidas['medida2']){ $m[$i]['seloD1'] = "selo-v.png"; $m[$i]['msgD1'] = "Ideal"; $mNota = $mNota + 2; $m[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med2a && $med[$i] > $med2a1){ $m[$i]['seloD1'] = "selo-o.png"; $m[$i]['msgD1'] = "Levemente largo"; $mNota = $mNota + 1; $m[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }else{ $m[$i]['seloD1'] = "selo-x.png"; $m[$i]['msgD1'] = "Não recomendado";$mNota-=1;$m[$i]['guia']="fitaBerm".$tipo."030".$i.".png";}


    if($med[$i] < $med3b){ $g[$i]['seloD1'] = "selo-x.png"; $g[$i]['msgD1'] = "Apertado"; $gNota-=1;  $g[$i]['guia']="fitaBerm".$tipo."030".$i.".png";
    }elseif($med[$i] >= $med3b && $med[$i] <= $med3b1){ $g[$i]['seloD1'] = "selo-o.png"; $g[$i]['msgD1'] = "Justo"; $gNota = $gNota + 1;  $g[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }elseif($med[$i] > $med3b1 && $med[$i] < $medidas['medida3']){ $g[$i]['seloD1'] = "selo-v.png"; $g[$i]['msgD1'] = "Levemente justo"; $gNota = $gNota + 2;  $g[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med3a && $med[$i] >= $medidas['medida3']){ $g[$i]['seloD1'] = "selo-v.png"; $g[$i]['msgD1'] = "Ideal"; $gNota = $gNota + 2;  $g[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med3b && $med[$i] > $med3b){ $g[$i]['seloD1'] = "selo-o.png"; $g[$i]['msgD1'] = "Levemente largo"; $gNota = $gNota + 1;  $g[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }else{ $g[$i]['seloD1'] = "selo-x.png"; $g[$i]['msgD1'] = "Não recomendado";$gNota-=1; $g[$i]['guia']="fitaBerm".$tipo."030".$i.".png";}

    if($med[$i] < $med4b){ $gg[$i]['seloD1'] = "selo-x.png"; $gg[$i]['msgD1'] = "Apertado"; $ggNota-=1; $gg[$i]['guia']="fitaBerm".$tipo."030".$i.".png";
    }elseif($med[$i] >= $med4b && $med[$i] <= $med4b1){ $gg[$i]['seloD1'] = "selo-o.png"; $gg[$i]['msgD1'] = "Justo"; $ggNota = $ggNota + 1;  $gg[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }elseif($med[$i] > $med4b1 && $med[$i] < $medidas['medida4']){ $gg[$i]['seloD1'] = "selo-v.png"; $gg[$i]['msgD1'] = "Levemente justo"; $ggNota = $ggNota + 2;  $gg[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med4a && $med[$i] >= $medidas['medida4']){ $gg[$i]['seloD1'] = "selo-v.png"; $gg[$i]['msgD1'] = "Ideal"; $ggNota = $ggNota + 2;  $gg[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med4b && $med[$i] > $med4b){ $gg[$i]['seloD1'] = "selo-o.png"; $gg[$i]['msgD1'] = "Levemente largo"; $ggNota = $ggNota + 1;  $gg[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }else{ $gg[$i]['seloD1'] = "selo-x.png"; $gg[$i]['msgD1'] = "Não recomendado";$ggNota-=1; $gg[$i]['guia']="fitaBerm".$tipo."030".$i.".png";}

    if($med[$i] < $med5b){ $xg[$i]['seloD1'] = "selo-x.png"; $xg[$i]['msgD1'] = "Apertado"; $xgNota-=1; $xg[$i]['guia']="fitaBerm".$tipo."030".$i.".png"; 
    }elseif($med[$i] >= $med5b && $med[$i] <= $med5b1){ $xg[$i]['seloD1'] = "selo-o.png"; $xg[$i]['msgD1'] = "Justo"; $xgNota = $xgNota + 1;  $xg[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }elseif($med[$i] > $med5b1 && $med[$i] < $medidas['medida5']){ $xg[$i]['seloD1'] = "selo-v.png"; $xg[$i]['msgD1'] = "Levemente justo"; $xgNota = $xgNota + 2;  $xg[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med5a && $med[$i] >= $medidas['medida5']){ $xg[$i]['seloD1'] = "selo-v.png"; $xg[$i]['msgD1'] = "Ideal"; $xgNota = $xgNota + 2;  $xg[$i]['guia']="fitaBerm".$tipo."010".$i.".png";
    }elseif($med[$i] < $med5b && $med[$i] > $med5b){ $xg[$i]['seloD1'] = "selo-o.png"; $xg[$i]['msgD1'] = "Levemente largo"; $xgNota = $xgNota + 1;  $xg[$i]['guia']="fitaBerm".$tipo."020".$i.".png";
    }else{ $xg[$i]['seloD1'] = "selo-x.png"; $xg[$i]['msgD1'] = "Não recomendado"; $xgNota-=1; $xg[$i]['guia']="fitaBerm".$tipo."030".$i.".png";}

$i++;

}