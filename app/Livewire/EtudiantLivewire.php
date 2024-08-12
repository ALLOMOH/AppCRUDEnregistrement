<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Etudiant;



class EtudiantLivewire extends Component
{
    public $etudiantId, $name, $surname, $level, $etudiants, $tableId;
    public $edit = false;



    public function mount()
    {
        $this->tableId=1;
        $this->resetValidation();
    }
    public function resetInputFields()
    {
        $this->etudiantId = '';
        $this->name = '';
        $this->surname = '';
        $this->level = '';
    }
    /**
     * Show the form for creating a new resource.
     */
    public function cancel()
    {
        $this->resetInputFields();
        $this->edit = false;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $this->edit = $this->etudiantId ? true : false;//revient si il y a une erreur

        $this->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'level' => 'required|string',
        ]);

        Etudiant::updateOrCreate(['id' => $this->etudiantId], [
            'name' => $this->name,
            'surname' => $this->surname,
            'level' => $this->level,
        ]);

        session()->flash('message', $this->etudiantId ? 'Student Updated Successfully.' : 'Student Create Successfully.');
        $this->resetInputFields();
        $this->edit=false;
    }

    /**etudiantId
     * Show the form for editing the specified resource.
     */
    public function getEdit($id)
    {
        //
        $this->edit = true;
        $etudiant = Etudiant::findOrFail($id);
        $this->etudiantId = $id;
        $this->name = $etudiant->name;
        $this->surname = $etudiant->surname;
        $this->level = $etudiant->level;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Etudiant::findOrFail($id)->delete();
        session()->flash('message', 'Student Deleted successfully.');
        $this->edit = false;
        $this->tableId=1;
        $this->resetInputFields();
    }

    public function render()
    {
        $this->etudiants = Etudiant::all();
        return view('livewire.etudiant-livewire');
    }
}
