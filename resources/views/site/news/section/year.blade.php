<div class="fill-dimensions fixed popup-holder z-5000 opc-0 no-visible" id="popup-years">
    <div class="opc-0 fill-dimensions fixed bg-black" id="popup-mask-year"></div>
    <div class="fill-dimensions abs-tl fixed bg-white scale-y origin-l popup-bg" id="popup-bg-year"></div>
    <div class="cursor close-popup z-30 close-popup--black relative m-auto close-popup--right-0 popup-holder__close opc-0 js-popup-year-fade" id="popup-close-year"></div>
    <div class="popup-inner a-center abs-tc maxw-500">
        <div class="font-bold font-40 mb-50 opc-0 js-popup-year-fade color-black">CHOOSE A YEAR</div>
        @foreach($newsYear as $year)
            <span class="display--block relative overflow">
                <span class="popup-link-year-holder display--block">
                    <a href="{{route('newsUpdatePage',['year'=>$year->year])}}" class="popup-link display--inline relative font-thin font-40 color-black relative">
                        {{$year->year}}
                    </a>
                </span>
            </span>
        @endforeach

    </div>
</div>
