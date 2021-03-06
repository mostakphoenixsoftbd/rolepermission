@extends('backend.layouts.master')

@section('title')
@section('styles')

@endsection
@section('admin-content')
<!-- Fieldset legend -->
<div class="row">
<div class="col-md-12">

<!-- Basic legend -->
<div class="card">
<div class="card-header header-elements-inline">
<h5 class="card-title">Create your role here...</h5>
<div class="header-elements">
<div class="list-icons">
<a class="list-icons-item" data-action="collapse"></a>
<a class="list-icons-item" data-action="reload"></a>
<a class="list-icons-item" data-action="remove"></a>
</div>
</div>
</div>

<div class="card-body">
@include('backend.layouts.partials.messages')
<form action="{{route('roles.store')}}" method="POST">
@csrf

<fieldset>
<legend class="font-weight-semibold text-uppercase font-size-sm">Role Create Form</legend>

<div class="form-group row">
<label class="col-lg-3 col-form-label">Role Name:</label>
<div class="col-lg-9">
<input type="text" name="name" id="name" class="form-control" placeholder="Enter role name">
</div>
</div>


<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-6">


<div class="mb-3 mb-md-2">
<label class="font-weight-semibold">Check Permission</label>
<div class="col-md-12">
<div class="form-group">
<div class="form-check">      
<input type="checkbox" class="form-check-input" value="1" name="BulkSelect" id="BulkSelect"/>Select All<br>
<hr>
</div></div>
@foreach ($permissions as $permission)
<div class="form-group">
<div class="form-check">
<label class="form-check-label"></label>
<input type="checkbox" name="permissions[]" for="checkPermission{{$permission->id}}" value="{{$permission->name}}" 
class="Bulkers form-check-input">{{$permission->name}}<br>
</div></div>
@endforeach

</div>
</div>
</div>
{{-- // Form Group end --}}


</div>
</div>
</div>
</div>
<!-- /colors -->


</fieldset>

<div class="text-right">
<button type="submit" class="btn btn-success">Submit Role <i class="icon-paperplane ml-2"></i></button>
</div>


</form>
</div>
</div>


</div>


@endsection


@section('scripts')

<script src="{{asset('backend/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/plugins/forms/styling/switch.min.js')}}"></script>

<script src="{{asset('backend/global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>

<script type="text/javascript">
    /**
    * Check all the permissions
    */
    /* $("#checkPermissionAll").click(function(){
        if($(this).is(':checked')){
            // check all the checkbox
            $('input[type=checkbox]').prop('checked', true);
        }else{
            // un check all the checkbox
            $('input[type=checkbox]').prop('checked', false);
        }
    });

    function checkPermissionByGroup(className, checkThis){
       const groupIdName = $("#"+checkThis.id);
       const classCheckBox = $('.'+className+' input');

       if(groupIdName.is(':checked')){
            classCheckBox.prop('checked', true);
        }else{
            classCheckBox.prop('checked', false);
        }
    } */

    $(document).ready(function() {
  $("#BulkSelect").click(function() {
    $('.Bulkers').prop('checked', this.checked);
  });

  $('.Bulkers').change(function() {
    $("#BulkSelect").prop("checked", $(".Bulkers").length === $(".Bulkers:checked").length);
  });
});

</script>

@endsection




