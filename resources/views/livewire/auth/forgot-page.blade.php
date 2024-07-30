<div>
    <!-- forgot password start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="forgat-password-area">
                        <h4 class="forgot-title">Forgot password?</h4>
                        <div class="forgot-p">
                            <span class="forgot">Reset your password here</span>
                            <form wire:submit.prevent="save" >
                                <div>

                                </div>
                                <input type="email" wire:model="email" placeholder="Your email">
                                @error('email')
                                    <div class="error-message">{{$message}}</div>
                                @enderror
                                <button  type="submit" class="forgot-link"><span>Get new password <i
                                class="fa fa-unlock"></i></span></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- forgot password end -->
</div>
