@extends('layouts.master')

@section('content')
@php
    $i=0
@endphp
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1>Questionnaire </h1>
                <a href="#" class="btn btn-sm btn-primary">Questionnaire New</a>
            </div>
        </div>
        <form action="{{ route('response.store') }}" method="POST">
            @csrf
        <div class="card-body">
            <input type="hidden" name="questionnaire_id" value="{{ $questionnaire->id }}">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Student Name *</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Student Email *</label>
                    <input type="email" name="email" class="form-control" placeholder="email@email.com">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <h4>{{ $questionnaire->title }}</span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="expired_at" class="form-label">Expired Date</label>
                    <h4>{{ $questionnaire->expired_at }}</span>
                </div>
                <span class="text-info mb-4" disabled>Here is your questions. you can select a correct answer for each question</span>
                @if(!empty($questionnaire->questions))
                @foreach($questionnaire->questions as $key=>$question)
                <div class="mb-3 d-flex">
                  <h5 class="text-primary">{{ ++$key }}. {{ $question->question }}</h5>
                </div>
                @php
                    $options=explode(",",$question->options);
                @endphp
                @foreach ($options as $key=>$option)
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="radio" name="{{ $question->id }}" id="flexRadioDefault1" value="{{ $option }}">
                    <label class="form-check-label" for="flexRadioDefault1">
                      {{ $option }}
                    </label>
                  </div>
                @endforeach

                  @endforeach
                @endif
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
    </div>
@endsection
