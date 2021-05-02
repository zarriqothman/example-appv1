@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <span style="margin-bottom: .5rem;font-weight: 500;line-height: 1.2;font-size: 1.25rem;vertical-align: middle;">Add Note</span>
        <a href="/notes" style="float: right;color:white" type="button" class="btn btn-info"><i class="fas fa-arrow-left"></i>&nbsp;Back</a>
    </div>
    <div class="card-body">
        <form class="needs-validation" action="/notes" method="POST" novalidate>
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" id="nameFl" placeholder="name" name="name" required>
                    <div class="invalid-feedback">
                        Please provide a name.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Description</label>
                    <input type="text" class="form-control" id="descFl" placeholder="Description" name="desc" required>
                    <div class="invalid-feedback">
                        Please provide desription.
                    </div>
                </div>
            </div>
            <button class="btn btn-info" type="submit">Submit form</button>
        </form>
    </div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
        }, false);
    });
    }, false);
})();
</script>   
@endsection
