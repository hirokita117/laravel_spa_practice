<?php

namespace Domain\Entities\Card;

use PHPMentors\DomainKata\Entity\EntityInterface;

final class BlackCard extends Card implements EntityInterface {
    public function isBigger(Card $card): bool
    {
        if ($card instanceof BlackCard) {
            return $card->getNumber() < $this->getNumber();
        }

        return false;
    }
}
