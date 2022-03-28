<?php

use Medoko\Viewa\Hotel;

require_once 'vendor/autoload.php';

$hotels[] = new Hotel('Flamingo', 'The Flamingo was constructed in 1946 as the first luxury hotel in Las Vegas. It was in this hotel where they filmed the original Ocean’s Eleven in 1960.','https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/ee/f8/e0.jpg','https://www.caesars.com/flamingo-las-vegas');
$hotels[] = new Hotel('Circus Circus', 'Circus Circus is one of the oldest hotels in Las Vegas. Its construction was completed two years later than Caesars Palace in 1968.','https://exp.cdn-hotels.com/hotels/1000000/30000/24800/24715/6c2061e8_z.jpg?impolicy=fcrop&w=500&h=333&q=medium','https://newyorknewyork.mgmresorts.com/en.html');
$hotels[] = new Hotel('New York New York', 'New York New York is a spectacular hotel which recreates the Big Apple with replicas such as the Empire State building and the Chrysler building.','https://www.vegas-online.de/wp-content/uploads/hotel-nyny.jpg','https://www.circuscircus.com/');

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplatePathAndFilename('templates/index.html');
$paths->setPartialRootPaths(['partials']);

$view->assignMultiple(
    ['hotels'=>$hotels]
);

$output = $view->render();

echo $output;