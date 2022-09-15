<?php

declare(strict_types=1);

namespace ProgPhil1337\PhpHtml\Attribute;

/**
 * ClassList
 *
 * @package ReactWeb\HTML\Attribute
 * @author Philipp Lohmann <lohmann.philipp@gmx.net>
 */
class ClassList extends ArrayValueAttribute
{
    public function __construct(array $classes)
    {
        parent::__construct('class', $classes, ' ', false, false);
    }
}