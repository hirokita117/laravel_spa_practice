<?php

namespace Tests\Unit\Domain\Entities\Card;

use Domain\Entities\Card\BlackCard;
use PHPUnit\Framework\TestCase;

class BlackCardTest extends TestCase
{
    /**
     * black card number test
     *
     * @return void
     */
    public function testBlackCardNumber()
    {
        $cardNumber = 1;
        $blackCard = new BlackCard($cardNumber);
        $this->assertEquals($cardNumber, $blackCard->getNumber());
    }

    /**
     * black card compare test
     *
     * @return void
     */
    public function testCompare()
    {
        $card1 = new BlackCard(1);
        $card2 = new BlackCard(2);
        $this->assertTrue($card2->isBigger($card1));
    }
}
