<?php 
class Cms5eee5a499c3e6376709541_41ed33116663ede12e9b004a644507b7Class extends Cms\Classes\PageCode
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
