<?php

/*
 * This file is part of the AluchYmlGenerator
 *
 * (c) Artem Luchnikov <artem@luchnikov.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aluch\YmlGenerator\Tests;

use Aluch\YmlGenerator\Model\Offer\OfferEventTicket;

/**
 * Generator test
 */
class OfferEventTicketGeneratorTest extends AbstractGeneratorTest
{
    /**
     * Test generate
     */
    public function testGenerate()
    {
        $this->offerType = 'EventTicket';
        $this->runGeneratorTest();
    }

    /**
     * {@inheritdoc}
     */
    protected function createOffer()
    {
        return (new OfferEventTicket())
            ->setName($this->faker->name)
            ->setPlace($this->faker->name)
            ->setDate($this->faker->date('d/m/y'))
            ->setPremiere($this->faker->numberBetween(0, 1))
            ->setKids($this->faker->numberBetween(0, 1))
        ;
    }
}
