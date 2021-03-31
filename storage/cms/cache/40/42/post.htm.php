<?php 
class Cms5f89675b4c24d564465331_cd892e19093d3e2d07b1865f7ba88af5Class extends Cms\Classes\PageCode
{
public function onEnd()
{
  if (isset($this['post'])) {
    $this->page->title = $this->post->title;
    $this->page->description = $this->post->excerpt;

    if (count($this->post->featured_images) != 0) {
      $this['metaImage'] = URL::to($this->post->featured_images[0]->path);
    }
  }
  else {
    return $this->controller->run('/404');
  }
}
}
