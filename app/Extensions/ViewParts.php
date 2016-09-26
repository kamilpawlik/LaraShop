<?php
namespace App\Extensions;

class ViewParts
{
    private $parts;

    public function __construct()
    {
        $this->parts = collect([]);
    }


    public function addContentToSectionWithPriority($content, $section, $priority) {
        if( ! $this->parts->contains($section)) {
            $this->parts[$section] = collect([]);
        }

        $this->parts[$section][] = ['content' => (String)$content, 'priority' => $priority];
    }

    public function getSection($section) {
        return $this->parts[$section]->sortBy('priority')->map(function($item) {
            return $item['content'];
        })->implode("\n");
    }


}