<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap'; //pour importer le théme de bootstrap

    public $perPage = 10; //c'est la variable de nombre de peersonne à afficher

    public $search;

    // Jusqu'ici la recherche de nom débute à partir de la page sur laquelle on se trouve, mais il faudrait repartir de la page 1 pour chercher
    //on va revenir à la page 1 à chaque fois que a valeur de Search change
    public function updatingSearch(){
        $this->resetPage();//permet de revenir à la 1ére page dès que la variable Search est modifiée
    }

    public function render()
    {
        return view('livewire.students-list', [
            'students' => Student::where('name', 'like', '%'.$this->search.'%')->paginate($this->perPage),
        ]);
    }
}
