<?php 
class Cms5a616c6699735681272030_18fcea000f15575c835ed33c3858827eClass extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
