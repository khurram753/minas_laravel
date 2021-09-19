<div class="u-column2 col-2 display-flex--50 display-flex tablet-block tablet-100">
    <div class="gutter relative block-100 pb-f mobile-hor-gutter tablet-w-auto">
        <div class="fill-dimensions bg--black"></div>

        <div class="relative z-20 color--white">
            <h2 class="font-thin title-50 mb-title uppercase ls-30 pt-70 a-center">Register</h2>
            <form method="post" class="woocommerce-form woocommerce-form-register register" id="registerForm">
                @csrf
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide disable-pad mb-24">
                    <span class="aside-pad display--block">
                        <label for="reg_username" class="display--block font-bold uppercase ls-30">Username&nbsp;
                            <span class="required">*</span></label>
                        <input type="text"
                               class="woocommerce-Input woocommerce-Input--text input-text custom-input disable-outline title-25 block-100 font-light"
                               name="name" value=""/>
                    </span>
                    <span class="line-input bg--white display--block"></span>
                </p>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide disable-pad mb-24">
                    <span class="aside-pad display--block">
                        <label for="reg_email"
                               class="display--block font-bold uppercase ls-30">Email address&nbsp;
                            <span class="required">*</span></label>
                        <input type="email"
                               class="woocommerce-Input woocommerce-Input--text input-text  disable-outline title-25 block-100 font-light custom-input"
                               name="email" value=""/>
                    </span>
                    <span class="line-input bg--white display--block"></span>
                </p>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide disable-pad mb-24">
                    <span class="aside-pad display--block">
                        <label for="reg_email"
                               class="display--block font-bold uppercase ls-30">Password
                            <span class="required">*</span></label>
                        <input type="password"
                               class="woocommerce-Input woocommerce-Input--text input-text  disable-outline title-25 block-100 font-light custom-input"
                               name="password" value=""/>
                    </span>
                    <span class="line-input bg--white display--block"></span>
                </p>

{{--                <p class="color--grey a-center disable-pad">A password will be sent to your email--}}
{{--                    address.</p>--}}
                <div class="woocommerce-privacy-policy-text">
                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your
                        account, and for other purposes described in our
                        <a href="#" class="woocommerce-privacy-policy-link" target="_blank">
                            privacy policy</a>.
                    </p>
                </div>
                <p class="form-row terms wc-terms-and-conditions a-center">
                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox  color--grey relative">
                        <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox op-0 fill-dimensions cursor z-20"
                               name="terms" id="terms"/>
                        <span class="custom-checkbox custom-checkbox--white abs-tl trans">
                            <span class="line abs-tc bg--black"></span>
                            <svg class="icon icon--check color--black top-9 op-0 sm abs-tc">
                                <use xlink:href="#check"></use>
                            </svg>
                        </span>
                        <span class="font-bold title-13 ls-180 pl-55 trans">I AGREE WITH THE ABOVE TERMS</span>
                    </label>
                </p>

                <span class="button round-button large br-50 display--block m-auto relative mb-hr trans">
                    <span class="block-80 abs-center a-center font-bold title-12 uppercase ls-180">Create account</span>
                    <button type="button" class="woocommerce-Button button fill-dimensions op-0 registerBtn">
                        Register
                    </button>
                </span>
            </form>
            {{--                                <div class="a-center">--}}
            {{--                                    <a class="color--white social-login-btn social-login-btn--facebook relative display--inline"--}}
            {{--                                       href="#" data-plugin="nsl" data-action="connect" data-redirect="current"--}}
            {{--                                       data-provider="facebook" data-popupwidth="475" data-popupheight="175">--}}
            {{--                                        <span class="font-italics title-17 ls-30">or </span><span--}}
            {{--                                            class="font-bold ls-30 title-17">REGISTER VIA FACEBOOK</span>--}}
            {{--                                        <span class="social-icon-svg display--inline abs-tr"><svg version="1.1"--}}
            {{--                                                                                                  xmlns="http://www.w3.org/2000/svg"--}}
            {{--                                                                                                  xmlns:xlink="http://www.w3.org/1999/xlink"--}}
            {{--                                                                                                  x="0px" y="0px"--}}
            {{--                                                                                                  viewBox="0 0 67 67"--}}
            {{--                                                                                                  enable-background="new 0 0 67 67"--}}
            {{--                                                                                                  xml:space="preserve"><path--}}
            {{--                                                    fill="#3A589B" d="M33.5,64c-16.568,0-30-13.432-30-30c0-16.569,13.432-30,30-30c16.568,0,30,13.431,30,30--}}
            {{--	C63.5,50.568,50.068,64,33.5,64z"/><path fill="#FFFFFF" d="M35.696,28.629c0-1.28,0.123-1.967,1.96-1.967h2.456V21.75h-3.93c-4.72,0-6.38,2.383-6.38,6.389v2.949--}}
            {{--	h-2.942v4.912h2.942V50.25h5.888V35.998h3.929l0.52-4.911H35.69L35.696,28.629z"/>--}}
            {{--</svg></span>--}}
            {{--                                    </a>--}}
            {{--                                </div>--}}
        </div>
    </div>
</div>
