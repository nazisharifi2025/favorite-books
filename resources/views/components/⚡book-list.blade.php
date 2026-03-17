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
       <h1>{{ $book->name }}</h1>
       <h2>Author: {{ $book->Author }} </h2>
       <div>
        <h2>
          Rating:  {{ $book->rating }}
        </h2>
        <button class=" px-3 py-2 bg-red-600">Delete</button>
       </div>
   @endforeach
</div>