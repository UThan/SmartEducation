
<div class="card">
    <div class="card-body">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-2">
            <a href="{{route('student.all')}}" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">                   
                </span>
                <span class="h3 fw-bolder">{{ config('app.name') }}</span>
            </a>
        </div>        

        <form wire:submit.prevent='submit'>
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="Enter your username" autofocus wire:model.defer='name'/>
                <x-form.error name='name'/>
            </div>
            
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email"
                  placeholder="Enter your email or username" autofocus="" wire:model.defer='email'>
              <x-form.error name='email'/>
            </div>

            <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password"
                        placeholder="......."
                        aria-describedby="password" wire:model.defer='password'/>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    <x-form.error name='password'/>
                </div>
            </div>

            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password_confirmation">Password</label>
              <div class="input-group input-group-merge">
                  <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                      placeholder="......."
                      aria-describedby="password_confirmation" wire:model.defer='password_confirmation'/>
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                        I agree to
                        <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                </div>
            </div>
            <button class="btn btn-primary d-grid w-100">Sign up</button>
        </form>

        <p class="text-center">
            <span>Already have an account?</span>
            <a href="auth-login-basic.html">
                <span>Sign in instead</span>
            </a>
        </p>
    </div>
</div>

