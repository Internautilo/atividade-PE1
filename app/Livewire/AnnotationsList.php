<?php

namespace App\Livewire;

use App\Models\Annotation;
use Livewire\Component;

class AnnotationsList extends Component
{
    public $annotations = [];
    public $listeners = [
        'saveAnnotation' => 'loadAnnotations',
    ];

    public function loadAnnotations()
    {
        $this->annotations = Annotation::all();
    }

    public function mount()
    {
        $this->loadAnnotations();
    }

    public function render()
    {
        return view('livewire.annotations-list');
    }
}
