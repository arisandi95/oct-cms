<?php 
class Cms5a616ebe22542756151427_91de399606f6113438e0c65d0494b143Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
