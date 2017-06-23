    <div class="row">

    <form role="form" id="register_form" method="POST" action="{{ url('/company/register') }}">
        {{ csrf_field() }}

        <div class="input-field{{ $errors->has('name') ? ' has-error' : '' }} col s10 offset-s1">
            <label for="name">Name</label>

            <input id="name" type="text" name="name" value="{{ old('name') }}" autofocus required>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
        </div>

        <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }} col s10 offset-s1">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
        </div>

        <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s10 offset-s1">
            <label for="password" class="col-md-4 control-label">Password</label>

                <input id="password" type="password" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>

        <div class="input-field{{ $errors->has('password_confirmation') ? ' has-error' : '' }} col s10 offset-s1">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <input id="password-confirm" type="password" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
        </div>

        <div class="input-field{{ $errors->has('descrip') ? ' has-error' : '' }} col s10 offset-s1">
            <label for="description">Description of Company </label>

            <input id="description" type="text" name="descrip" required >
             @if ($errors->has('descrip'))
                    <span class="help-block">
                        <strong>{{ $errors->first('descrip') }}</strong>
                    </span>
            @endif

         </div>

        <div class="col s10 offset-s1" style="margin-top: 1.8em;">
            <button id="company_register_btn" class="btn waves-effect waves-light">
                            Register
                            <!-- <i class="material-icons right">send</i> -->
            </button>
        </div>
    </form>
</div>
