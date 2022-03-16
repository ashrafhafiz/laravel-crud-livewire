<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentCrud extends Component
{
    public $isModalOpen = 0;
    public $students, $name, $email, $phone, $student_id;

    /**
     * @return void
     */
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    /**
     * @return void
     */
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    public function render()
    {
        $this->students = Student::all();
        return view('livewire.student');
    }

    /**
     * @return void
     */
    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->phone = '';
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        Student::updateOrCreate(['id' => $this->student_id],[
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        session()->flash('message', $this->student_id ? 'Student updated.' : 'Student created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->phone = $student->phone;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Student deleted.');
    }
}
