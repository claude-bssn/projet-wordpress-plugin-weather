<?php
?>

<div class="meteo center">
  <h1><?= $json->name;?></h1>
  <div class="<?= $json->weather[0]->main;?>"></div> 
  
  <h2><?= $json->weather[0]->description;?></h2>
  <div class="meteorow">
    <span class="container">
      <img src="<?= plugins_url('weather/asset/images/temp.png')?>" alt="">
      <span><?= $json->main->temp;?> ˚C</span>
    </span>  
    <span class="container">
      <img src="<?= plugins_url('weather/asset/images/wind.png')?>" alt="">
      <span><?= $json->wind->speed;?> Km/h</span>
    </span>
  </div>

</div>