@foreach($books as $book)
    <p>{{ $book->title }}</p>
    <p>ID: {{ $book->id }}</p>
    <p>Penulis: {{ $book->author }}</p>
    <p>Tahun: {{ $book->year }}</p>
    <p>Stok: {{ $book->stock }}</p>
@endforeach