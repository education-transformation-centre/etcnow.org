@extends('_layouts.base')

@section('body')
    <div class="h-full flex justify-center items-center">
        <div class="text-center">
            <a href="{{ url('/') }}">
                <img class="mx-auto h-32 mb-8" src="{{ url('/assets/images/logo.png') }}" />
            </a>
            <div class="max-w-2xl">
                <p class="text-lg font-semibold mb-1">Thanks for getting in touch!</p>

                <p>Our servers have recieved you message and are working hard to transport it to
                    Dr. Carr's inbox on your behalf. You should hear back from her soon.</p>
            </div>

            <a class="btn mt-5" href="{{ url('/') }}">Homepage</a>
        </div>
    </div>
@endsection
