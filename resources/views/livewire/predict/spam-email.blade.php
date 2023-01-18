<div>
    {{-- In work, do what you enjoy. --}}
    <x-slot name="title">
        {{__('Predict Spam Email')}}
    </x-slot>
    <x-slot name="page_title">
        {{__('Predict Spam Email')}}
    </x-slot>
    <x-slot name="breadcrumb_items">
        <li class="breadcrumb-item"><a href="#">Predict</a></li>
        <li class="breadcrumb-item active" aria-current="page">Email Spam</li>
    </x-slot> 
    <iframe src="http://127.0.0.1:8000/scam-report/upload-file" width="100%" height="500" style="border:1px solid black;">
    </iframe>
</div>
