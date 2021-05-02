@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <span style="margin-bottom: .5rem;font-weight: 500;line-height: 1.2;font-size: 1.25rem;vertical-align: middle;">{{$title}}</span>
        <a href="/sample/add" style="float: right;color:white" type="button" class="btn btn-info"><i class="fas fa-plus"></i>&nbsp;Add</a>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td style="text-align: center">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete"><i class="fas fa-trash"></i>&nbsp;Delete</button>
                                <a href="/sample/edit" type="button" class="btn btn-secondary"><i class="far fa-edit"></i>&nbsp;Edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td style="text-align: center">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete"><i class="fas fa-trash"></i>&nbsp;Delete</button>
                                <a href="/sample/edit" type="button" class="btn btn-secondary"><i class="far fa-edit"></i>&nbsp;Edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td style="text-align: center">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete"><i class="fas fa-trash"></i>&nbsp;Delete</button>
                                <a href="/edit" type="button" class="btn btn-secondary"><i class="far fa-edit"></i>&nbsp;Edit</a>
                            </div>
                        </td>
                    </tr>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
</div>
@endsection