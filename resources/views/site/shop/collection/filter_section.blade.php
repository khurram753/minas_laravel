<aside class="side-popup popup--filters fixed js-popup" id="popup-filters">
    <div class="side-popup__bg popup--filters to-tr fixed z-1 bg-grey js-popup-bg"></div>
    <span class="x-close trans abs-tr display--block clickable color--black hover-white z-20 js-popup-close"></span>
    <div class="side-popup__inner grid over max-5cols-g color--black mobile-hor-100">
        <div class="js-popup-option">
            <div id="woof_widget-2" class="widget WOOF_Widget">
                <div class="widget widget-woof">
                    <header class="font-bold title-13 ls-180 uppercase mb-t gutter">Filter products</header>


                    <div class="woof woof_sid woof_sid_widget" data-sid="widget"
                         data-shortcode="woof sid='widget' autosubmit='0' start_filtering_btn='0' price_filter='3' redirect='' ajax_redraw='0' btn_position='b' dynamic_recount='0' "
                         data-redirect="" data-autosubmit="0" data-ajax-redraw="0">

                        <a href="#" class="woof_edit_view" data-sid="widget">show blocks helper</a>
                        <div></div>

                        <!--- here is possible to drop html code which is never redraws by AJAX ---->

                        <div class="woof_redraw_zone" data-woof-ver="1.2.4">

                            <form class="woocommerce-ordering" method="get" id="sorting-form">

                                <div data-css-class="woof_container_pa_material"
                                     class="woof_container woof_container_checkbox woof_container_pa_material woof_container_0 woof_container_material">
                                    <div class="woof_container_overlay_item"></div>
                                    <div class="woof_container_inner woof_container_inner_material">
                                        <h4>Material</h4>
                                        <div class="woof_block_html_items">
                                            <ul class="woof_list woof_list_checkbox">
                                                @foreach($materials as $key => $material)
                                                    <li class="woof_term_154 ">
                                                        <input type="radio" id="woof_154_60ce9a873a709"
                                                               class="woof_checkbox_term woof_checkbox_term_154"
                                                               data-tax="pa_material" name="material_id"
                                                               {{Request()->get('material_id') == $material->id ? 'checked':''}}
                                                               data-term-id="{{$material->id}}" value="{{$material->id}}"/>
                                                        <label class="woof_checkbox_label "
                                                               for="woof_154_60ce9a873a709">{{ucfirst($material->name)}}</label>
    {{--                                                    <input type="hidden" value="Pentelic Marble"--}}
    {{--                                                           data-anchor="woof_n_pa_material_pentelic-marble"/>--}}

                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

    {{--                                    <input type="hidden" name="woof_t_pa_material" value="Product Material"/>--}}
                                        <!-- for red button search nav panel -->

                                    </div>
                                </div>

                                <div data-css-class="woof_container_collection"
                                 class="woof_container woof_container_checkbox woof_container_collection woof_container_1 woof_container_collections">
                                <div class="woof_container_overlay_item"></div>
                                <div class="woof_container_inner woof_container_inner_collections">
                                    <h4>Product Category </h4>
                                    <div class="woof_block_html_items">
                                        <ul class="woof_list woof_list_checkbox">

                                            @foreach($cords as $key => $cord)
                                                <li class="woof_term_41 ">
                                                <input type="radio" id="woof_41_60ce9a873a7eb"
                                                       class="woof_checkbox_term woof_checkbox_term_41"
                                                       data-tax="collection" name="category_id"
                                                       {{Request()->get('collection_id') == $cord->id ? 'checked':''}}
                                                       data-term-id="41" value="{{$cord->id}}"/>
                                                <label class="woof_checkbox_label " for="woof_41_60ce9a873a7eb">
                                                    {{ucfirst($cord->name)}}
                                                </label>
{{--                                                <input type="hidden" value="Signature collection"--}}
{{--                                                       data-anchor="woof_n_collection_signature-collection"/>--}}

                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>

{{--                                    <input type="hidden" name="woof_t_collection" value="Collections"/>--}}
                                    <!-- for red button search nav panel -->

                                </div>
                            </div>
                            </form>

{{--                            <div data-css-class="woof_price3_search_container"--}}
{{--                                 class="woof_price3_search_container woof_container woof_price_filter">--}}
{{--                                <div class="woof_container_overlay_item"></div>--}}
{{--                                <div class="woof_container_inner">--}}
{{--                                    <h4>--}}
{{--                                        Price range--}}
{{--                                    </h4>--}}


{{--                                    <input class="woof_range_slider" id="60ce9a873aa2d" data-taxes="1"--}}
{{--                                           data-min="120" data-max="19000" data-min-now="120"--}}
{{--                                           data-max-now="19000" data-step="20" data-slider-prefix="&euro;"--}}
{{--                                           data-slider-postfix="" value=""/>--}}

{{--                                </div>--}}
{{--                            </div>--}}


                            <div class="woof_submit_search_form_container">


                                <button style="float: left;" class="button woof_submit_search_form">Filter
                                </button>

                            </div>


                        </div>

                    </div>


                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</aside>
