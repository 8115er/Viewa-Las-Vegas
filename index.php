<?php


require_once 'vendor/autoload.php';

use Oscorp\ViewaLasVegas\Hotel;

$hotels[] = new Hotel("The Venetian", 'The Venetian Las Vegas embodies the spirit and excitement of Venice. An integrated Las Vegas resort. The Venetian offers all the romance and beauty of its namesake and more. USA Today calls it: "the most romantic hotel in Las Vegas, Nevada."', 5);
$hotels[] = new Hotel("Trump International Hotel", 'Trump International Hotel Las Vegas is a sophisticated, non-smoking and non-gaming, luxury hotel situated high above the Las Vegas Strip. We are minutes away from the Las Vegas Convention Center and the best the city has to offer, while remaining removed enough for the perfect getaway.', 4);
$hotels[] = new Hotel("Bellagio", "The hotel rooms and suites at the Bellagio offer the perfect blend of beauty and elegance. Our rooms will elevate your stay, whether you're traveling for business, celebrating a honeymoon, or just looking for a remarkable getaway. With views of the Las Vegas valley or the iconic Bellagio fountains right from your suite, your stay will be nothing short of unforgettable",4);


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);


$template = $twig->load('index.html');

echo $template->render(['a_variable' => 'Ich liebe Twig',
                        'hotels' => $hotels]);

