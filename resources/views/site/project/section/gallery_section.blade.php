@foreach($data->projectGallery as $gallery)
    <div class="{{$loop->last ? '':'gallery-images'}} block-50 tablet-100 mobile-hor-mb-90 display--inline-top a-center mb-144 mobile-hor-mb-90">
        <div class="gutter">
            <div data-goto="0" data-id="461"
                 class="display--inline-top relative mb-22 gallery-image js-open-slider cursor">
                <div class="relative">
                    <div class="display-inline relative js-scale-out overflow skrollable loc skrollable-before"
                         data-emit-events="" data-bottom-top="" style="">
                        <div class="block-100 js-scale-out__holder opc-0 no-visible overflow"
                             style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                            <div class="js-scale-out__img" style="transform: matrix(1, 0, 0, 1, 0, 0);">
                                <div class="fill-dimensions trans multiply bg-grey-med opc-20 z-10"></div>
                                <img class="resp-image display--block"
                                     src="{{asset($gallery->images)}}"
                                     alt="cycladic stool, production concept">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="maxw-435 m-auto">
                <div class="font-bold font-12 extra-ls extra-lh3 mb-20 opc-0 no-visible js-fade-left skrollable loc skrollable-before"
                     data-emit-events="" data-bottom-top="" data-trans="1.4"
                     style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                    {{\Carbon\Carbon::parse($gallery->created_at)->format('M. Y')}}
                </div>
{{--                <div class="font-bold font-25 mb-9 opc-0 no-visible js-fade-left skrollable loc skrollable-before"--}}
{{--                     data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".1"--}}
{{--                     style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">--}}
{{--                    {{$data->name}}--}}
{{--                </div>--}}
                {{--                                <div class="font-light font-20 extra-ls opc-0 no-visible js-fade-left skrollable loc skrollable-before"--}}
                {{--                                    data-emit-events="" data-bottom-top="" data-trans="1.4" data-delay=".15"--}}
                {{--                                    style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">--}}
                {{--                                    CREATING THE PRODUCTION CONCEPT FOR RECREATION.--}}
                {{--                                </div>--}}
            </div>
        </div>
    </div>
@endforeach


