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

use Aluch\YmlGenerator\Model\Delivery;
use Aluch\YmlGenerator\Model\Offer\OfferSimple;

/**
 * Generator test
 */
class OfferDeliveryOptionsGeneratorTest extends AbstractGeneratorTest
{
    /**
     * Test generate
     */
    public function testGenerate()
    {
        $this->offerType = 'OfferDeliveryOptions';
        $this->runGeneratorTest();
    }

    /**
     * {@inheritdoc}
     */
    protected function createOffer()
    {
        $delivery = (new Delivery())->setCost(10)->setDays(1)->setOrderBefore(14);

        return (new OfferSimple())
            ->setName($this->faker->name)
            ->setVendor($this->faker->company)
            ->setVendorCode(null)
            ->setPickup(true)
            ->addDeliveryOption($delivery)
            ->addDeliveryOption($delivery)
            ->setGroupId($this->faker->numberBetween())
            ->addPicture('http://example.com/example.jpeg')
            ->addBarcode($this->faker->ean13)
            ->setCategoriesId([1, 2, 3])
            ->setCategoryId(999)
        ;
    }
}
