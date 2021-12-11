<?php

namespace App\View\Components;
use Illuminate\View\Component;
use App\Category;
class SiderbarComponent extends Component
{
    public $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->category=Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.siderbar-component');
    }
}
