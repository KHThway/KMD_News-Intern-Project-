@include('userpanel.partials.userheader')

<section class="container w-full d-flex display-1 justify-content-center" style="width: 100%; height: 600px;">
    <div class="p-5">
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Admin Panel</a>
    </div>
    <div class="float-left p-5">
        <a href="{{ route('userpanel.index') }}" class="btn btn-primary btn-lg">User Panel</a>
    </div>
</section>




@include('userpanel.partials.userfooter')
