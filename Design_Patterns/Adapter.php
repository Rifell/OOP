<?php
interface I_VkAdapter
{
    public function postOnWall($text);
}

class VkApi1
{
    public function send($text)
    {
        echo 'Old: '. $text;
    }
}

class VkApiNew
{
    public function sendPost($text)
    {
        echo 'New: '. $text;
    }
}

class VkAdapter implements I_VkAdapter
{
    private $vkApi;

    public function __construct($vk_api)
    {
        $this->vkApi->$vk_api;
    }

    public function postOnWall($text)
    {
        $this->vkApi->sendPost($text);
    }
}

$vk_adapter = new VkAdapter(new VkApiNew());
$vk_adapter->postOnWall("Hi vk!");