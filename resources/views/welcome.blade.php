@extends('layouts.app')

@section('content')
<div class="w-full">
    <x-header />
    {{-- Products --}}

    @livewire('category-card')
    <x-serveces />
    <div class="mt-20" id="new-collection">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-block">
                    <h3 class="text-3xl font-bold mb-4">Nouvelle collection</h3>
                    <div class="text-lg text-gray-600">
                        Découvrez les derniers produits de notre boutique en ligne <strong class="font-semibold">Lamssa
                            Fashion</strong>
                    </div>
                </div>
            </div>
            @livewire('product-card')
        </div>
    </div>
    <x-bottom-hero />
</div>
@endsection
