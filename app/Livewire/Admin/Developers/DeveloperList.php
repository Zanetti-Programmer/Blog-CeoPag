<?php

namespace App\Livewire\Admin\Developers;

use App\Models\Developer;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeveloperList extends Component
{
    use WithFileUploads;

    public $developers;
    public $name, $email, $photo, $bio;
    public $developerId;
    public $modalFormVisible = false;

    public function render()
    {
        $this->developers = Developer::all();
        return view('livewire.admin.developers.developer-list');
    }

    public function createShowModal()
    {
        $this->resetForm();
        $this->modalFormVisible = true;
    }

    public function updateShowModal($id)
    {
        $this->resetForm();
        $this->developerId = $id;
        $developer = Developer::findOrFail($id);
        $this->name = $developer->name;
        $this->email = $developer->email;
        $this->bio = $developer->bio;
        $this->modalFormVisible = true;
    }

    public function delete($id)
    {
        Developer::destroy($id);
    }

    public function resetForm()
    {
        $this->developerId = null;
        $this->name = '';
        $this->email = '';
        $this->photo = null;
        $this->bio = '';
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'bio' => 'nullable',
            'photo' => 'nullable|image|max:1024',
        ]);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'bio' => $this->bio,
        ];

        if ($this->photo) {
            $data['photo'] = $this->photo->store('photos', 'public');
        }

        if ($this->developerId) {
            Developer::find($this->developerId)->update($data);
        } else {
            Developer::create($data);
        }

        $this->modalFormVisible = false;
        $this->resetForm();
    }
}
