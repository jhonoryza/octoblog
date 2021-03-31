<?php 
class Cms5f896b2e57f47579328982_4d89b113a7c1ce6e3d93cb7cb491612fClass extends Cms\Classes\PageCode
{
public function onEnd()
{
  if (isset($this['category'])) {
    $this->page->title = $this->category->name;
    // $this->page->description = $this->post->excerpt;
  }
  else {
    return $this->controller->run('/404');
  }
}
}
