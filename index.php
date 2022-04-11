<?php

require_once 'vendor/autoload.php';

use Oscorp\ViewaLasVegas\Hotel;

$contents = file_get_contents("vegas.html");

//replace Caesars_Palace
$contents = str_replace(
    '###caesars_palace_text###',
    'This famous casino-hotel is in a sprawling Roman-style complex on the lively Las Vegas Strip. It
            is 1.6 km from Interstate 15 and 22.5 km from Rio Secco Golf Club.
            <br>
            <br>
            There are 11 restaurants in the hotel, including an upscale Japanese restaurant and a casual
            grill restaurant. The casino offers classic gaming tables, poker and slot machines. Other
            amenities include a seasonal outdoor pool, a gym, and a spa, as well as a nightclub and live
            entertainment.',
            $contents);
$contents = str_replace('###caesars_palace_picture_main###', 'caesars_palace_main.jpg', $contents);
$contents = str_replace('###caesars_palace_picture_1###', 'caesars_palace_1.jpg', $contents);
$contents = str_replace('###caesars_palace_picture_2###', 'caesars_palace_2.jpg', $contents);

//replace Bellagio
$contents = str_replace(
    '###bellagio_text###',
    'This famous casino-hotel is in a sprawling Roman-style complex on the lively Las Vegas Strip. It
            is 1.6 km from Interstate 15 and 22.5 km from Rio Secco Golf Club.
            <br>
            <br>
            There are 11 restaurants in the hotel, including an upscale Japanese restaurant and a casual
            grill restaurant. The casino offers classic gaming tables, poker and slot machines. Other
            amenities include a seasonal outdoor pool, a gym, and a spa, as well as a nightclub and live
            entertainment.',
    $contents);
$contents = str_replace('###bellagio_picture_main###', 'bellagio_main.jpg', $contents);
$contents = str_replace('###bellagio_picture_1###', 'bellagio_1.jpg', $contents);
$contents = str_replace('###bellagio_picture_2###', 'bellagio_2.jpg', $contents);

//replace The Mirage
$contents = str_replace(
    '###the_mirage_text###',
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
            $contents);
$contents = str_replace('###the_mirage_picture_main###', 'the_mirage_main.jpg', $contents);
$contents = str_replace('###the_mirage_picture_1###', 'the_mirage_1.jpg', $contents);
$contents = str_replace('###the_mirage_picture_2###', 'the_mirage_2.jpg', $contents);


echo $contents;


