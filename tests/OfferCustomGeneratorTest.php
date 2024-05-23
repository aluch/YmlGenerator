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

use Aluch\YmlGenerator\Model\Offer\OfferCondition;
use Aluch\YmlGenerator\Model\Offer\OfferCustom;
use Aluch\YmlGenerator\Model\Offer\OfferParam;

/**
 * Generator test
 */
class OfferCustomGeneratorTest extends AbstractGeneratorTest
{
    /**
     * Test generate
     */
    public function testGenerate()
    {
        $this->offerType = 'Custom';
        $this->runGeneratorTest();
    }

    /**
     * {@inheritdoc}
     */
    protected function createOffer()
    {
        return (new OfferCustom())
            ->setTypePrefix($this->faker->colorName)
            ->setVendor($this->faker->company)
            ->setVendorCode($this->faker->companySuffix)
            ->setModel($this->faker->userName)
            ->setGroupId($this->faker->numberBetween())
            ->setStore($this->faker->boolean)
            ->addParam(
                (new OfferParam())
                    ->setName($this->faker->name)
                    ->setUnit($this->faker->text(5))
                    ->setValue($this->faker->text(10))
            )
            ->setPictures(['http://example.com/example.jpeg', 'http://example.com/example2.jpeg'])
            ->addCondition(
                (new OfferCondition())
                    ->setType($this->faker->text(5))
                    ->setReasonText($this->faker->text(10))
            )
        ;
    }
}
