<?php

declare(strict_types=1);

namespace ProgPhil1337\PhpHtml\Element;

use ProgPhil1337\PhpHtml\Element;

/**
 * Value
 *
 * @package ProgPhil1337\PhpHtml
 * @author Philipp Lohmann <lohmann.philipp@gmx.net>
 */
final class Value extends Element
{
    /**
     * @param string $value
     * @param bool $htmlspecialchars
     */
    public function __construct(private readonly string $value, private readonly bool $htmlspecialchars)
    {
        parent::__construct('');
    }

    /**
     * @param bool $withAttributes
     * @param bool $withChildren
     * @return string
     */
    public function toHTML(bool $withAttributes = true, bool $withChildren = true): string
    {
        return $this->htmlspecialchars ? htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8') : $this->value;
    }
}