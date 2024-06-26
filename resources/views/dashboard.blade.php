@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1>Questionnaire List</h1>
            <a href="{{ route('questionnaire.create') }}" class="btn btn-sm btn-primary">Add New</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($questionnaires as $questionnaire)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $questionnaire->title }}</td>
                            <td><a href="{{ }}" class="btn btn-sm btn-info">Send mail</a></td>
                        </tr>
                    @empty
                        <td colspan="5" class="text-center">There is No Data Found!!</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
