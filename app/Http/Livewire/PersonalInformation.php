<?php

namespace App\Http\Livewire;

use App\District;
use App\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class PersonalInformation extends Component
{

    use WithFileUploads;
    public $avatar, $gender, $f_name, $m_name, $phone, $dob, $community, $add_one, $add_two, $city, $dist, $pincode;
    public $state = 34;


    public function savePersonalInformation()
    {
        $this->validate([
            'avatar' => 'image|max:300',
        ]);
        $avatarName = $this->avatar->hashName();
        $this->avatar->store('avatar', 'public');
        $user = User::find(auth()->user()->id)->update([
            'avatar' => $avatarName,
            'gender' => $this->gender,
            'dob' =>$this->dob,
            'f_name' =>$this->f_name,
            'm_name' =>$this->m_name,
            'community' =>$this->community,
            'phone'=>$this->phone,
            'address' =>$this->add_one,
            'address_2' =>$this->add_two,
            'district_id' =>$this->dist,
            'city' => $this->city,
            'state_id' => $this->state,
            'pincode' => $this->pincode
        ]);
        session()->flash('info', 'Post successfully updated.');
        return redirect()->to(route('user_profile'));
    }

    public function render()
    {
        $districts = District::all();
        return view('livewire.user-profile.personal-information', compact('districts'));
    }
}
