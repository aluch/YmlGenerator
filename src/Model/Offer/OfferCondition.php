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
 * Class OfferCondition
 */
class OfferCondition
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $reasonText;

    private string $quality;

    /**
     * @return string
     */
    public function getReasonText()
    {
        return $this->reasonText;
    }

    public function getQuality(): string
    {
        return $this->quality;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Description text for the reason for markdowns
     *
     * @param string $reasonText
     *
     * @return $this
     */
    public function setReasonText($reasonText)
    {
        $this->reasonText = $reasonText;

        return $this;
    }

    public function setQuality($quality)
    {
        $this->quality = $quality;
        return $this;
    }

    /**
     * Set product condition
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
