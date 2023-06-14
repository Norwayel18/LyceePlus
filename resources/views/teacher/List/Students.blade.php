@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Students</h1>

        <form action="/Students" method="GET">
            <div class="form-group d-flex justify-content-center">
                <label for="class" class="mr-2">Select Class:</label>
                <select name="class" id="class" class="form-control">
                    <option value="">All</option>
                    @foreach($classes as $id => $name)
                        <option value="{{ $id }}" {{ request('class') == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary ml-2">Filter</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Class</th> 
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
 
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td> 
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->classes->first()->NameClass }}</td> 
                        <td>     
                            <a href='/Students/{{$user->id}}/edit' class='btn btn-primary'>Edit</a></button>
                            <form action='/Students/{{$user->id}}' method='POST' style='display:inline'>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class='btn btn-danger'>Delete</button>       
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
