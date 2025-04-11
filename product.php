<?php include 'includes/header.php' ?>
<div class="hero">

<img  class="home-back-img abt-img" itemid="" src="bootstrap/images/about-img.webp"
    alt="Hero Image">
<div class="hero-content text-center">
    <h1  class="head-large"><strong>Product 1</strong></h1>

</div>
</div>



<div class="container">
<div class="text-section home-section">
<div class="product-container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="image-gallery">
                    <div class="main-image position-relative">
                        <img class="" id="mainImg" src="bootstrap/images/grid-img-1.webp" alt="Product">
                        <div class="search-icon"><a href=""><img src="bootstrap/images/search-icon.webp"
                                    alt=""></a></div>
                    </div>
                    <div class="thumbnails">
                        <img class="thumbnails-img-new" src="bootstrap/images/grid-img-1.webp"
                            onclick="changeImage(this)" alt="Thumbnail">

                        <img class="thumbnails-img-new" src="bootstrap/images/grid-img-2.webp"
                            onclick="changeImage(this)" alt="Thumbnail">
                        <img class="thumbnails-img-new" src="bootstrap/images/cake-img-2.webp"
                            onclick="changeImage(this)" alt="Thumbnail">
                        <img class="thumbnails-img-new" src="bootstrap/images/cake-img1.webp"
                            onclick="changeImage(this)" alt="Thumbnail">
                        <img class="thumbnails-img-new" src="bootstrap/images/cake-img-2.webp"
                            onclick="changeImage(this)" alt="Thumbnail">

                    </div>
                </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="product-info">
                <h2>Product 1</h2>
                <p>₹1000</p>
                <label for="">This is a simple product</label>
                <div class="quantity-cart">
                    <div class="quantity">
                        <button class="qty-btn" onclick="decreaseQty()">-</button>
                        <input type="text" id="qty" value="1">
                        <button class="qty-btn" onclick="increaseQty()">+</button>
                    </div>
                    <button class="cart-button">See More</button>

                </div>
                <div class="mt-3">
                    <label for="">SKU: woo-long-sleeve-tee Category: <span class="pink-text">Ropping</span></label>
                
                </div>
            </div>
        </div>

    </div>
    
    
  
</div>

<div class="tabs-pink">
    <div class="tab-pink active" onclick="showTab2('description')">Description</div>
    <div class="tab-pink" onclick="showTab2('info')">Additional Information</div>
    <div class="tab-pink" onclick="showTab2('reviews')">Reviews (0)</div>
</div>

<div id="description" class="tab-pink-content active">
    <p>This is a product description.</p>
</div>
<div id="info" class="tab-pink-content">
    <p>Additional information about the product.</p>
</div>
<div id="reviews" class="tab-pink-content">
    <p>No reviews yet.</p>
</div>
</div>
</div>
<?php include 'includes/footer.php' ?>
