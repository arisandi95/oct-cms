<?php 
class Cms5a62c7a57ea08487867076_2aa3ff16c6f535a242952255e3189721Class extends \Cms\Classes\PageCode
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
