@extends('layouts.app')
@section('content')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="alertSuccess">
    <strong>{{session('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="card">
    <div class="card-header">
        <span style="margin-bottom: .5rem;font-weight: 500;line-height: 1.2;font-size: 1.25rem;vertical-align: middle;">List of Note</span>
        <a href="/notes/create" style="float: right;color:white" type="button" class="btn btn-info"><i class="fas fa-plus"></i>&nbsp;Add</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 0; @endphp
                    @if (count($notes) > 1)
                        @foreach ($notes as $note)
                        @php $i++; @endphp
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$note->name}}</td>
                            <td>{{$note->description}}</td>
                            <td>{{$note->created_at}}</td>
                            <td>{{$note->updated_at}}</td>
                            <td style="text-align: center">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-danger deleteUser" data-id="{{$note->id}}" data-toggle="modal" data-target="#modalDelete"><i class="fas fa-trash"></i>&nbsp;Delete</button>
                                    <a href="/notes/{{$note->id}}/edit" type="button" class="btn btn-secondary"><i class="far fa-edit"></i>&nbsp;Edit</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr><td>No data</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalDeleteLabel">Are you sure?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-footer">
                <form method="POST" action="" id="deleteForm">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" id="noteId" value="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$("#alertSuccess").fadeOut(3000);
$(document).on('click','.deleteUser',function(){
    var userID = $(this).attr('data-id');
    $('#noteId').val(userID); 
    document.getElementById('deleteForm').action='/notes/'+userID;
});

</script>
@endsection