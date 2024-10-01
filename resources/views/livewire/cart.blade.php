<div>
    <h2>Shopping Cart</h2>

    <button wire:click="addToCart(1)">Add Product 1 to Cart</button>
    <button wire:click="addToCart(2)">Add Product 2 to Cart</button>

    <h3>Cart Items:</h3>
    <ul>
        @foreach($cart as $productId => $quantity)
            <li>Product {{ $productId }}: {{ $quantity }} pcs</li>
        @endforeach
    </ul>
</div>