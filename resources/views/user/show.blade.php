<x-layout>

    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <x-card 
                :name="$article['name']" 
                :title="$article['title']" 
                :description="$article['description']"
                :id="$article['id']"
                :image="$article['image']">
                </x-card>    
            @endforeach

        </div>
    </div>
</x-layout>