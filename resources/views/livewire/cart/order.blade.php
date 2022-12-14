<div class="card shadow-m">
    @if ($product ?? null)
        <h1 class="h4 mb-1">Get Started</h1>
        <p class="text-second mb-32px">Please enter your details.</p>
        <div class="order-form">
            @csrf
            <input type="hidden" wire:model="count" name="count" value="" class="cart_count" id="cart_count">
            <div class="mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
                    <input type="text" class="form-control" wire:model.lazy="url" placeholder="{{$product['attributes']['cart_link_description']['value'] ?? 'Url'}}" @if($errors->has('url')) is-invalid @endif>
                    @error('url')  <div class="ms-2 mt-2 small text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-regular fa-at"></i></span>
                    <input type="text" wire:model.lazy="email" class="form-control" placeholder="Email address" @if($errors->has('email')) is-invalid @endif>
                    @error('email') <div class="ms-2 mt-2 small text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="dropdown mb-4">
                <div class="form-control cursor-pointer d-flex align-items-center w-100 selected-count" data-bs-toggle="dropdown" aria-expanded="false">
                    @foreach($product['discounts'] as $discount)
                        @if ((int)$discount['count'] === (int)$count)
                            @php
                                $default_price = ($product['prices']['price'] * $discount['count'])-($product['prices']['price'] * $discount['count']*$discount['discount']/100);
                            @endphp
                            @break
                        @endif
                    @endforeach
                    <span><span class="count">{{$count * $product['multiplicity']}}</span> {{$product['attributes']['multiplicity_description']['value'] ?? 'Items'}}</span>
                    <span class="ms-auto me-3">$<span class="price">{{$default_price}}</span></span>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
                <ul class="dropdown-menu w-100">
                    @foreach($product['discounts'] as $discount)
                        @php
                            $default_price = ($product['prices']['price'] * $discount['count'])-($product['prices']['price'] * $discount['count']*$discount['discount']/100);
                        @endphp
                        <li>
                            <span class="dropdown-item d-flex align-items-center border-bottom cursor-pointer" wire:click="updateCount({{$discount['count']}})">
                                <span class="me-auto">{{$discount['count'] * $product['multiplicity']}} {{$product['attributes']['multiplicity_description']['value'] ?? 'Items'}}</span>
                                <span>{{$default_price}}</span>
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label small" for="defaultCheck1">
                    Send me special promotions and discounts
                </label>
            </div>
            <button class="btn btn-lg btn-primary w-100 mt-5" wire:click="create" wire:loading.attr="disabled">Continue</button>
        </div>
    @else
        <h1 class="h4 mb-1">Cart is empty</h1>
    @endif
</div>
