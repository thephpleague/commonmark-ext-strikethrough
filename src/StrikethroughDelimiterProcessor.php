<?php

/*
 * This file is part of the league/commonmark-ext-strikethrough package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com> and uAfrica.com (http://uafrica.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Ext\Strikethrough;

use League\CommonMark\Delimiter\Delimiter;
use League\CommonMark\Delimiter\Processor\DelimiterProcessorInterface;
use League\CommonMark\Inline\Element\AbstractStringContainer;

final class StrikethroughDelimiterProcessor implements DelimiterProcessorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOpeningCharacter(): string
    {
        return '~';
    }

    /**
     * {@inheritdoc}
     */
    public function getClosingCharacter(): string
    {
        return '~';
    }

    /**
     * {@inheritdoc}
     */
    public function getMinLength(): int
    {
        return 2;
    }

    /**
     * {@inheritdoc}
     */
    public function getDelimiterUse(Delimiter $opener, Delimiter $closer): int
    {
        $min = \min($opener->getNumDelims(), $closer->getNumDelims());

        return $min >= 2 ? $min : 0;
    }

    /**
     * {@inheritdoc}
     */
    public function process(AbstractStringContainer $opener, AbstractStringContainer $closer, int $delimiterUse)
    {
        $strikethrough = new Strikethrough();

        $tmp = $opener->next();
        while ($tmp !== null && $tmp !== $closer) {
            $next = $tmp->next();
            $strikethrough->appendChild($tmp);
            $tmp = $next;
        }

        $opener->insertAfter($strikethrough);
    }
}