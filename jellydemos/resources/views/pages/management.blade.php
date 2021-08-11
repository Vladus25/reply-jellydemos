@extends('layouts.main-layout')

@section('content')

    <main>

        {{-- Slides --}}
        <section>
            <ul>
                @foreach ($plates as $plate)
                    <li>
                        {{$plate -> name}}
                    </li>
                @endforeach
            </ul>
        </section>

        {{-- Plates --}}
        <section>

        </section>

        {{-- Testimonials --}}
        <section>

        </section>

    </main>

@endsection
