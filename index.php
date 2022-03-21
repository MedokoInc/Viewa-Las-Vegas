<?php

use Medoko\Viewa\Hotel;

require_once('vendor/autoload.php');

$output = file_get_contents('Templates/index.html');
$hotel_template = file_get_contents('Templates/hotel_template.html');
$hotels[] = new Hotel('Flamingo', 'The Flamingo was constructed in 1946 as the first luxury hotel in Las Vegas. It was in this hotel where they filmed the original Ocean’s Eleven in 1960.','https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/ee/f8/e0.jpg','https://www.caesars.com/flamingo-las-vegas');
$hotels[] = new Hotel('Circus Circus', 'Circus Circus is one of the oldest hotels in Las Vegas. Its construction was completed two years later than Caesars Palace in 1968.','https://exp.cdn-hotels.com/hotels/1000000/30000/24800/24715/6c2061e8_z.jpg?impolicy=fcrop&w=500&h=333&q=medium','https://newyorknewyork.mgmresorts.com/en.html');
$hotels[] = new Hotel('New York New York', 'New York New York is a spectacular hotel which recreates the Big Apple with replicas such as the Empire State building and the Chrysler building.','https://www.vegas-online.de/wp-content/uploads/hotel-nyny.jpg','https://www.circuscircus.com/');
$hotels_string = '';

foreach ($hotels as $hotel){
    $hotels_string .= $hotel_template;
    foreach($hotel->getArray() as $key => $value){
        $hotels_string = str_replace("###$key###",$value,$hotels_string);
    }
}

$output = str_replace("###HOTELS###",$hotels_string,$output);
echo $output;