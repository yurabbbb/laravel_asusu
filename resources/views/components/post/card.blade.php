<x-card>
    <x-card-body>
        <h5>
            <a href="{{ route('blog.show' , $post->id) }}">
            {{ $post -> title }} 
            {{-- 
                {{$loop->iteration}} - выводит номер итерации
            --}}
            
            </a>
        </h5>
        <p>
            {{ $post -> content }}
        </p>
        <div class="small text-muted">
            {{ now()->format('d.M.Y H:i:s') }}
        </div>
    </x-card-body>
</x-card>