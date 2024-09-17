<?php

namespace App\Livewire;

use App\Models\Annotation;
use Livewire\Component;

class AnnotationsForm extends Component
{

    public $title = '';
    public $description = '';
    public function render()
    {
        return view('livewire.annotations-form');
    }

    public function save()
    {
        Annotation::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);
        $this->dispatch('saveAnnotation');
    }
}
