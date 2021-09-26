<div class="relative pt-142 pb-173 tablet-hor-pb-100 mobile-hor-pt-90">
    <div class="fill-dimensions bg-white"></div>
    <div class="grid max-8cols-g over color-black mobile-hor-100">
        <div class="font-bold font-40 color-black mb-63 a-center js-bt overflow relative skrollr-pointer"
             data-emit-events data-bottom-top="">
            <div class="js-bt__el">SUBMIT YOUR REQUEST</div>
        </div>
        <div class="opc-0 no-visible js-fade-in skrollr-pointer" data-emit-events data-bottom-top="" data-cubic="custom" data-trans="1.6">
            <div role="form" class="wpcf7" id="wpcf7-f503-p300-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                <form id="submitRequestForm" action="{{route('contactUsRequest')}}" method="post" class="wpcf7-form wpcf7-acceptance-as-validation" novalidate="novalidate">
                    @csrf
                    <div class="mb-156  a-center form-radio-holder">
                        <span class="wpcf7-form-control-wrap radio-214">
                            <span class="wpcf7-form-control wpcf7-radio radio">
                                <span class="wpcf7-list-item first">
                                    <label>
                                        <span class="wpcf7-list-item-label">BECOME A RETAILER</span>
                                        <input type="radio" name="request_type" value="BECOME A RETAILER"
                                               checked="checked"/>
                                    </label>
                                </span>
                                <span class="wpcf7-list-item last">
                                    <label>
                                        <span class="wpcf7-list-item-label">GENERAL INQUIRY</span>
                                        <input type="radio" name="request_type" value="GENERAL INQUIRY"/>
                                    </label>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="form-field block-50 mobile-hor-100 display--inline-top">
                        <div class="gutter">
                            <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                <label class="font-bold font-17 extra-ls extra-lh display--block"
                                       for="contact_name">FULL NAME<span
                                        class="color-red ml-3">*</span>
                                </label>

                                <span class="wpcf7-form-control-wrap full_name">
                                    <input type="text" name="full_name" value=""
                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input required maxw-500 block-100 m-auto font-25 extra-lh font-light"
                                           id="contact_name" aria-required="true" aria-invalid="false"/>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-field block-50 mobile-hor-100 display--inline-top">
                        <div class="gutter">
                            <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                <label class="font-bold font-17 extra-ls extra-lh display--block"
                                       for="form-email">EMAIL<span class="color-red">*</span></label>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email"
                                           value=""
                                           class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email input required email font-25 extra-lh font-light"
                                           id="form-email"
                                           aria-required="true"
                                           aria-invalid="false"/>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-field block-50 mobile-hor-100 display--inline-top">
                        <div class="gutter">
                            <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                <label class="font-bold font-17 extra-ls extra-lh display--block"
                                       for="form-company">COMPANY</label>
                                <span class="wpcf7-form-control-wrap company">
                                    <input type="text"
                                           name="company" value=""

                                           class="wpcf7-form-control wpcf7-text input font-25 extra-lh font-light"
                                           id="form-company"
                                           aria-invalid="false"/>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-field block-50 mobile-hor-100 display--inline-top">
                        <div class="gutter">
                            <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                <label class="font-bold font-17 extra-ls extra-lh display--block"
                                       for="form-country">COUNTRY</label>
                                <span class="wpcf7-form-control-wrap country">
                                    <input type="text"
                                           name="country" value=""

                                           class="wpcf7-form-control wpcf7-text input font-25 extra-lh font-light "
                                           id="form-country"
                                           aria-invalid="false"/>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-field block-50 mobile-hor-100 display--inline-top">
                        <div class="gutter">
                            <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                <label class="font-bold font-17 extra-ls extra-lh display--block"
                                       for="form-website">WEBSITE</label>
                                <span class="wpcf7-form-control-wrap website">
                                    <input type="text" name="website" value=""
                                           class="wpcf7-form-control wpcf7-text input font-25 extra-lh font-light"
                                           id="form-website" aria-invalid="false"/>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block-100 pt-45 policy-holder">
                        <div class="gutter textarea-holder relative">
                            <label class="font-bold font-17 extra-ls extra-lh abs-tl textarea-label"
                                   for="country">YOUR COMMENTS</label>
                            <span class="wpcf7-form-control-wrap comments">
                                <textarea name="comments" cols="40" rows="10"
                                          class="wpcf7-form-control wpcf7-textarea textarea"
                                          aria-invalid="false"></textarea>
                            </span>
                        </div>
                    </div>


                    <div class="block-100 pt-60 policy-holder">
                        <div class="gutter relative mb-96 a-center">

                            <div class="font-light font-16 ns-policy pt-17 mb-26">
                                Βy submitting your request, you agree to the
                                <a href="https://www.kommigraphics.com/en/privacy-policy/" target="_blank"
                                   rel="noopener">Privacy Policy</a> and <a
                                    href="https://www.kommigraphics.com/privacy-policy/" target="_blank"
                                    rel="noopener">Terms & Conditions</a>
                            </div>
                            <span class="relative chk-holder form-chk-holder">
                                <span class="display-block form-acceptance">
                                    <label
                                        class="chk-label display--inline trans over font-bold font-12 extra-ls extra-lh3 color-black clickable"
                                        for="acceptance-322">
                                        I AGREE WITH THE ABOVE TERMS
                                    </label>
                                    <span class="wpcf7-form-control-wrap acceptance-322">
                                        <span class="wpcf7-form-control wpcf7-acceptance">
                                            <span class="wpcf7-list-item">
                                                <input type="checkbox" name="terms_condition" value="1"
                                                       aria-invalid="false"
                                                       class="chk-box trans abs-tl icon icon--check display--inline"
                                                       id="acceptance-322 terms_check"/>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="a-center">
                        <span class="circle-btn relative cursor display--inline circle-link">
                            <span class="circle-btn circle-btn--black cursor relative display--inline circle-link">
                                <span class="circle-btn circle-btn--black relative cursor display--inline circle-link">
                                    <svg class="circle-btn__wrapper-circle" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 151.689 148.568">
                                           <path class="js-svg-circle" fill="none" stroke="#000" stroke-width="1"
                                                 stroke-miterlimit="10" d="M75.845,145.15
                                           c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
                                           S114.983,145.15,75.845,145.15"/>

                                           <path class="js-stretched" fill="none" opacity="0" stroke="#000"
                                                 stroke-width="1"
                                                 stroke-miterlimit="10"
                                                 d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"/>

                                           <path class="js-stretched-2" fill="none" stroke="#000" opacity="0"
                                                 stroke-miterlimit="10"
                                                 d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
                                           C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
                                           C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
                                           c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
                                           c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"/>
                                    </svg>
                                    <input type="button" id="submitRequest" value="Send" class="wpcf7-form-control wpcf7-submit transparent-button"/>
                                    <span class="abs-center a-center z--1 block-70 extra-ls font-bold font-12 extra-ls extra-lh">
                                        SUBMIT YOUR REQUEST
                                    </span>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
            </div>
        </div>
    </div>
</div>
