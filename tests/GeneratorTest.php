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

use Aluch\YmlGenerator\Generator;
use Aluch\YmlGenerator\Model\ShopInfo;
use Aluch\YmlGenerator\Settings;

/**
 * Generator test
 */
class GeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \RuntimeException
     */
    public function testExceptionForIncompatibleAnnotations()
    {
        (new Generator((new Settings())->setOutputFile('')))
            ->generate(new ShopInfo(), [], [], [])
        ;
    }

    /**
     * @expectedException \LogicException
     */
    public function testExceptionIfManyDestinationUsed()
    {
        $settings = (new Settings())
            ->setOutputFile('')
            ->setReturnResultYMLString(true)
        ;

        (new Generator($settings))
            ->generate(new ShopInfo(), [], [], [])
        ;
    }

    /**
     * Test equal returned value and printed
     */
    public function testGenerationEchoValueEqualsReturnValue()
    {
        $settings = (new Settings())
            ->setReturnResultYMLString(true)
        ;
        $value = (new Generator($settings))
            ->generate(new ShopInfo(), [], [], [], []);

        \ob_start();
        (new Generator(new Settings()))
            ->generate(new ShopInfo(), [], [], [], []);
        $value2 = \ob_get_clean();

        $this->assertEquals($value, $value2);
    }
}
