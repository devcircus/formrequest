<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
    </head>
    <body>

    <form class="form-horizontal" method="POST" action="{{ route('change-password') }}">
        @method('PUT')
        @csrf

        <div class="form-group row{{ $errors->has('current-password') ? ' has-error' : '' }}">
            <label for="current-password" class="col-md-4 col-form-label">{{ __('Current Password') }}</label>

            <div class="col-md-6">
                <input id="current-password" type="password" class="form-control" name="current-password" required>

                @if ($errors->has('current-password'))
                    <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('current-password') }}</strong>
                </span>
                @endif
            </div>
		</div>

        <div class="form-group row{{ $errors->has('new-password') ? ' has-error' : '' }}">
            <label for="new-password" class="col-md-4 col-form-label">{{ __('New Password') }}</label>

            <div class="col-md-6">
                <input id="new-password" type="password" class="form-control" name="new-password" required>

                @if ($errors->has('new-password'))
                    <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('new-password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="new-password-confirm" class="col-md-4 col-form-label">{{ __('Confirm New Password') }}</label>

            <div class="col-md-6">
                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Change Password') }}
        </button>
    </form>

</body>
</html>