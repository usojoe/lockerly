@if(session()->has('flash_notification.message'))                
    <div class="alert alert-dismissable alert-{{ session('flash_notification.level') }}">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>            
        {{ session('flash_notification.message') }}
    </div>
@endif
