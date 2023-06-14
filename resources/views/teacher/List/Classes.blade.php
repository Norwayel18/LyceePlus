@extends('layouts.app')

@section('content')
<div class="container">
    <h1>CLASSES</h1>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Classes as $Class)
            <tr>
                <td>{{ $Class->NameClass }}</td>
                <td>     
                    <form action='/Classes/{{$Class->id}}' method='POST' style='display:inline'>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class='btn btn-danger'>Remove</button>       
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
