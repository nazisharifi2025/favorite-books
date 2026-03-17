<?php

use Livewire\Component;
use App\Models\Book ;
new class extends Component
{
    public $books ;
    public function mount(){
        $this->books = Book::all();
    }
};
?>

<div class="w-6xl grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-4 text-gray-300 mx-auto my-6">
   @foreach ($books as $book)
       <div class=" bg-gray-600  p-4 flex flex-col gap-2 rounded-md">
        <div class="bg-linear-60 from-blue-200 to-blue-700 text-white ">
            <i class="fa-solid fas-book-open"></i>
        </div>
        <h1 class="text-gray-400 text-2xl ">{{ $book->name }}</h1>
       <h2>Author: {{ $book->Author }} </h2>
       <div class=" flex w-full justify-between">
        <h2>
          Rating:  <span class="text-green-400 font-bold">{{ $book->rating }}</span>
        </h2>
        <button class=" px-3 py-2 bg-red-600 text-white rounded-md">Delete</button>
       </div>
       </div>
   @endforeach
</div>