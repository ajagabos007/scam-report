<x-app-layout>

    <x-slot name="title">
        {{__('Report a scam')}}
    </x-slot>
    <x-slot name="page_title">
        {{__('Report a scam')}}
    </x-slot>

    <x-slot name="breadcrumb_items">
        <li class="breadcrumb-item"><a href="{{route('report-scams.index')}}">Report scams</a></li>
        <li class="breadcrumb-item active" aria-current="page"> open a new case</li>
    </x-slot>
    <livewire:report-scams.create-form />
    
</x-app-layout>
