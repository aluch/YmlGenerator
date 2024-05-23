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
 * Class OfferOutlet
 */
class OfferOutlet
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $inStock;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return OfferOutlet
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * @param string $inStock
     *
     * @return OfferOutlet
     */
    public function setInStock($inStock)
    {
        $this->inStock = $inStock;

        return $this;
    }

}
