<?php include 'includes/header.php' ?>
<div class="hero">

<img id="hero-img" class="home-back-img abt-img" itemid="" src="bootstrap/images/about-img.webp"
    alt="Hero Image">
<div class="hero-content text-center">
    <h1 id="hero-title"><strong>Product 1</strong></h1>

</div>
</div>



<div class="container">
<div class="text-section home-section">
<div class="product-container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="image-gallery">
                <div class="main-image position-relative">
                    <img  class="" id="mainImg" src="bootstrap/images/grid-img-1.png" alt="Product">
                    <div class="search-icon"><a href=""><img src="bootstrap/images/search-icon.png" alt=""></a></div>
                </div>
                <div class="thumbnails">
                    <img src="bootstrap/images/grid-img-1.png" onclick="changeImage(this)" alt="Thumbnail">

                    <img src="bootstrap/images/grid-img-2.jpg" onclick="changeImage(this)" alt="Thumbnail">
                    <img src="bootstrap/images/cake-img-2.webp" onclick="changeImage(this)" alt="Thumbnail">
                    <img src="bootstrap/images/cake-img1.webp" onclick="changeImage(this)" alt="Thumbnail">
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
                    <button class="cart-button">ADD TO CART</button>

                </div>
                <div class="mt-3">
                    <label for="">SKU: woo-long-sleeve-tee Category: <span class="pink-text">Ropping</span></label>
                
                </div>
            </div>
        </div>

    </div>
    
    
  
</div>

<div class="tabs">
    <div class="tab active" onclick="showTab('description')">Description</div>
    <div class="tab" onclick="showTab('info')">Additional Information</div>
    <div class="tab" onclick="showTab('reviews')">Reviews (0)</div>
</div>

<div id="description" class="tab-content active">
    <p>This is a product description.</p>
</div>
<div id="info" class="tab-content">
    <p>Additional information about the product.</p>
</div>
<div id="reviews" class="tab-content">
    <p>No reviews yet.</p>
</div>
</div>
</div>
<?php include 'includes/footer.php' ?>
