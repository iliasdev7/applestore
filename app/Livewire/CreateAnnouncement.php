<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
   
    public $title;
    public $body;
    public $price;
    public $category;
  


    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'price' => 'required|numeric',
        'category' =>'required',
    ];
    
    protected $messages = [
        'required' => 'The :attribute field is required',
        'min' => 'The :attribute field is too short',
        'numeric' => 'The :attribute field should be a number',
    ];
    
    public function store ()
    {
        $this->validate();
        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
        ]);
        Auth::user()->announcements()->save($announcement);
    
        session()->flash('message', 'the announcement done successfully');
        $this->cleanForm();
        
    }

    public function updated($propertyName){
    
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->title='';
        $this->body='';
        $this->price='';
        $this->category='';

    }
     
    public function render()
    {
        return view('livewire.create-announcement');
    }
}

