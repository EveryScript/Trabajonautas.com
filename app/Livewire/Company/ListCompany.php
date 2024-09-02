<?php

namespace App\Livewire\Company;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListCompany extends Component
{
    public $companies;

    public function render()
    {
        $this->companies = Company::where('user_id', Auth::id())->get();
        return view('livewire.company.list-company');
    }
}
