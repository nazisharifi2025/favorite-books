<?php

use Livewire\Component;
use App\Models\Book ;
new class extends Component
{
    public $books ;
    public $isModel = false ;
    public $BookId = null ;
    public function mount(){
        $this->books = Book::all();
    }
    public function DeleteBook($id){
        $this->BookId = $id ;
        $this->isModel = true ;
    }
  
};
?>

<div class="w-6xl grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-4 text-gray-300 mx-auto my-6">
   @foreach ($books as $book)
       <div class=" bg-gray-600  p-4 flex flex-col gap-2 rounded-md backdrop-blur-3xl">
        <div class="bg-linear-60 from-blue-200 to-blue-700 text-white rounded-md w-fit py-2 px-3 ">
            <i class="fas-solid fa-book-open"></i>
        </div>
        <h1 class="text-gray-400 text-2xl ">{{ $book->name }}</h1>
       <h2>Author: {{ $book->Author }} </h2>
       <div class=" flex w-full justify-between">
        <h2>
          Rating:  <span class="text-green-400 font-bold">{{ $book->rating }}</span>
        </h2>
        <button wire:click="DeleteBook({{ $book->id }})" class=" px-3 py-2 bg-red-600 text-white rounded-md">Delete</button>
       </div>
       </div>
   @endforeach
   @if ($isModel)
       <div class="w-full min-h-screen absolute top-0 right-0 flex justify-center items-center ">
       <div class=" bg-white rounded-md border-gray-200 flex flex-col gap-2 p-8 w-4/12 justify-between">
        <h1 class=" text-gray-400 text-xl font-bold">Delete This Item</h1>
        <span>Are You sure you want to deleted ?</span>
        <div class="flex justify-between items-center">
             <button >Cloce</button>
       </div>
   @endif
</div>