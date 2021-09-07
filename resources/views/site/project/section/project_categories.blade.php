<div class="fill-dimensions fixed popup-holder z-5000 opc-0 no-visible" id="popup-target">
    <div class="opc-0 fill-dimensions fixed bg-black" id="popup-mask"></div>
    <div class="fill-dimensions abs-tl fixed bg-white scale-y origin-l popup-bg" id="popup-bg"></div>
    <div
        class="cursor close-popup z-30 close-popup--black relative m-auto close-popup--right-0 popup-holder__close opc-0 js-popup-fade"
        id="popup-close"></div>
    <div class="popup-inner a-center abs-tc  maxw-500">
        <div class="font-bold font-40 mb-50 opc-0 color-black js-popup-fade">
            CHOOSE A CATEGORY
        </div>
        @foreach($projectCategories as $category )
            <span class="display--block relative overflow">
                <span class="popup-link-holder display--block">
                        <a href="{{route('project',['category_id'=>$category->id])}}"
                           class="popup-link display--inline relative font-thin font-40 color-black relative">
                            {{ucfirst($category->name)}}
                        </a>
                </span>
            </span>
        @endforeach
    </div>
</div>
