<?php
/**
 * Created by PhpStorm.
 * User: kamil
 * Date: 26.09.2016
 * Time: 22:01
 */

namespace App\Extensions;

use App\Extensions\ViewParts;

class ViewPartsManager
{
    private $viewParts;

    private $section;
    private $content;
    private $priority;

    public function __construct(ViewParts $viewParts)
    {
        $this->priority = 0;
        $this->viewParts = $viewParts;
    }

    public function addContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function toSection($section)
    {
        $this->section = $section;
        return $this;
    }

    public function withPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    public function execute($view) {
        $this->viewParts->addContentToSectionWithPriority(
            $this->content,
            $this->section,
            $this->priority
        );


        $this->updateView($view);
    }

    public function updateView($view)
    {
        $view->with($this->section, $this->viewParts->getSection($this->section));
    }


}