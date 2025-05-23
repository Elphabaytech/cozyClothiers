@if (($attributes = $attributes->where('attribute_set_id', $set->id)) && $attributes->isNotEmpty())
    <div
        class="dropdown-swatches-wrapper attribute-swatches-wrapper"
        data-type="dropdown" data-slug="{{ $set->slug }}"
    >
        <div class="attribute-name">{{ $set->title }}</div>
        <div class="attribute-values">
            <div class="dropdown-swatch">
                <label>
                    <select class="form-select product-filter-item attribute-swatch">
                        <option value="">{{ __('Select :name', ['name' => strtolower($set->title)]) }}</option>
                        @foreach($attributes as $attribute)
                            <option
                                value="{{ $attribute->id }}"
                                data-id="{{ $attribute->id }}"
                                data-slug="{{ $attribute->slug }}"
                                @if (! empty($referenceProduct)) data-reference-product="{{ $referenceProduct->slug }}" @endif
                                @selected($selected->where('id', $attribute->id)->count())
                                @disabled(! $variationInfo->where('id', $attribute->id)->count())
                            >
                                {{ $attribute->title }}
                            </option>
                        @endforeach
                    </select>
                </label>
            </div>
        </div>
    </div>
@endif
