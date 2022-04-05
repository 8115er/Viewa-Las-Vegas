<?php


require_once 'vendor/autoload.php';

use Oscorp\ViewaLasVegas\Hotel;

$hotels[] = new Hotel("The Venetian", 'The Venetian Las Vegas embodies the spirit and excitement of Venice. An integrated Las Vegas resort. The Venetian offers all the romance and beauty of its namesake and more. USA Today calls it: "the most romantic hotel in Las Vegas, Nevada."', 5);
$hotels[] = new Hotel("Trump International Hotel", 'Trump International Hotel Las Vegas is a sophisticated, non-smoking and non-gaming, luxury hotel situated high above the Las Vegas Strip. We are minutes away from the Las Vegas Convention Center and the best the city has to offer, while remaining removed enough for the perfect getaway.', 4);
$hotels[] = new Hotel("Bellagio", "The hotel rooms and suites at the Bellagio offer the perfect blend of beauty and elegance. Our rooms will elevate your stay, whether you're traveling for business, celebrating a honeymoon, or just looking for a remarkable getaway. With views of the Las Vegas valley or the iconic Bellagio fountains right from your suite, your stay will be nothing short of unforgettable",4);

// Initializing the View: rendering in Fluid takes place through a View instance
// which contains a RenderingContext that in turn contains things like definitions
// of template paths, instances of variable containers and similar.
$view = new \TYPO3Fluid\Fluid\View\TemplateView();
// TemplatePaths object: a subclass can be used if custom resolving is wanted.
$paths = $view->getTemplatePaths();
// Assigning the template path and filename to be rendered. Doing this overrides
// resolving normally done by the TemplatePaths and directly renders this file.
$paths->setTemplatePathAndFilename('templates/index.html');
// In this example we assign all our variables in one array. Alternative is
// to repeatedly call $view->assign('name', 'value').
$view->assignMultiple(
    ['hotels' => $hotels]
);
// Rendering the View: plain old rendering of single file, no bells and whistles.
$output = $view->render();
echo $output;