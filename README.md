# PHP-HTML
Create valid HTML code with PHP

## Installation

Install with composer:
```bash
$ composer require progphil1337/php-html
```

## Compatibility

`ProgPhil1337\PhpHtml` requires PHP 8.1 (or better).

## Usage


### Basic example

```php
use ProgPhil1337\PhpHtml\Attribute\Style;
use ProgPhil1337\PhpHtml\Element;

$html = new Element('html');

// Create <head> with <title>
$head = new Element('head');
$title = new Element('title');
$title->innerText('Website Title');

$head->add($title);

$html->add($head);

// Create <body> with styled box
$body = new Element('body');
$body->add(new Style([
    'background-color' => '#ecf0f1',
    'width' => '600px',
    'margin' => '0 auto'
]));

$div = new Element('div');
$div->add(new Style([
    'background-color' => 'white',
    'margin-top' => '50px',
    'border-radius' => '3px',
    'padding' => '13px'
]));

$div->appendHTML('<h1>PHP-HTML</h1><br />');
$div->appendText('Create valid HTML code with PHP.');

$body->add($div);
$html->add($body);

echo $html;
```

Outputs the following HTML code:
```html
<html>
<head>
<title>
Website Title
</title>
</head>
<body style="background-color:#ecf0f1;width:600px;margin:0 auto">
<div style="background-color:white;margin-top:50px;border-radius:3px;padding:13px">
<h1>PHP-HTML</h1><br />
Create valid HTML code with PHP.
</div>
</body>
</html>
```