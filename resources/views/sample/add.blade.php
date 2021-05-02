@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <span style="margin-bottom: .5rem;font-weight: 500;line-height: 1.2;font-size: 1.25rem;vertical-align: middle;">{{$title}}</span>
        <a href="/sample/view" style="float: right;color:white" type="button" class="btn btn-info"><i class="fas fa-arrow-left"></i>&nbsp;Back</a>
    </div>
    <div class="card-body">
        <form class="was-validated">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control is-invalid" id="nameFl" placeholder="Name" required>
                    <div class="invalid-feedback">
                      Please provide a name test.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Description</label>
                    <input type="text" class="form-control is-invalid" id="descFl" placeholder="Description" required>
                    <div class="invalid-feedback">
                      Please provide a description test.
                    </div>
                </div>
            </div>
            <button class="btn btn-info" type="submit">Submit form</button>
        </form>
    </div>
</div>    
@endsection
