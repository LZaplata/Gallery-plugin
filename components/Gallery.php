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
            "id" => [
                "title" => "lzaplata.gallery::lang.component.gallery.id.title",
                "description" => "lzaplata.gallery::lang.component.gallery.id.description",
                "type" => "dropdown"
            ]
        ];
    }

    /**
     * @return array
     */
    public function getIdOptions(): array
    {
        return GalleryModel::orderBy("name", "asc")->lists("name", "id");
    }

    /**
     * @return GalleryModel
     */
    public function gallery(): GalleryModel
    {
        if (is_numeric($this->property("id"))) {
            return GalleryModel::find($this->property("id"));
        } else {
            return GalleryModel::where("slug", $this->property("id"))->first();
        }
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
