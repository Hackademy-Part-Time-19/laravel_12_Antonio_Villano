<x-layout>
    <x-success></x-success>
    <x-delete></x-delete>
    <form action="{{route('categories.update',compact('category'))}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome categoria</label>
        <input type="text" name="name" id="name">
        <button class="btn btn-success" type="submit">Modifica</button>
    </form>

</x-layout>