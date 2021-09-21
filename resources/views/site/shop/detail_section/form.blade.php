<form class="variations_form cart" method="post">
    <table class="variations block-100 mb-med" cellspacing="0">
        <tbody>
        <tr>
            <td class="label variation__label font-light title-14 uppercase ls-80 color--white">
                <label for="pa_material">Material</label>
            </td>
            <td class="value variation__value relative">
                <select id="pa_material" class="js-product-variation-select variation-select"
                        name="material_id" data-attribute_name="attribute_pa_material" data-show_option_none="yes">
                    <option value="">Choose an option</option>
                    @foreach($materials as $material)
                        <option value="{{$material->id}}">{{$material->name}}</option>
                    @endforeach
                </select>
                <span class="abs-br value__selection-icon"
                      style="width: 24px; bottom: 8px; text-align: center; background-color: #070707">
                    <svg class="icon icon--arrow-small-down sm color--white">
                        <use xlink:href="#arrow-small-down"></use>
                    </svg>
                </span>
            </td>
        </tr>
        <tr>
            <td class="label variation__label font-light title-14 uppercase ls-80 color--white">
                <label for="pa_cord">Cord</label></td>
            <td class="value variation__value relative">
                <select id="pa_cord" class="js-product-variation-select variation-select"
                        name="cord_id">
                    <option value="">Choose an option</option>
                    @foreach($cords as $cord)
                        <option value="{{$cord->id}}">{{$cord->name}}</option>
                    @endforeach
                </select>
                <span class="abs-br value__selection-icon" style="width: 24px; bottom: 8px; text-align: center; background-color: #070707">
                    <svg class="icon icon--arrow-small-down sm color--white">
                        <use xlink:href="#arrow-small-down"></use>
                    </svg>
                </span>
            </td>
        </tr>
        </tbody>

    </table>
    <a href="{{asset('site/images/Minas_v_5-super-final-2.pdf')}}" target="_blank"
       class="font-bold title-12 uppercase ls-180 color--dark-grey-light underlined hover-white">
        Size Guide
    </a>
    <div class="single_variation_wrap relative">
        <div class="woocommerce-variation-add-to-cart variations_button">
            <div class="quantity" id="quantity-field">
                <label class="screen-reader-text" for="quantity_60ce9f9ce6b6d">
                    {{ucfirst($data->name)}}
                </label>
                <span class="quanity-handler br-50 display--inline relative clickable trans minus quant-minus"
                    data-id="#product-quantity-quantity_60ce9f9ce6b6d"></span>
                <input type="number" id="product-quantity-quantity_60ce9f9ce6b6d"
                    class="input-text qty text  ls-80 display--inline product-quantity"
                    step="1"
                    min="1"
                    max=""
                    name="quantity"
                    value="1"
                    title="Qty"
                    size="4"
                    inputmode="numeric"/>
                <span class="quanity-handler br-50 display--inline relative clickable trans plus quant-plus"
                    data-id="#product-quantity-quantity_60ce9f9ce6b6d"></span>
            </div>
            <div class="woocommerce-variation single_variation"></div>
            <div class="add-to-cart-btn br-50 clickable trans abs-tr">
                <div class="block-80 abs-center a-center z-1 font-bold title-12 uppercase ls-180">
                    Add to cart
                </div>
                <button type="submit" class="single_add_to_cart_button button alt fill-dimensions transparent-button">
                    Add to cart
                </button>
            </div>

        </div>
    </div>
</form>
<div class="pt-56">
    <a href="javascript:void(0)"
       class="font-bold title-12 ls-180 uppercase underlined color--dark-grey-light hover-white">
        Delivery & Returns
    </a>
</div>
