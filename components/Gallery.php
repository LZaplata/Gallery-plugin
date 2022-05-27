<?php


namespace LZaplata\Gallery\Components;


use Cms\Classes\ComponentBase;
use LZaplata\Gallery\Models\Gallery as GalleryModel;

class Gallery extends ComponentBase
{
    /**
     * @return array
     */
    public function componentDetails(): array
    {
        return [
            "name" => "lzaplata.gallery::lang.component.gallery.name",
            "description" => "lzaplata.gallery::lang.component.gallery.description"
        ];
    }

    /**
     * @return array
     */
    public function defineProperties(): array
    {
        return [
            "gallery" => [
                "title" => "lzaplata.gallery::lang.component.gallery.gallery.title",
                "description" => "lzaplata.gallery::lang.component.gallery.gallery.description",
                "type" => "dropdown"
            ]
        ];
    }

    /**
     * @return array
     */
    public function getGalleryOptions(): array
    {
        return GalleryModel::orderBy("name", "ASC")->lists("name", "slug");
    }

    /**
     * @return GalleryModel
     */
    public function gallery(): GalleryModel
    {
        return GalleryModel::where("slug", $this->property("gallery"))->first();
    }

    public function onRun(): void
    {
        $this->addCss("https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0/css/lightgallery.min.css");
        $this->addCss("https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0/css/lg-zoom.min.css");
        $this->addCss("https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0/css/lg-thumbnail.min.css");

        $this->addJs("https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0/lightgallery.min.js");
        $this->addJs("https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0/plugins/zoom/lg-zoom.min.js");
        $this->addJs("https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0/plugins/thumbnail/lg-thumbnail.min.js");
    }
}
