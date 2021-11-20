<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public function render()
    {

        $list = Auth::user()->currentTeam->id;
        return view('livewire.todo.show', [ 'list' => $list ]);
        //return view('livewire.todo.show');
    }

    public function saved()
    {
        $this->render();
    }
}
