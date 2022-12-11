<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/card-view.php');

class CardGridView
{

    public $arrayOfCards;

    public function __construct($arrayOfCards)
    {
        echo '<section class="trip-grid">';

        foreach ($arrayOfCards as $singleCard) {
            $newCard = new CardView($singleCard->depart_time, $singleCard->arrive_time, $singleCard->depart_from, $singleCard->arrive_at);
        }

        echo '</section>';
    }
}
