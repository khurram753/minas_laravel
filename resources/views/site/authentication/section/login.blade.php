<div class="u-column1 col-1 display-flex--50 display-flex tablet-block tablet-100 tablet-mb-90">
    <div class="gutter relative block-100 pb-f mobile-hor-gutter tablet-w-auto">
        <div class="fill-dimensions bg--grey-light"></div>
        <div class="relative z-20 a-center color--black">
            <h2 class="font-thin title-50 mb-title uppercase ls-30 pt-70">Login</h2>
            <form class="woocommerce-form woocommerce-form-login login a-left" id="loginForm" method="post">
                @csrf
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide disable-pad mb-24">
                    <span class="aside-pad display--block">
                        <label for="username" class="display--block font-bold uppercase  ls-30">Email Address&nbsp;
                            <span class="required">*</span></label>
                        <input type="text"  name="email"  value=""
                               class="woocommerce-Input woocommerce-Input--text input-text custom-input disable-outline title-25 block-100 font-light"/>
                    </span>
                    <span class="line-input bg--black display--block"></span>
                </p>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide disable-pad mb-24">
                    <span class="aside-pad display--block">
                        <label for="password" class="display--block font-bold uppercase">Password&nbsp;
                            <span class="required">*</span></label>
                        <input class="woocommerce-Input woocommerce-Input--text input-text disable-outline title-25 block-100 font-light"
                            type="password" name="password"/>

                        </span>
                    <span class="line-input bg--black display--block"></span>
                </p>
                <span class="display--block aside-pad pt-31 mb-y tablet-hor-mb-40">
                        <span class="woocommerce-LostPassword lost_password font-bold">
                            <a href="{{route('forgetPasswordFormUser')}}"
                               class="underlined hover-red color--black uppercase ls-180 title-12">Lost your password?</a>
                        </span>
                        <span class="form-row relative float-right tablet-hor-float-none tablet-hor-block tablet-hor-mt-25">
                            <span class="display--inline pl-50 relative link-remember ">
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme font-bold uppercase ls-180">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox op-0 fill-dimensions cursor z-20"
                                        name="remember_me" type="checkbox" id="rememberme" value="forever"/>
                                    <span class="custom-checkbox abs-tl trans">
                                        <span class="line abs-tc bg--black"></span>
                                        <svg class="icon icon--check color--white top-9 op-0 sm abs-tc"><use
                                                xlink:href="#check"></use></svg>
                                    </span>
                                    <span class="trans title-12">Remember me</span>
                                </label>
                            </span>
                        </span>
                        <span class="clear"></span>
                    </span>
                <span
                    class="button round-button large br-50 display--block m-auto relative mb-hr trans">
                        <span class="block-80 abs-center a-center font-bold title-12 uppercase ls-180">Login</span>
                        <button type="button"
                                class="woocommerce-button button woocommerce-form-login__submit fill-dimensions op-0 loginBtn"
                                name="login"  value="Log in">Log in</button>
                    </span>
            </form>
            {{--                                <div class="a-center">--}}
            {{--                                    <a class="color--black social-login-btn social-login-btn--facebook relative display--inline"--}}
            {{--                                       href="#" data-plugin="nsl" data-action="connect" data-redirect="current"--}}
            {{--                                       data-provider="facebook" data-popupwidth="475" data-popupheight="175">--}}
            {{--                                        <span class="font-italics title-17 ls-30">or you may </span><span--}}
            {{--                                            class="font-bold ls-30 title-17">LOGIN VIA FACEBOOK</span>--}}
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
