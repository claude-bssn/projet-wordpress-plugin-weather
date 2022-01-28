<?php
/*
Plugin Name: WP Weather  
Description: Ce plugin localise la ville où se trouve le navigateur qui consulte votre site et affiche la météo dans la langue du navigateur.
Version: 1.0
Author: Klod
License: meh! 
*/

define('MON_PLUGIN_SETTING_PAGE','meteo-admin-page');

function my_admin_menu(){
  add_menu_page(
    __('Météo', 'wp-weather'),
    __('Météo', 'wp-weather'),
    'manage_options',
    MON_PLUGIN_SETTING_PAGE,
    'my_admin_page_contents',
    'dashicons-cloud'
  );
}
// Title in plungin menu
add_action('admin_menu', 'my_admin_menu');

function my_admin_page_contents(){
  ?>
  <h1>
    <?php _e("Bienvenue dans la page d'administration du plugin Météo", 'wp-weather')?>
  </h1>
  <form method="post" action="options.php">
    <?php
      settings_fields(MON_PLUGIN_SETTING_PAGE);
      do_settings_sections(MON_PLUGIN_SETTING_PAGE);
      submit_button();
    ?>
  </form>
  <?php
}

add_action('admin_init', 'my_settings_init');

function my_settings_init(){
  add_settings_section(
    'meteo_page_setting_section',
    __('Paramètres personnalisés', 'wp-weather'),
    'my_setting_section_callback_function',
    MON_PLUGIN_SETTING_PAGE
  );
// settings for the field
  add_settings_field(
    'meteo_first_setting_field',
    __('Ma clé API OpenWeather', 'wp-weather'),
    'my_first_setting_markup',
    MON_PLUGIN_SETTING_PAGE,
    'meteo_page_setting_section'
  );

  register_setting(MON_PLUGIN_SETTING_PAGE, 'meteo_first_setting_field');
}

//  instruction on how the plugin works
function my_setting_section_callback_function($args){
  echo "<p>Ce plugin localise la ville où se trouve le navigateur qui consulte votre site et affiche la météo dans la langue du navigateur. </p>
        <p>Veuillez creer une clé d'API sur <a href='https://openweathermap.org/'>OpenWeather</a> .</p>
        <p>Puis renseignez votre clé dans le champ ci dessous et sauvegardez.</p>
        <p>Utilisez le shortcode [meteo] ou vous souhaitez faire apparaitre le widget météo dans la page.</p>";
}

function my_first_setting_markup(){
  ?>
  <input type="text" id="meteo_first_setting_field" name="meteo_first_setting_field" 
    value="<?php echo get_option('meteo_first_setting_field'); ?>">
  <?php
}
/*
  The function get the API key given in the admin menu
  Get the city from the public ip address of th browser. 
    If connected behind a proxy or localhost the choose Lyon as a default city.
  Get le language set of the browser to display information in right language.
  Then call the API OpenWeather the retrieve weather info.
  Include a template specially designed to display weather nicely. 
*/ 
function meteo_open_weather($atts, $content = null) {
  $locale = explode('-',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
  extract(shortcode_atts(array(
    "key" => get_option('meteo_first_setting_field'),
    "city" => geolocalisation(),
    "unit" => 'metric',
    "lang" => $locale[0] ,
  ),$atts));
  $url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&units='.$unit.'&lang='.$lang.'&appid='.$key.'';
  $raw = file_get_contents($url);
  $json = json_decode($raw);
  
  ob_start();
    include 'template-parts/meteo-card.php';
  return ob_get_clean();
}
// Create short code to display widget 
add_shortcode("meteo", "meteo_open_weather");
//  Include the style file for the plugin
add_action('wp_enqueue_scripts', 'callback_for_setting_up_scripts');
function callback_for_setting_up_scripts() {
    wp_register_style( 'meteo-style', plugins_url('weather/asset/style.css'));
    wp_enqueue_style( 'meteo-style' , plugins_url('weather/asset/style.css') );
}

// function to find the city of the user with Ip address
function geolocalisation(){
 if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
      $ip = $_SERVER['REMOTE_ADDR'];
  }

  if ($ip == '::1'){
    $city = 'Lyon';
    return $city;
  }else{
    $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
    $addrDetailsArr = unserialize(file_get_contents($geopluginURL));
    $city = $addrDetailsArr['geoplugin_city'];
    return $city;
  }
}


