@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1>Student List</h1>
            <a href="{{ route('student.create') }}" class="btn btn-sm btn-primary">Add New</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>SN</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($students as $student)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
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
