@extends('layout.front-layout.app')

@section('title')
    MINAS
@endsection

@section('content')

    <div class="fill-dimensions fixed full-height site-intro bg-black overflow" id="site-intro">

        <div class="fill-dimensions cover-img z--1 opc-0 no-visible js-scale-in--sm js-intro-bg"
             style="background-image: url({{asset('site/images/minas_intro_homepage.jpg')}}); transform-origin: center center 0px; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></div>

        <div class="opc-0 no-visible js-intro-fade abs-tc" style="visibility: inherit; opacity: 1;">
            <a aria-label="Minas Designs" href="{{route('home')}}" class="site-intro__logo abs-tc">
                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet"
                     viewBox="0 0 523.119 152.027">
                    <g fill-rule="evenodd" clip-rule="evenodd" fill="#FFF">
                        <path
                            d="M506.185 73.081c-11.361-9.835-23.782-11.475-38.45-8.827-11.592 2.093-32.917 5.267-43.792 1.423-7.555-2.671-13.654-1.101-20.923 1.028-7.107 2.081-13.328 3.545-20.925 3.956-11.29.61-12.624-5.133-19.424-5.261-7.3-.137-13.841 3.171-20.692 4.337-5.984 1.018-14.82 4.281-19.55-1.468-2.49-3.026-2.981-4.753-7.354-5.165-3.007-.283-7.311 1.285-9.857 2.471-3.524 1.64-15.355 8.101-18.038 3.378-.941-1.657.061-9.072-5.287-6.612-2.402 1.105-4.94 5.305-4.94 7.706v2.669c0 3.631 3.603 7.525 7.055 8.261 4.113.875 8.878-.399 12.671-2.023 5.085-2.178 17.902-10.489 21.829-5.216 2.559 3.436 2.704 6.183 7.712 7.603 4.087 1.159 8.811-.393 12.821-1.195 6.944-1.39 17.859-6.164 24.607-6.164h2.39c5.035 0 6.21 8.664 18.103 7.296 6.489-.746 15.047-3.12 21.121-5.026 7.828-2.459 14.814-2.389 22.858-.559 7.467 1.698 15.562 2.056 23.132.882 14.971-2.322 29.609-7.735 44.356-.784 5.651 2.664 10.48 6.367 14.674 11.321 2.014 2.379 4.062 5.563 4.636 8.441.715 3.585-1.631 7.232-5.417 7.232h-3.513c-12.189 0-5.362 10.427-.041 11.293 3.315.539 7.404-.818 10.074-2.244 3.337-1.783 4.447-3.226 6.029-6.476 4.929-10.124-8.347-25.77-15.865-32.277zM281.166 31.409v-3.091c0-4.626-4.144-8.736-8.476-9.354-8.201-1.172-9.327 6.211-3.687 6.511 7.602.403 3.841 6.401-.008 8.802-4.905 3.06-1.298-1.948-1.337-3.129-.072-2.217-2.771-4.014-4.8-4.181-8.942-.738-14.166 15.533-1.786 18.915 8.662 2.364 20.094-5.878 20.094-14.473zM211.225 70.856c-8.988-3.834 10.806-15.624-.881-21.459-7.4-3.694-17.684 3.102-24.618 6.427-7.729 3.706-14.925 7.067-22.958 10.624-4.171 1.847-12.742 5.174-19.358 6.881-2.547.657-4.805 1.074-6.41 1.074h-3.231c-4.166 0-9.132-1.866-10.437-6.284-1.033-3.496-.577-3.782 1.802-5.862 1.572-1.373 2.855-2.648 4.426-4.004 4.534-3.913 9.174-7.859 13.849-11.897a877.283 877.283 0 0 0 4.194-3.642c7.004-6.12 31.136-27.639 31.979-35.197.575-5.156-3.99-8.104-8.677-7.419-6.402.936-7.043 1.522-12.281 4.6-6.031 3.542-10.343 7.015-15.214 11.371a381.178 381.178 0 0 0-3.667 3.331c-8.816 8.087-23.861 29.345-26.743 40.419-1.167 4.487-4.202 5.912-7.877 8.843-3.173 2.53-6.543 4.692-9.751 7.109-6.352 4.787-13.104 9.435-19.7 13.881-6.414 4.324-13.475 9.179-20.412 13.171-6.82 3.924-14.419 8.625-21.389 12.192-6.192 3.169-16.667 8.487-23.245 10.337-1.954.55-11.249 3.498-12.229 4.506-2.118 2.181 1.661 3.751 3.696 3.701 2.592-.063 4.974-.452 7.392-1.059 17.488-4.391 31.205-11.328 46.982-20.182 6.943-3.897 13.698-9.559 20.34-13.242 6.573-3.645 13.082-9.892 19.582-14 3.074-1.943 6.901-4.966 9.576-7.145 1.554-1.266 3.009-2.604 4.627-3.805 3.329-2.469 2.139-.555 4.008 1.881 5.74 7.48 17.222 7.083 25.674 6.021a44.567 44.567 0 0 0 3.138-.517c13.929-2.775 33.866-12.519 45.802-17.708 2.709-1.178 11.943-4.866 10.49 1.34-1.192 5.094-3.137 8.213 1.001 12.72 5.113 5.571 20.885 1.966 27.07-.511 4.057-1.625 8.336-2.95 12.457-4.264 3.354-1.07 12.054-4.352 10.484 2.051-2.661 10.859 16.96-2.514 11.451-11.946-7.415-12.686-38.43 13.001-50.942 7.663zm-67.816-43.938c7.108-7.377 14.256-13.123 16.299-11.187 2.262 2.145-13.077 16.42-14.929 18.118-.249.228-.728.682-1.371 1.295-4.108 3.915-14.992 14.35-16.526 14.389.397-3.705 8.436-14.217 16.527-22.615z"></path>
                    </g>
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF"
                          d="M216.631 144.877l-13.463-18.4c-.432-.564-.665-.516-.698.15l-1.746 23.386c0 .299-.183.449-.548.449l-1.845-.1c-.299.033-.449-.15-.449-.549l2.244-30.716c.033-.699.1-1.064.199-1.098.1-.033.349.232.748.799l15.558 21.291c.166.266.333.266.499 0l15.558-21.291c.398-.566.648-.832.748-.799.1.033.183.398.249 1.098l2.245 30.716c0 .365-.15.549-.449.549l-1.845.1c-.366 0-.549-.15-.549-.449l-1.745-23.386c-.066-.666-.299-.715-.698-.15l-13.463 18.4c-.201.266-.384.266-.55 0zm30.74 5.585h-1.895c-.366 0-.548-.15-.548-.449V118.1c0-.365.183-.549.548-.549h1.895c.332 0 .499.184.499.549v31.913c0 .299-.167.449-.499.449zm10.242-32.712c0-.266.1-.299.299-.1l27.077 25.48c.299.4.448.35.448-.148l.001-25.031c0-.201.1-.301.299-.301h2.394c.199 0 .299.084.299.25l.001 31.913c0 .398-.167.465-.499.199l-27.028-25.431c-.233-.232-.349-.184-.349.15l.001 25.431c0 .199-.134.299-.4.299h-2.193c-.233 0-.35-.133-.35-.398V117.75zm68.483 28.074c-.165-.266-.531-.398-1.097-.398h-24.532c-.599 0-.981.15-1.147.449l-2.643 4.389c-.134.266-.366.332-.698.199l-1.596-.898c-.333-.166-.399-.416-.2-.748l18.351-30.716c.299-.598.615-.598.947 0l18.6 32.212c.199.266.149.5-.149.699l-1.596.896c-.3.199-.549.15-.748-.148l-3.492-5.936zm-24.234-4.189c-.033.1-.1.225-.199.375s-.117.258-.05.324c.066.133.332.199.798.199h21.042c.3 0 .482-.051.549-.15.033-.066-.017-.248-.149-.547l-10.372-17.902c-.199-.398-.365-.598-.499-.598-.165 0-.349.199-.548.598l-10.572 17.701zm62.718-8.078c1.363.766 2.469 1.846 3.316 3.242s1.271 2.941 1.271 4.637c0 2.494-.865 4.622-2.594 6.384s-3.789 2.643-6.182 2.643h-15.309c-2.328 0-4.338-.814-6.035-2.443-1.693-1.629-2.609-3.606-2.742-5.935-.066-.365.117-.549.549-.549h1.795c.299 0 .482.184.549.549.133 1.496.789 2.76 1.971 3.79 1.18 1.031 2.551 1.545 4.113 1.545h14.76c1.695 0 3.141-.58 4.338-1.744 1.197-1.163 1.795-2.577 1.795-4.239 0-1.596-.607-3-1.82-4.213s-2.65-1.82-4.313-1.82h-14.711c-.697 0-1.463-.049-2.293-.15-.83-.1-1.547-.348-2.145-.748-1.363-.797-2.477-1.895-3.34-3.289-.865-1.396-1.297-2.943-1.297-4.639 0-2.459.863-4.57 2.592-6.332s3.807-2.643 6.234-2.643h15.309c2.293 0 4.279.789 5.957 2.369 1.68 1.578 2.602 3.514 2.768 5.809.033.465-.148.697-.549.697h-1.844c-.299 0-.465-.215-.498-.648-.201-1.43-.881-2.65-2.045-3.664s-2.51-1.521-4.039-1.521h-14.76c-1.695 0-3.133.59-4.314 1.77-1.18 1.182-1.77 2.568-1.77 4.164 0 1.662.59 3.076 1.77 4.238 1.182 1.164 2.619 1.746 4.314 1.746h14.76c1.096 0 1.986.1 2.668.299s1.273.43 1.771.695z"></path>
                </svg>
            </a>
        </div>

        <div class="grid max-12cols-g mobile-hor-100 full-height">
            <div class="abs-bc site-intro__holder z-10">
                <div class="block-50 display--inline-top">
                    <div class="site-intro-gutter opc-0 no-visible js-intro-fade mobile-hor-gutter-20 relative"
                         style="visibility: inherit; opacity: 1;">
                        <a id="shop-link" href="{{route('homepage')}}"
                           class="site-intro-link a-center color-grey  display--block site-intro__line"
                           data-url="home.html">
                            <span id="home-link"
                                  class="site-intro-link a-center color-grey display--block trans cursor  site-intro__line">
                                <span class="z--1 display--block relative">
                                    <span class="font-thin font-40 mb-5 display--block">MINAS’ WORLD</span>
                                    <span
                                        class="font-bold font-12 extra-ls site-intro__line-label   relative display--inline mobile-hor-hidden">DISCOVER THE HERITAGE</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="block-50 display--inline-top">

                    <div class="site-intro-gutter opc-0 no-visible js-intro-fade mobile-hor-gutter-20 relative"
                         style="visibility: inherit; opacity: 1;">
                        <a id="shop-link" href="eshop.html"
                           class="site-intro-link a-center color-grey  display--block site-intro__line"
                           data-url="home.html">

                        <span class="z--1 display--block relative ">
                            <span class="font-thin font-40 mb-5 display--block">SHOP ONLINE</span>
                            <span
                                class="font-bold font-12 extra-ls  site-intro__line-label relative display--inline mobile-hor-hidden">YOUR FAVOURITE PRODUCTS</span>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mouse" class="mouse opc-0 no-visible"
             style="transform: translate3d(-28px, 250px, 0px); visibility: inherit; opacity: 1;">
            <svg class="mouse" width="400" height="400" viewBox="0 0 400 400">
                <path id="loop" fill-opacity="0"
                      d="M194.1 199.9c-.4 3.2 1.2 4.5 4.7 6 3.7 1.6 8.8-4.4 6.9-7.7-1.5-2.5-2.5-4.4-5.4-4.4-4.9.1-5.8 2.8-6.2 6.1z"></path>
                <path id="stretched" fill-opacity="0"
                      d="M255 200c0 3.3-51.7 4-55 4s-6-.7-6-4 2.7-4 6-4 55 .7 55 4z"></path>
                <path id="prestretched" fill-opacity="0"
                      d="M201 193.5c-.3 0-.6.2-1 .5-3 3-6 2.7-6 6 0 2.6 2 3 4.4 5.7.5.6 1.3.8 2.2.8 3.7 0 9.5-4.1 5.5-6.5-2.5-1.5-3.5-6.5-5.1-6.5z"></path>
                <path id="default" fill="none" stroke-width="1"
                      d="M194.00305045,199.99694955 C193.99084865,203.2938991 196.6572937,205.9511928 199.96339460000002,205.99694955 203.275291355,206.04575675 206.0488072,203.2450919 205.99084865,199.9450919 205.9450919,196.66949549999998 203.29694955000002,193.9938991 200.00915135,193.9938991 196.66003910499998,193.99694955 194.014947205,196.69694955 194.00305045,199.99694955 z"
                      data-original="M206 200c0 3.3-2.7 6-6 6s-6-2.7-6-6 2.7-6 6-6 6 2.7 6 6z"
                      data-svg-origin="199.99401 199.99401"
                      transform="matrix(1,0,0,1,0.005991783603181805,0.005991783603181805)"
                      style="transform-origin: 0px 0px 0px; stroke-width: 1px; stroke-opacity: 1; fill-opacity: 1;"></path>
            </svg>
        </div>
    </div>


@endsection
