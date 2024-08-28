<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\car_detail;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class CarComponent extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    protected $paginationTheme = "bootstrap";
    public $addPage, $editPage = false;
    public $merk, $model, $nomorplat, $tarif;
    public function render()
    {
        $data['car'] = car_detail::paginate(10);
        return view('livewire.car-component', $data);
    }
}
