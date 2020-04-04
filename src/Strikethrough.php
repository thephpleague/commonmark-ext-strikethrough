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

use League\CommonMark\Inline\Element\AbstractInline;

@trigger_error('league/commonmark-ext-strikethrough is deprecated; use League\CommonMark\Extension\Strikethrough\Strikethrough from league/commonmark 1.3+ instead', E_USER_DEPRECATED);
class_alias('League\CommonMark\Extension\Strikethrough\Strikethrough', 'League\CommonMark\Ext\Strikethrough\Strikethrough');

if (false) {
    /**
     * @deprecated The league/commonmark-ext-strikethrough extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
     */
    class Strikethrough extends AbstractInline
    {
        /**
         * @return bool
         */
        public function isContainer(): bool
        {
            return true;
        }
    }
}
