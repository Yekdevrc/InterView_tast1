@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1>Create New student</h1>
            <a href="{{ route('student.index') }}" class="btn btn-sm btn-primary">Student List</a>
        </div>
        <div class="card-body">
            <form action="{{ route('student.store') }}" method="POST">
                @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" id="question" name="name" placeholder="name">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
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
