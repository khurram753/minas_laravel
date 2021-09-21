<section class="grid max-10cols-g pt-section mobile-hor-100" id="product-info">
    <div class="block-60 display--inline-top tablet-100 tablet-mb-43">
        <div class="gutter color--white pb-ft pr-30 mobile-hor-gutter tablet-nopad op-0 no-visible js-fade-in in-view"
             data-emit-events data-bottom-top="" data-trans="1.4" style="visibility: inherit; opacity: 1;">
            <div class="font-bold title-13 uppercase ls-180 mb-mm">Category</div>
            <a href="{{route('shopCategory',['category_id'=>$data->category->id])}}"
               class="font-light title-25 uppercase underlined ls-30 display--inline mb-title color--white hover-red">
                {{ucfirst($data->category->name)}}
            </a>
            <div class="font-bold title-13 uppercase ls-180 mb-mm">Description</div>
            <div itemprop="description" class="style-italics style-bolds style-blockquotes style-text-headings style-links-hover-red title-19 color--grey">
                {{$data->description}}
{{--                <p><em>YOUNG LOVE NEVER LIES, DISCOVER YOUR DESIRED LOVE WITH THE ELEGANT AND SWEET--}}
{{--                        DESIGN OF THE YOUNG HEARTS. </em></p>--}}
{{--                <p>THE YOUNG HEARTS PENDANT IS CRAFTED FROM STERLING SILVER AND IS AVAILABLE WITH AN--}}
{{--                    OXIDIZED FINISH. THE DESIGN IS ALSO AVAILABLE IN 18 KT. YELLOW GOLD--}}
{{--                    COMBINATION.</p>--}}
{{--                <p> The Silver and Gold version always has the lower half of the pendant in--}}
{{--                    Gold.</p>--}}
{{--                <p>Please note that the oxidized silver will slowly fade with use over time and--}}
{{--                    comes with a lifetime guarantee which includes re-oxidization at no additional--}}
{{--                    cost. For more information on silver care and repairs please visit the <a--}}
{{--                        href="https://eshop.minas-designs.com/faq-categories/care-repair/">FAQ--}}
{{--                        section</a>. </p>--}}
{{--                <p>Original MINAS Jewelry and design objects always come with the <a--}}
{{--                        href="https://www.minas-designs.com/heritages/minas-working-studio/">iconic--}}
{{--                        MINAS signature</a>. --}}
{{--                </p>--}}
            </div>
            <div class="font-bold title-12 ls-180 uppercase pt-sm">
                <a href="https://eshop.minas-designs.com/faq-categories/care-repair/"
                   class="mr-50 display--inline-top color--dark-grey-light hover-white"
                   target="_blank">
                    <svg class="icon icon--heart mr-i display--inline">
                        <use xlink:href="#heart"></use>
                    </svg>
                    <span class="underlined">Care instructions</span></a><a
                    href="images/Minas_v_5-super-final-2.pdf" target="_blank"
                    class="mr-50 display--inline-top color--dark-grey-light hover-white underlined">Size
                    guide</a></div>
        </div>
    </div>
    <div class="block-40 display--inline-top tablet-100">
        <div class="gutter product-details mobile-hor-gutter">
            <div class="max-3cols op-0 no-visible js-fade-in in-view" data-emit-events
                 data-bottom-top="" data-trans="1.4" data-delay=".15" style="visibility: inherit; opacity: 1;">
                <div class="font-bold title-13 uppercase ls-180 mb-m color--white">Specifications
                </div>
                <table class="woocommerce-product-attributes shop_attributes">
{{--                    <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions">--}}
{{--                        <th class="woocommerce-product-attributes-item__label">Category</th>--}}
{{--                        <td class="woocommerce-product-attributes-item__value">{{ucfirst($data->category->name)}}</td>--}}
{{--                    </tr>--}}
                    <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_material">
                        <th class="woocommerce-product-attributes-item__label">Material</th>
                        <td class="woocommerce-product-attributes-item__value">
                            <p>
                                @foreach($materials as $material)
                                    @if($loop->last == $loop->first)
                                        <a href="{{route('shopCategory',['category_id'=>$data->category_id,'material_id'=>$material->id])}}"
                                           rel="tag">{{$material->name}}</a>
                                    @elseif($loop->last)
                                        <a href="{{route('shopCategory',['category_id'=>$data->category_id,'material_id'=>$material->id])}}"
                                            rel="tag">{{$material->name}}</a>
                                    @else
                                        <a href="{{route('shopCategory',['category_id'=>$data->category_id,'material_id'=>$material->id])}}"
                                           rel="tag">{{$material->name}}</a>,
                                    @endif
                                @endforeach
                            </p>
                        </td>
                    </tr>
                    <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_cord">
                        <th class="woocommerce-product-attributes-item__label">Cord</th>
                        <td class="woocommerce-product-attributes-item__value">
                            <p>
                                @foreach($cords as $cord)
                                    @if($loop->last == $loop->first)
                                        <a href="{{route('shopCategory',['category_id'=>$data->category_id,'cord_id'=>$cord->id])}}"
                                           rel="tag">{{$cord->name}}</a>
                                    @elseif($loop->last)
                                        <a href="{{route('shopCategory',['category_id'=>$data->category_id,'cord_id'=>$cord->id])}}"
                                           rel="tag">{{$cord->name}}</a>
                                    @else
                                        <a href="{{route('shopCategory',['category_id'=>$data->category_id,'cord_id'=>$cord->id])}}"
                                           rel="tag">{{$cord->name}}</a>,
                                    @endif
                                @endforeach
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
