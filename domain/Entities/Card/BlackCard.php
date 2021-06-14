<?php

namespace Domain\Entities\Card;

use PHPMentors\DomainKata\Entity\EntityInterface;
use Domain\Entities\Card\Card;

final class BlackCard extends Card implements EntityInterface {
    public function isBigger(Card $card): bool
    {
        if ($card instanceof BlackCard) {
            return $card->getNumber() < $this->number;
        }
        return true;
    }
}
