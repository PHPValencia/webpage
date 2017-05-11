@extends('_layouts.master')

@section('contents')

    <p class="eyelet margin_top_0">
        {{ $page->community->description }}
    </p>
    <h2 class="centered orange scream">
        Próximo meetup: <span>{{ $page->formattedDate($date) }}, {{ $start }}</span>
    </h2>
@endsection
