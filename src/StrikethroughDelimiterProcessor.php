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

use League\CommonMark\Delimiter\DelimiterInterface;
use League\CommonMark\Delimiter\Processor\DelimiterProcessorInterface;
use League\CommonMark\Extension\Strikethrough\StrikethroughDelimiterProcessor as CoreProcessor;
use League\CommonMark\Inline\Element\AbstractStringContainer;

/**
 * @deprecated The league/commonmark-ext-strikethrough extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class StrikethroughDelimiterProcessor implements DelimiterProcessorInterface
{
    private $coreProcessor;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-strikethrough is deprecated; use %s from league/commonmark 1.3+ instead', CoreProcessor::class), E_USER_DEPRECATED);
        $this->coreProcessor = new CoreProcessor();
    }

    /**
     * {@inheritdoc}
     */
    public function getOpeningCharacter(): string
    {
        return $this->coreProcessor->getOpeningCharacter();
    }

    /**
     * {@inheritdoc}
     */
    public function getClosingCharacter(): string
    {
        return $this->coreProcessor->getClosingCharacter();
    }

    /**
     * {@inheritdoc}
     */
    public function getMinLength(): int
    {
        return $this->coreProcessor->getMinLength();
    }

    /**
     * {@inheritdoc}
     */
    public function getDelimiterUse(DelimiterInterface $opener, DelimiterInterface $closer): int
    {
        return $this->coreProcessor->getDelimiterUse($opener, $closer);
    }

    /**
     * {@inheritdoc}
     */
    public function process(AbstractStringContainer $opener, AbstractStringContainer $closer, int $delimiterUse)
    {
        return $this->coreProcessor->process($opener, $closer, $delimiterUse);
    }
}
