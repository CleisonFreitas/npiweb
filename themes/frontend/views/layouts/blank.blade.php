@include('layouts.header') 
@include('layouts.sidenav')     
<main>
    <div class="container-fluid">
        @yield('content')
    </div>
</main>
@include('layouts.footer')
                
