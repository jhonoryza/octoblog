<?php 
class Cms5eec512f82bc2602496385_3ec04111ce80aec6bc2e6aead228754dClass extends Cms\Classes\PageCode
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
