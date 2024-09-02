<?php

namespace App\Livewire\Company;

use App\Models\Company;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FormCompany extends Component
{
    // {{-- 'company_name' => 'Laboratorios COFAR',
    //     'description' => 'Lorem ipsum, dolor sit amet labore facere. Aspernatur necessitatibus similique quia accusantium magni aut sequi neque.',
    //     'company_type' => 'Public',
    //     'company_image' => 'cofar.jpg',
    //     'user_id' => 1 --}}

    #[Validate('required')]
    public $company_name;

    #[Validate('required')]
    public $company_type;

    public $description;
    public $company_image = "default.png";
    public $user_id = 1;

    public function save()
    {
        $this->validate();
        Company::create($this->only(['company_name', 'description', 'company_type', 'company_image', 'user_id']));
        return $this->redirect('/companies');
    }

    public function render()
    {
        return view('livewire.company.form-company');
    }
}
