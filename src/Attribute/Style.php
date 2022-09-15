<?php

declare(strict_types=1);

namespace ProgPhil1337\HTML\Attribute;

use ProgPhil1337\HTML\Attribute;

/**
 * Style
 *
 * @package ProgPhil1337\HTML
 * @author Philipp Lohmann <lohmann.philipp@gmx.net>
 */
final class Style extends ArrayValueAttribute
{
    public function __construct(array $values)
    {
        parent::__construct('style', $values, ';');
    }
}