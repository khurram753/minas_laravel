<div class="fill-dimensions fixed popup-holder z-5000 opc-0 no-visible" id="popup-target">
    <div class="opc-0 fill-dimensions fixed bg-black" id="popup-mask"></div>
    <div class="fill-dimensions abs-tl fixed bg-white scale-y origin-l popup-bg" id="popup-bg"></div>
    <div
        class="cursor close-popup z-30 close-popup--black relative m-auto popup-holder__close close-popup--right-0 opc-0 js-popup-fade"
        id="popup-close"></div>
    <div class="popup-inner a-center abs-tc  maxw-500">
        <div class="font-bold font-40 mb-50 opc-0 color-black js-popup-fade">CHOOSE A CATEGORY</div>
        @foreach($newsCategories as $newsCategory)
            <span class="display--block relative overflow">
                <span class="popup-link-holder display--block">
                    <a href="{{route('newsUpdate',['category_id'=>$newsCategory->id])}}" class="popup-link display--inline relative font-thin font-40 color-black relative">
                        {{$newsCategory->name}}
                    </a>
                </span>
            </span>
        @endforeach

    </div>
</div>
