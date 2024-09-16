<x-layouts.app>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title">
                {{ __('Pizza List') }}
            </div>

            @foreach ($pizzas as $pizza)
                <div>
                    <!-- Link to the show page using the pizza's slug -->
                    <a href="{{ route('pizza.show', $pizza->slug) }}">
                        <!-- Display pizza details with index number, type, and base -->
                        {{ $loop->iteration }} - {{ $pizza->type }} -
                        {{ $pizza->base }}
                    </a>
                </div>
            @endforeach

            <!-- If there are no pizzas, show a message -->
            @if ($pizzas->isEmpty())
                <p>{{ __('No pizzas available at the moment.') }}</p>
            @endif
        </div>
    </div>
</x-layouts.app>
