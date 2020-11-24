<?php

if (!function_exists('gift_cards')) {
    function gift_cards()
    {
        $gift_cards = array(
            array(
                'name' => 'iTunes',
                'slug' => 'itunes',
                'points' => '$5 - 2000 points',
                'image_path' => '/assets/images/gift_cards/itunes.png',
            ),
            array(
                'name' => 'Steam',
                'slug' => 'steam',
                'points' => '$5 - 2000 points',
                'image_path' => '/assets/images/gift_cards/steam.jpg',
            ),
            array(
                'name' => 'Amazon',
                'slug' => 'amazon',
                'points' => '$5 - 1800 points',
                'image_path' => '/assets/images/gift_cards/amazon.png',
            ),
            array(
                'name' => 'Google Play',
                'slug' => 'googleplay',
                'points' => '$10 - 3300 points',
                'image_path' => '/assets/images/gift_cards/google-pay.png',
            ),
            array(
                'name' => 'Best Buy',
                'slug' => 'bestbuy',
                'points' => '$10 - 3300 points',
                'image_path' => '/assets/images/gift_cards/bestbuy.png',
            ),
            array(
                'name' => 'Sony Playstation',
                'slug' => 'sony',
                'points' => '$10 - 3000 points',
                'image_path' => '/assets/images/gift_cards/sony.png',
            ),
            array(
                'name' => 'Rixty Gift Card',
                'slug' => 'rixty',
                'points' => '$10 - 3000 points',
                'image_path' => '/assets/images/gift_cards/rixty.jpg',
            ),
            array(
                'name' => 'Trion Defiance ',
                'slug' => 'trion',
                'points' => '$15 - 4500 points',
                'image_path' => '/assets/images/gift_cards/defiance.png',
            ),
            array(
                'name' => 'Xbox Digital Gift Card',
                'slug' => 'xbox',
                'points' => '$15 - 4500 points',
                'image_path' => '/assets/images/gift_cards/xbox.png',
            ),
        );

        return $gift_cards;
    }
}