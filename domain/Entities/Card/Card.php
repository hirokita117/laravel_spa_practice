<?php

namespace Domain\Entities\Card;

abstract class Card {
    /**
     * カードの番号
     * @var int
     */
    private $number;

    public function __construct (int $number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    abstract public function isBigger(Card $card): bool;
}
