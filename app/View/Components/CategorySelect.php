<?php

namespace App\View\Components;
use App\Models\Category; 
use Illuminate\View\Component;

class CategorySelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;



    public $label;



    public $parentId;

    public function __construct($name, $label, $parentId = null)
    {
        $this->name = $name;

        $this->label = $label;

        $this->parentId = $parentId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = Category::defaultOrder()->withDepth()->get();

        return view('components.category-select', compact('categories'));
    }
}
