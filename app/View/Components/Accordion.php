<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Accordion extends Component
{
    public $faqs;

    public function __construct()
    {
        $this->faqs = [
            [ 
                'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, necessitatibus!?',
                'answer' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. At nostrum exercitationem voluptas repellat iure optio ullam, suscipit mollitia tempore qui.'
            ],
            [ 
                'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, necessitatibus!',
                'answer' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. At nostrum exercitationem voluptas repellat iure optio ullam, suscipit mollitia tempore qui.'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, necessitatibus!',
                'answer' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. At nostrum exercitationem voluptas repellat iure optio ullam, suscipit mollitia tempore qui.'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, necessitatibus!',
                'answer' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. At nostrum exercitationem voluptas repellat iure optio ullam, suscipit mollitia tempore qui.'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, necessitatibus!',
                'answer' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. At nostrum exercitationem voluptas repellat iure optio ullam, suscipit mollitia tempore qui.'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, necessitatibus!',
                'answer' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. At nostrum exercitationem voluptas repellat iure optio ullam, suscipit mollitia tempore qui.'
            ],
        ];
    }

    public function render()
    {
        return view('components.accordion');
    }
}
