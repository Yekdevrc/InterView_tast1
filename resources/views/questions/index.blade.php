@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1>Question List</h1>
            <a href="{{ route('question.create') }}" class="btn btn-sm btn-primary">Add New</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>SN</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($questions as $question)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $question->question }}</td>
                            <td>{{ $question->correct_answer }}</td>
                            <td>{{ $question->type }}</td>
                            <td>Action</td>
                        </tr>
                    @empty
                        <td colspan="5" class="text-center">There is No Data Found!!</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
