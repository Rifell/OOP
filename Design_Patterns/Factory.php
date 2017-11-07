<?php

abstract class ABaseParser
{
    protected $file;

    public function __construct($file) {
        $this->$file = $file;
    }

    abstract function read();
}

class XmlParser extends ABaseParser 
{
    public function read()
    {
        echo "Чтение xml файла <br>";
    }
}

class JsonParser extends ABaseParser 
{
    public function read()
    {
        echo "Чтение json файла <br>";
    }
}

class ParserFactory 
{
    public static function create($file)
    {
        $data = pathinfo($file);
        $classname = ucfirst($data['extension']) . 'Parser';

        if (class_exists($classname) && is_subclasl_of($classname, 'ABaseParser'))
        {
            return new $classname($file);
        }

        throw new Exception('Некорректный файл');
    }
}

$files = ['data.xml', 'data.json'];