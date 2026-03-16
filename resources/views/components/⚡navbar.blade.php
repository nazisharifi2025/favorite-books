<?php

use Livewire\Component;

new class extends Component
{
    public $myName = "Nazi";
    public $date = "";
    public $currently = ""
};
?>

<div class=" p-5 flex justify-between items-center border-b border-gray-300" >
    <h1 class="text-3xl font-serif text-gray-300">Hi there , Iam {{ $myName }} </h1>
    <input type="text" class=" border border-gray-300 rounded-md py-1.5 outline-0 px-3 text-gray-300" />
    {{-- Nothing worth having comes easy. - Theodore Roosevelt --}}
</div>