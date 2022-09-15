<?php

declare(strict_types=1);

namespace ProgPhil1337\PhpHtml;

/**
 * Attribute
 *
 * @package ProgPhil1337\PhpHtml
 * @author Philipp Lohmann <lohmann.philipp@gmx.net>
 */
class Attribute
{
    /**
     * @var mixed
     */
    private mixed $value = null;

    /**
     * @param string $name
     * @param string $value
     * @param bool $htmlspecialchars
     */
    public function __construct(public readonly string $name, mixed $value = null, private bool $htmlspecialchars = true)
    {
        if ($value !== null) {
            $this->setValue($value);
        }
    }

    public function setValue(mixed $value): self
    {
        $this->value = $this->htmlspecialchars ? htmlspecialchars($value, ENT_COMPAT, 'UTF-8') : $value;

        return $this;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function toHTML(): string
    {
        return $this->value !== null ? <<<HTML
{$this->name}="{$this->value}"
HTML:
            $this->name;
    }

    public function __toString(): string
    {
        return $this->toHTML();
    }
}