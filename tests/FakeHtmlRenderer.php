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

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\Inline\Element\AbstractInline;

class FakeHtmlRenderer implements ElementRendererInterface
{
    protected $options;

    /**
     * @param string     $option
     * @param mixed|null $value
     */
    public function setOption($option, $value)
    {
        $this->options[$option] = $value;
    }

    /**
     * @param string     $option
     * @param mixed|null $default
     *
     * @return mixed|null
     */
    public function getOption(string $option, $default = null)
    {
        if (!isset($this->options[$option])) {
            return $default;
        }

        return $this->options[$option];
    }

    /**
     * @param string $string
     * @param bool   $preserveEntities
     *
     * @return string
     */
    public function escape($string, $preserveEntities = false)
    {
        return '::escape::' . $string;
    }

    /**
     * @param AbstractInline $inline
     *
     * @return string
     */
    public function renderInline(AbstractInline $inline): string
    {
        return '::inline::';
    }

    /**
     * @param AbstractInline[] $inlines
     *
     * @return string
     */
    public function renderInlines(iterable $inlines): string
    {
        return '::inlines::';
    }

    /**
     * @param AbstractBlock $block
     * @param bool          $inTightList
     *
     * @throws \RuntimeException
     *
     * @return string
     */
    public function renderBlock(AbstractBlock $block, bool $inTightList = false): string
    {
        return '::block::';
    }

    /**
     * @param AbstractBlock[] $blocks
     * @param bool            $inTightList
     *
     * @return string
     */
    public function renderBlocks(iterable $blocks, bool $inTightList = false): string
    {
        return '::blocks::';
    }
}
