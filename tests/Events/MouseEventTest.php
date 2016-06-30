<?php

/*
 * This file is part of the Fungio Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Fungio\Tests\GoogleMap\Events;

use Fungio\GoogleMap\Events\MouseEvent;

/**
 * Mouse event test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class MouseEventTest extends \PHPUnit_Framework_TestCase
{
    public function testMouseEvents()
    {
        $expected = array(
            MouseEvent::CLICK,
            MouseEvent::DBLCLICK,
            MouseEvent::MOUSEUP,
            MouseEvent::MOUSEDOWN,
            MouseEvent::MOUSEOVER,
            MouseEvent::MOUSEOUT,
        );

        $this->assertSame($expected, MouseEvent::getMouseEvents());
    }
}
