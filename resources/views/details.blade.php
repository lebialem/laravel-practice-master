<x-layouts.app>
    <div class="content">
        <div class="title">
            <!-- Pizza Name -->
            <h1>{{ $pizzaModule->pizza->name }}</h1>
        </div>
        <div class="details">
            <!-- Pizza Description -->
            <p>{{ $pizzaModule->pizza->description }}</p>

            <!-- Pizza Price -->
            <p><strong>{{ __('Price:') }}</strong> ${{ number_format($pizzaModule->pizza->price ?? 0, 2) }}</p>

            <!-- Pizza Base -->
            <p><strong>{{ __('Base:') }}</strong>
                {{ $pizzaModule->pizza->base }}</p>

            <!-- Pizza Type -->
            <p><strong>{{ __('Type:') }}</strong> {{ $pizzaModule->pizza->type }}</p>

            <!-- Age (new/classic/vintage) -->
            <p><strong>{{ __('Age:') }}</strong> {{ $pizzaModule->pizza->age }}</p>
        </div>
    </div>
</x-layouts.app>
