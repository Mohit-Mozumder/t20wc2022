
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            
            <form class="login100-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title">
                Administrator  Panel
                </span>
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>
                @error('email')
                <span class="text-danger">
                    <small><strong>{{ $message }}</strong></small>
                </span>
                @enderror

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                    <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>
                @error('password')
                <span class="text-danger">
                    <small><strong>{{ $message }}</strong></small>
                </span>
                @enderror
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>

