<?php

if (!function_exists('gift_cards')) {
    function gift_cards($slug='')
    {
        $gift_cards = array(
            array(
                'name' => 'iTunes',
                'slug' => 'itunes',
                'points' => '$5 - 2000 points',
                'image_path' => '/assets/images/gift_cards/itunes.png',
                'all_points' => '5-2000,10-3000,15-4500,25-7500',
            ),
            array(
                'name' => 'Steam',
                'slug' => 'steam',
                'points' => '$5 - 2000 points',
                'image_path' => '/assets/images/gift_cards/steam.jpg',
                'all_points' => '5-2000,10-3000',
            ),
            array(
                'name' => 'Amazon',
                'slug' => 'amazon',
                'points' => '$5 - 1800 points',
                'image_path' => '/assets/images/gift_cards/amazon.png',
                'all_points' => '5-2000,10-3000,15-4500,25-7500',
            ),
            array(
                'name' => 'Google Play',
                'slug' => 'googleplay',
                'points' => '$10 - 3300 points',
                'image_path' => '/assets/images/gift_cards/google-pay.png',
                'all_points' => '5-2000,10-3000,15-4500,25-7500',
            ),
            array(
                'name' => 'Best Buy',
                'slug' => 'bestbuy',
                'points' => '$10 - 3300 points',
                'image_path' => '/assets/images/gift_cards/bestbuy.png',
                'all_points' => '5-2000,10-3000,15-4500,25-7500',
            ),
            array(
                'name' => 'Sony Playstation',
                'slug' => 'sony',
                'points' => '$10 - 3000 points',
                'image_path' => '/assets/images/gift_cards/sony.png',
                'all_points' => '5-2000,10-3000,15-4500,25-7500',
            ),
            array(
                'name' => 'Rixty Gift Card',
                'slug' => 'rixty',
                'points' => '$10 - 3000 points',
                'image_path' => '/assets/images/gift_cards/rixty.jpg',
                'all_points' => '5-2000,10-3000,15-4500,25-7500',
            ),
            array(
                'name' => 'Trion Defiance ',
                'slug' => 'trion',
                'points' => '$15 - 4500 points',
                'image_path' => '/assets/images/gift_cards/defiance.png',
                'all_points' => '5-2000,10-3000,15-4500,25-7500',
            ),
            array(
                'name' => 'Xbox Digital Gift Card',
                'slug' => 'xbox',
                'points' => '$15 - 4500 points',
                'image_path' => '/assets/images/gift_cards/xbox.png',
                'all_points' => '5-2000,10-3000,15-4500,25-7500',
            ),
        );

        if(isset($slug)){
            for($x=0;$x<count($gift_cards);$x++){
                if($gift_cards[$x]['slug'] == $slug){
                    return $gift_cards[$x];
                }
            }
        }
        return $gift_cards;
    }
}