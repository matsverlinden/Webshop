@if(Session::has('flash_message_create'))
<div class="alert alert-success">
    {{ Session::get('flash_message_create') }}
</div>
@endif

@if(Session::has('flash_message_edit'))
<div class="alert alert-success">
    {{ Session::get('flash_message_edit') }}
</div>
@endif

@if(Session::has('flash_message_delete'))
<div class="alert alert-success">
    {{ Session::get('flash_message_delete') }}
</div>
@endif