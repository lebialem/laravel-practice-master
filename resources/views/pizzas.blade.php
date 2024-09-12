<x-layouts.app>
    <div class="flex-center position-ref full hieght">
        <div class="content">
            <div class="title">
                {{ __(' pizza list') }}
            </div>

            <p> {{ $name }} - {{ $age }}</p>
            @foreach ($pizzas as $pizza)
                <div class="">
                    {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
                    @if ($loop->first)
                        <span>{{ __('- first in the loop') }}</span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
