{{ Request::session()->put('User', null) }}
<h1>Terminal is currently in developent by SYSADMIN</h1>
@if(Request::session()->get('User'))
    <script>
        location.assign("http://127.0.0.1:8000");
    </script>
@endif
