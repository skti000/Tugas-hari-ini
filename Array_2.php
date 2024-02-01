<?php
$abjad = ["A","B","D","C","E","F","G","H","I","J","K","L","M",];
$abjad2 = ["N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];



$mapel = ["PAI (Pendidikan Agama Islam)","B.Jepang","B.Indonesia","MTK"];
$mapel2 = ["B.Inggris","PPLG 1/2"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrat</title>
</head>
<body>
    <style>
        .bulat{
            width: 80px;
            height: 80px;
            line-height: 80px;
            margin: 5px;
            text-align: center;
            float:left;
            background: red;
            color : white;
            border-radius: 50%;

        }

        .kotak{
            line-height: 140px;
            width: 300px;
            background: #fea500;
            float : left;
            height : 140px;
            text-align : center;
            margin: 5px;
            color : white;
            border-radius: 15px 0px;
        }

        


        .clear{
            clear: both;
        }

    </style>
    <h1>ABJAD</h1>
    <?php for($i = 0; $i < count($abjad); $i++) :?>
        <div class="bulat"><?= $abjad[$i]?></div>
    <?php endfor;?>
    <div class="clear"></div>

    <?php for($i = 0; $i < count($abjad2); $i++) :?>
        <div class="bulat"><?= $abjad2[$i]?></div>
    <?php endfor;?>


<div class="clear"></div>
<!-- foreach -->
<h1>Mata Pelajaran X-RPL</h1>
  <?php foreach($mapel as $data2) :?>
    <div class="kotak"><?= $data2; ?></div>
    <?php endforeach;?>
    <div class="clear"></div>
    <?php foreach($mapel2 as $data3) :?>
    <div class="kotak"><?= $data3; ?></div>
    <?php endforeach;?>
    
    
</body>
</html>