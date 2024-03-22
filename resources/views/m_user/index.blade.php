@extends('layout.app')

{{-- customize layout section --}}

@section('subtitle', 'User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'User')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD user</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('m_user.create') }}"> Input User</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">User id</th>
            <th width="150px" class="text-center">Level id</th>
            <th width="150px" class="text-center">Level kode</th>
            <th width="150px" class="text-center">Level nama</th>
            <th width="200px"class="text-center">username</th>
            <th width="200px"class="text-center">nama</th>
            <th width="150px"class="text-center">password</th>
            <th class="text-center">Action</th>
        </tr>
        @foreach ($useri as $m_user)
            <tr>
                <td>{{ $m_user->user_id }}</td>
                <td>{{ $m_user->level->level_id }}</td>
                <td>{{ $m_user->level->level_kode }}</td>
                <td>{{ $m_user->level->level_nama }}</td>
                <td>{{ $m_user->username }}</td>
                <td>{{ $m_user->nama }}</td>
                <td>{{ $m_user->password }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group" aria-label="User Actions">
                        <a class="btn btn-info btn-sm mr-2" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                        <a class="btn btn-primary btn-sm mr-2" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                        <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@push('scripts')
@endpush


{{-- @extends('m_user/template')
@section('content')
    
    @endsection --}}
