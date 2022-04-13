<?php


require_once 'vendor/autoload.php';

use Oscorp\ViewaLasVegas\Hotel;

$hotels[] = new Hotel("Caesars Palace",
    '<i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>',
    'This famous casino-hotel is in a sprawling Roman-style complex on the lively Las Vegas Strip. It
                        is 1.6 km from Interstate 15 and 22.5 km from Rio Secco Golf Club.
                        <br>
                        <br>
                        There are 11 restaurants in the hotel, including an upscale Japanese restaurant and a casual
                        grill restaurant. The casino offers classic gaming tables, poker and slot machines. Other
                        amenities include a seasonal outdoor pool, a gym, and a spa, as well as a nightclub and live
                        entertainment.',
    'assets/img/caesars_palace_1.jpg',
    'assets/img/caesars_palace_2.jpg',
    'assets/img/caesars_palace_main.jpg');

$hotels[] = new Hotel("Bellagio",
    '<i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>',
    'This luxury casino resort on the Las Vegas Strip overlooks a 3-acre lake with dancing fountains.
                        It is 3.2 km from McCarran International Airport.
                        <br>
                        <br>
                        Bright, elegant rooms feature artwork, a marble bathroom with a soaking tub, smart TVs and a
                        sitting area. The sumptuous suites offer a private elevator, a living room, a whirlpool bath,
                        and butler service.
                        <br>
                        <br>
                        Gastronomic offerings include international restaurants, cafes, and a buffet restaurant. A spa,
                        gallery, 5 outdoor pools, bars, and live shows are also offered. The resort fee includes Wi-Fi
                        and access to the fitness room.',
    'assets/img/bellagio_1.jpg',
    'assets/img/bellagio_2.jpg',
    'assets/img/bellagio_main.jpg');

$hotels[] = new Hotel("The Mirage",
    '<i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>
                    <i class="fa-solid fa-star " style="font-size:32px; color: #ffd700;"></i>',
    'This legendary casino hotel overlooks the famous "erupting volcano" and is located on the Las
                        Vegas Strip next to the Caesars Palace hotel and across the street from Madame Tussauds Las
                        Vegas.
                        <br>
                        <br>
                        The chic rooms feature flat-screen TVs, free Wi-Fi, iPod docking stations and minibars. Suites
                        also have a separate living room, dining area and picture windows overlooking the Las Vegas
                        Strip. Apartments offer a private pool and butler service. Room service is available.
                        <br>
                        <br>
                        Amenities include a dolphin pool, an outdoor pool, an indoor saltwater aquarium, and several
                        bars and lounges. The hotel also has a convention center, spa, and shopping, as well as 14
                        restaurants, a popular casino, and live entertainment.',
    'assets/img/the_mirage_1.jpg',
    'assets/img/the_mirage_2.jpg',
    'assets/img/the_mirage_main.jpg');


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);


$template = $twig->load('index.html');

echo $template->render(['a_variable' => 'Ich liebe Twig',
    'hotels' => $hotels]);

