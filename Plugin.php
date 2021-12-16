<?php namespace LZaplata\Gallery;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
     * @return array
     */
    public function registerComponents(): array
    {
        return [
            "LZaplata\Gallery\Components\Gallery" => "Gallery"
        ];
    }

    /**
     * @return array
     */
    public function registerPageSnippets(): array
    {
        return [
            "LZaplata\Gallery\Components\Gallery" => "Gallery"
        ];
    }

    public function registerSettings()
    {
    }
}
