{{ Request::session()->put('User', null) }}
@if(!Request::session()->get('User'))
    <script>
        location.assign("http://127.0.0.1:8000");
    </script>
@endif
