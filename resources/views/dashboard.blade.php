@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Dashboard</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('questionnaire.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title">
                  </div>
                  <div class="mb-3">
                    <label for="expired_at" class="form-label">Expired Date</label>
                    <input type="date" class="form-control" id="expired_at" name="expired_at" placeholder="Expired Date">
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary">Generate</button>
            </form>
        </div>
    </div>
@endsection
