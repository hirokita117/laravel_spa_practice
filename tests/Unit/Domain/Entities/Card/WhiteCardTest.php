<?php

namespace Tests\Unit\Domain\Entities\Card;

use Domain\Entities\Card\WhiteCard;
use PHPUnit\Framework\TestCase;

class WhiteCardTest extends TestCase
{
    /**
     * white card number test
     *
     * @return void
     */
    public function testWhiteCardNumber()
    {
        $cardNumber = 1;
        $whiteCard = new WhiteCard($cardNumber);
        $this->assertEquals($cardNumber, $whiteCard->getNumber());
    }

    /**
     * white card compare test
     *
     * @return void
     */
    public function testCompare()
    {
        $card1 = new WhiteCard(1);
        $card2 = new WhiteCard(2);
        $this->assertTrue($card2->isBigger($card1));
    }
}
