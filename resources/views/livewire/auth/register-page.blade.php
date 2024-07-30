<div>
    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="register-area">
                        <div class="register-box">
                            <h1>Create account</h1>
                            <p>Please register below account detail</p>
                            <form wire:submit.prevent="save">
                                <div>
                                    <input type="text" wire:model="name" placeholder="Your name">
                                    @error('name')
                                    <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" wire:model="email" placeholder="Email address">
                                    @error('email')
                                    <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="password" wire:model="password" placeholder="Password">
                                    @error('password')
                                    <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn-style1">Create</button>
                            </form>
                        </div>
                        <div class="register-account">
                            <h4>Already an account holder?</h4>
                            <a href="/login" class="ceate-a">Log in</a>
                            <div class="register-info">
                                <a href="terms-conditions.html" class="terms-link"><span>*</span> Terms & conditions.</a>
                                <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="privacy-policy.html">privacy policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</div>
