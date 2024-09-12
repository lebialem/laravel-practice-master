<x-layouts.app>
    <div class="flex-center position-ref full height">
        <div class="content">
            <div class="title">
                {{ __('Pizza List') }}
            </div>
            @foreach ($pizzas as $pizza)
                <div>
                    <a href="{{ route('pizza.show', $pizza->slug) }}">
                        {{ $loop->index }} - {{ $pizza->type }} - {{ $pizza->base }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
