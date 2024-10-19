@extends('layouts.app')


@section('content')
    <div class="p-3">
        <button class="btn-primary rounded-full">Primary Action</button>
        <button class="btn-secondary">Secondary Action</button>
        <button class="btn-accent">Accent Action</button>
        <button class="btn-info">Info</button>
        <button class="btn-success">Success</button>
        <button class="btn-warning">Warning</button>
        <button class="btn-error">Error</button>
        <button class="btn-outline-primary">Outline Primary</button>
        <button class="btn-outline-secondary">Outline Secondary</button>


        <div class="mt-6 columns-4 space-x-3 space-y-3">
            <div class="bg-primary-gradient h-32 w-full border-2"></div>
            <div class="bg-secondary-gradient bg-dots h-32 w-full border-2"></div>
            <div class="bg-info-gradient bg-lines h-32 w-full border-2"></div>
            <div class="bg-overlay-light h-32 w-full border-2"></div>
            <div class="bg-overlay-dark h-32 w-full border-2"></div>
            <div class="bg-primary bg-shimmer h-32 w-full border-2"></div>
        </div>
    </div>
@endsection
