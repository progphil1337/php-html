<?php

declare(strict_types=1);

namespace ProgPhil1337\PhpHtml\Attribute;

use ProgPhil1337\PhpHtml\Attribute;

/**
 * Style
 *
 * @package ProgPhil1337\PhpHtml
 * @author Philipp Lohmann <lohmann.philipp@gmx.net>
 */
final class Style extends ArrayValueAttribute
{
    public function __construct(array $values)
    {
        parent::__construct('style', $values, ';');
    }
}