<?php

/*
 * This file is part of the league/commonmark-ext-strikethrough package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com> and uAfrica.com (http://uafrica.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Ext\Strikethrough\Test;

use League\CommonMark\Ext\Strikethrough\Strikethrough;
use PHPUnit\Framework\TestCase;

final class StrikethroughTest extends TestCase
{
    public function testIsContainer()
    {
        $s = new Strikethrough();

        $this->assertTrue($s->isContainer());
    }
}
