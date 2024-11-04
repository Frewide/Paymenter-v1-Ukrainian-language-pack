<div>
    @if($cartCount > 0)
        <x-navigation.link :href="route('cart')">
            {{ __('navigation.cart') }}
        </x-navigation.link>
    @endif
</div>