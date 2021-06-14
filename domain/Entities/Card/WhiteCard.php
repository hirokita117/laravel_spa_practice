<?php

namespace Domain\Entities\Card;

use PHPMentors\DomainKata\Entity\EntityInterface;
use Domain\Entities\Card\Card;

final class WhiteCard extends Card implements EntityInterface {
    public function isBigger(Card $card): bool
    {
        if ($card instanceof WhiteCard) {
            return $card->getNumber() < $this->number;
        }
        return true;
    }
}
