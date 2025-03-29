<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectCard extends Component
{
    public $image;
    public $title;
    public $description;
    public $profiles;
    public $link;

    public function __construct($image, $title, $description, $profiles, $link = '#')
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->profiles = $profiles;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.project-card');
    }
}
