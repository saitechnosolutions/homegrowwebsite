@foreach ($products as $product)
    <div class="first_node" id="search_group">
        <img src="/assets/images/pr3.jpg" class="img-fluid" width="70px" alt="">
        <div class="para_ht">
            <h5 class="gro1">{{ $product->product_name }}</h5>
            <h5 class="he_para11">₹349.00 <span class="he_para12">₹1128.00</span> </h5>
        </div>
    </div>
@endforeach

@if (count($products) === 0)
    <div class="no-product-message">
        No products found.
    </div>
@endif
