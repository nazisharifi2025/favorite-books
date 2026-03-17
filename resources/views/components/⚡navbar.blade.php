<?php

use Livewire\Component;

new class extends Component
{
    public $myName = "Nazi";
    public $date = 0;
    public $greeting = "" ;
    public function mount(){
        date_default_timezone_set("Asia/Kabul");
        $this->date = date("H");
        if($this->date >= 18){
            $this->greeting = "Good Evening";
        }
        elseif($this->date >= 12){
            $this->greeting = "Good Afternoon";
        }
        else{
            $this->greeting = "Good Morning";
        }
    }
};
?>

<div class=" p-5 flex justify-between items-center  w-6xl backdrop-blur-2xl mx-auto" >
    <h1 class="text-3xl font-serif text-blue-400">Hi there , {{ $myName }} {{ $greeting }}</h1>
    <input type="text" placeholder="Enter your name" class=" border border-gray-300 rounded-md py-1.5 outline-0 px-3 text-gray-300" />
    {{-- Nothing worth having comes easy. - Theodore Roosevelt --}}
</div>