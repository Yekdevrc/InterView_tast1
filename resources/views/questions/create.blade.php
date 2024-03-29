@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1>Create New Question</h1>
            <a href="{{ route('question.create') }}" class="btn btn-sm btn-primary">Question List</a>
        </div>
        <div class="card-body">
            <form action="{{ route('question.store') }}" method="POST">
                @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="question" class="form-label">Question</label>
                    <input type="text" class="form-control" id="question" name="question" placeholder="question">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="correct_answer" class="form-label">Correct Answer</label>
                    <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="correct_answer">
                </div>
                <div class="mb-3 col-md-6">
                  <label for="type" class="form-label">Type</label>
                  <input type="text" class="form-control" id="type" name="type" placeholder="type">
                </div>
            </div>
            <div class="row option_row">
                <div class="mb-3 col-md-6">
                    <label for="options" class="form-label">Options</label>
                    <input type="text" class="form-control" id="options" name="inputs[]" placeholder="options">
                </div>
                <div class="mb-3 col-md-2">
                    <button type="button" class="btn btn-sm btn-info mt-4" id="add">Add</button>
                </div>
            </div>
                  <button type="submit" class="btn btn-sm btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $('#add').on('click', function(){
            $('.option_row').parent().append(`
            <div class="row option_row">
                <div class="mb-3 col-md-6">
                    <label for="options" class="form-label">Options</label>
                    <input type="text" class="form-control" id="options" name="inputs[]" placeholder="options">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-sm btn-danger mt-4 remove">remove</button>
                </div>
            </div>
            `)
        })

        $(document).on('click','.remove', function(){
            $(this).parent('div').parent('div').remove()
        })
    })
</script>
@endpush
