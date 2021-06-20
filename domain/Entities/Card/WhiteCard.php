<?php

namespace Domain\Entities\Card;

use PHPMentors\DomainKata\Entity\EntityInterface;

final class WhiteCard extends Card implements EntityInterface {
    public function isBigger(Card $card): bool
    {
        if ($card instanceof WhiteCard) {
            return $card->getNumber() < $this->getNumber();
        }

        return false;
    }
}
