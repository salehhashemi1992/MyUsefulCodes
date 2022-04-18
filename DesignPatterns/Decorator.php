<?php

interface HtmlElement
{
    public function toHtml();

    public function getName();
}

class InputText implements HtmlElement
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function toHtml()
    {
        return "<input type='text' name=\"{$this->name}\" placeholder='فیلد مورد نظر را پر کنید' id=\"{$this->name}\">";
    }

    public function getName()
    {
        return $this->name;
    }
}

abstract class HtmlDecorator implements HtmlElement
{
    protected $element;

    public function __construct(HtmlElement $element)
    {
        $this->element = $element;
    }

    abstract public function toHtml();

    public function getName()
    {
        return $this->element->getName();
    }
}

class LabelDecorator extends HtmlDecorator
{
    protected $label;

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function toHtml()
    {
        return "<label for=\"{$this->element->getName()}\" class=\"label-control\">{$this->label}</label>" . $this->element->toHtml();
    }
}

class ErrorDecorator extends HtmlDecorator
{
    protected $error;

    public function setError($message)
    {
        $this->error = $message;
    }

    public function toHtml()
    {
        return $this->element->toHtml() . "<span>{$this->error}</span>\n";
    }
}

$input = new InputText('firstName');
$labelled = new LabelDecorator($input);
$labelled->setLabel('firstName: ');
echo $labelled->toHtml();

echo '<br>';

$input2 = new InputText('lastName');
$labelled = new LabelDecorator($input2);
$labelled->setLabel('lastName: ');
$error = new ErrorDecorator($labelled);
$error->setError('You must enter a lastName');
echo $error->toHtml();