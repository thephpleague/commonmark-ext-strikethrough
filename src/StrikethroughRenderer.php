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

use League\CommonMark\ElementRendererInterface;
use League\CommonMark\Extension\Strikethrough\StrikethroughRenderer as CoreRenderer;
use League\CommonMark\Inline\Element\AbstractInline;
use League\CommonMark\Inline\Renderer\InlineRendererInterface;

/**
 * @deprecated The league/commonmark-ext-strikethrough extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class StrikethroughRenderer implements InlineRendererInterface
{
    private $coreRenderer;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-strikethrough is deprecated; use %s from league/commonmark 1.3+ instead', CoreRenderer::class), E_USER_DEPRECATED);
        $this->coreRenderer = new CoreRenderer();
    }

    /**
     * {@inheritdoc}
     */
    public function render(AbstractInline $inline, ElementRendererInterface $htmlRenderer)
    {
        return $this->coreRenderer->render($inline, $htmlRenderer);
    }
}
