@extends('layouts.app')

@section('title', 'Assign Property')

@section('content')
    {{-- header --}}
    <x-buyer.header />
    {{-- properties --}}
    <section class="container mx-auto py-10 min-h-[calc(100svh-11em)] px-3 md:px-0">
        {{-- filter button --}}
        <h1 class="text-text font-serif font-bold">- ASSIGN PROPERTY</h1>
        {{-- property item --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 py-10">

            {{-- fetch all property with pagination --}}
            @forelse ($properties as $property)
            <div class="bg-body border  h-fit rounded ">
                <div class="p-3">
                    <img src="{{ asset($property?->photo?->photo) }}" loading="lazy" class="h-64 w-full object-cover" alt="">
                </div>
                <h1 class="px-3 text-text tracking-wider font-semibold uppercase ">{{ $property->title }}</h1>
                <p class="px-3 flex gap-x-2 text-paragraph pt-2">
                    <img src="{{ asset('icons/local_offer_black_24dp.svg') }}" class="w-[1rem]" alt="">
                    ₱{{ number_format($property->price) }}
                </p>
                <p class="px-3 flex gap-x-2 text-paragraph">
                    <img src="{{ asset('icons/location_pin_black_24dp.svg') }}" class="w-[1rem]" alt="">
                    {{ $property->address }}
                </p>
                <div class="flex items-center justify-end px-3 gap-x-2 pb-3">
                    {{-- <a href="{{ route('buyer_add_bookmark', ['id' => $property->id]) }}" class=" border  rounded px-4 py-2 text ">
                        <img src="{{ asset('icons/bookmark_black_24dp.svg') }}" alt="">
                    </a> --}}
                    <a href="{{ route('view_property',['id' =>$property->id]) }}" class="bg-transparent border rounded px-4 py-2 text-text hover:bg-button transition-all ease-in-out">
                        view
                    </a>
                </div>
            </div>
            @empty
                <h1 class="text-paragraph/80">

                    No Bookmark Found . . .
                    </h1>
            @endforelse



        </div>
        {{-- pagination --}}
        <div class="py-2">
            {{ $properties->links() }}
        </div>
    </section>

    {{-- footer --}}
    <x-buyer.footer/>
@endsection

@section('scripts')
<script src="{{ asset('js/modal.js') }}"></script>
<script>
    const filterForm = document.querySelector('#filterForm');
    function showFIlter(){
        filterForm.classList.toggle('hidden');
    }
</script>
@endsection
