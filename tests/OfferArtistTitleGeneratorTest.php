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

use Aluch\YmlGenerator\Model\Offer\OfferArtistTitle;

/**
 * Generator test
 */
class OfferArtistTitleGeneratorTest extends AbstractGeneratorTest
{
    /**
     * Test generate
     */
    public function testGenerate()
    {
        $this->offerType = 'ArtistTitle';
        $this->runGeneratorTest();
    }

    /**
     * {@inheritdoc}
     */
    protected function createOffer()
    {
        return (new OfferArtistTitle())
            ->setArtist($this->faker->name)
            ->setTitle($this->faker->name)
            ->setYear($this->faker->numberBetween(1, 9999))
            ->setMedia($this->faker->name)
        ;
    }
}
