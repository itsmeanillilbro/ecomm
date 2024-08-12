<div>
    <!-- forgot password start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="forgat-password-area">
                        <h4 class="forgot-title">Reset Password</h4>
                        <div class="forgot-p">
                            <span class="forgot">Reset your password here</span>
                            <form wire:submit.prevent="save">
                                <div>

                                </div>
                                <input type="password" wire:model="password" placeholder="Password">
                                @error('password')
                                    <div class="error-message">{{$message}}</div>
                                @enderror

                                <input type="password" wire:model="password_confirmation"
                                    placeholder="Confirm password">
                                @error('password_confirmation')
                                    <div class="error-message">{{$message}}</div>
                                @enderror
                                <button type="submit" class="forgot-link"><span >Save</span> </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- forgot password end -->
</div>
