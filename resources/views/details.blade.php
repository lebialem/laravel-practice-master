<x-layouts.app>
    <div class="content">
        <div class="title">
            <!-- Pizza Name -->
            <h1>{{ $pizza->name }}</h1>
        </div>
        <div class="details">
            <!-- Pizza Description -->
            <p>{{ $pizza->description }}</p>

            <!-- Pizza Price -->
            <p><strong>{{ __('Price:') }}</strong> ${{ number_format($pizza->price, 2) }}</p>

            <!-- Pizza Base -->
            <p><strong>{{ __('Base:') }}</strong> {{ ucfirst(str_replace('_', ' ', $pizza->base)) }}</p>

            <!-- Pizza Type -->
            <p><strong>{{ __('Type:') }}</strong> {{ ucfirst($pizza->type) }}</p>

            <!-- Age (new/classic/vintage) -->
            <p><strong>{{ __('Age:') }}</strong> {{ ucfirst($pizza->age) }}</p>
        </div>
    </div>
</x-layouts.app>
