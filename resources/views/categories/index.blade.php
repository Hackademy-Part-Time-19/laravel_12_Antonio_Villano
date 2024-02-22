<x-layout>
   <x-delete/>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <button class="btn btn-secondary"><a
                                href="{{ route('categories.edit', ['category' => $category->id]) }}">Modifica</a> </button>
                        <form action="{{route('categories.destroy',['category' => $category->id])}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger">Elimina</button></form>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
