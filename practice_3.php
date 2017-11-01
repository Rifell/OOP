<?php

class Tag {

    private $text;
    private $attr;
    private $attr1;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function setAttr($attr, $attr1)
    {
        $this->attr = $attr;
        $this->attr1 = $attr1;
    }

    public function show()
    {
        $name = $this->name;
        $text = $this->text;
        $attr = $this->attr;
        $attr1 = $this->attr1;
        echo "<$name $attr $attr1>$text</$name>";
    }
}

$tag = new Tag('a');
$tag->setText('ссылка')->setAttr('href=', "index.html");
$tag->show();

//Выведет <a href="index.html">ссылка</a>
?>