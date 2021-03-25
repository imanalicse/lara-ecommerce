<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;
    public $name;
    public $hasError;


    public function __construct($message, $type = 'error', $hasError = false)
    {
        $this->type = $type;
        $this->message = $message;
        $this->hasError = $hasError;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */

    public function test($name = 'X') {
        return 'Hi '. $name;
    }

    public function render()
    {
        return view('components.alert');
    }
}
