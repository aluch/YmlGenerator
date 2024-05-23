<?php

/*
 * This file is part of the AluchYmlGenerator
 *
 * (c) Artem Luchnikov <artem@luchnikov.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aluch\YmlGenerator\Model\Offer;

/**
 * Interface Offer
 */
interface OfferInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return bool
     */
    public function isAvailable();

    /**
     * @return array
     */
    public function getDeliveryOptions();

    /**
     * @return array
     */
    public function getParams();

    /**
     * @return array
     */
    public function getOutlets();

    /**
     * @return object
     */
    public function getCondition();

    /**
     * @return array
     */
    public function toArray();
}
