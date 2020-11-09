<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $Name }} - {{ $Title }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- End Styles -->

    <!-- JS CDN Assets-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- End JSCDN Assets-->
</head>

<body>

    @if ($Indicator)
        <!-- Star: Modal -->
        <div class="modal in" id="forgotpassModal" role="dialog" style="display: block;">

            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h2 class="modal-title text-center">Forgot Password!</h2>
                    </div>
                    <div class="modal-body">
                        <p class=" alert-info">Confirm your email address and a link will be sent to your email to
                            resert your password!</p>
                        <div class="form-group">
                            <label for="email">Email address / Username:</label>
                            <input placeholder="john255" type="text" class="form-control" id="log-email">
                        </div>
                        <br>
                        <a class="btn" href="/activate/1">Login ?</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="forgotpasswordBTN" type="submit" class="btn btn-primary"
                            onclick="AppForgotPassword()">Send Link</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Modal -->
    @else
        <!-- Star: Modal -->
        <div class="modal in" id="resetpassModal" role="dialog" style="display: block;">

            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h2 class="modal-title text-center">Reset Password!</h2>
                    </div>
                    <div class="modal-body">
                        <p class=" alert-primary">Please enter your new password and confirm your new password below.</p>
                        <div class="form-group">
                            <label for="reset-password">New Password:</label>
                            <input type="password" class="form-control" id="reset-password">
                        </div>
                        <div class="form-group">
                            <label for="reset-confirm-password">Confirm Password:</label>
                            <input type="password" class="form-control" id="reset-confirm-password">
                        </div>
                        <input type="text" id="reset-email" value="{{ $EmailAddress }}" hidden/>
                        <input type="text" id="reset-hash" value="{{ $ActivationHash }}" hidden/>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="resetpasswordBTN" type="submit" class="btn btn-primary"
                            onclick="AppResetPassword()">Reset Password</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Modal -->
    @endif

    <!-- End Register Modal -->
    <input type="hidden" class="form-control" id="index-csrf" value="{{ csrf_token() }}" hidden>
    <!-- Script -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Local Javascript-->
    <script src="{{ asset('js/index.request.js') }}"></script>
</body>

</html>
