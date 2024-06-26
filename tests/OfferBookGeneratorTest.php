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

use Aluch\YmlGenerator\Model\Offer\OfferBook;

/**
 * Generator test
 */
class OfferBookGeneratorTest extends AbstractGeneratorTest
{
    /**
     * Test generate
     */
    public function testGenerate()
    {
        $this->offerType = 'Book';
        $this->runGeneratorTest();
    }

    /**
     * {@inheritdoc}
     */
    protected function createOffer()
    {
        return (new OfferBook())
            ->setAuthor($this->faker->name)
            ->setName($this->faker->name)
            ->setPublisher($this->faker->name)
            ->setSeries($this->faker->name)
            ->setYear($this->faker->numberBetween(1, 9999))
            ->setISBN($this->faker->isbn13)
            ->setVolume($this->faker->numberBetween(1, 9999))
            ->setPart($this->faker->numberBetween(1, 9999))
            ->setLanguage($this->faker->name)
            ->setBinding($this->faker->name)
            ->setPageExtent($this->faker->numberBetween(1, 9999))
            ->setTableOfContents($this->faker->name)
        ;
    }
}
