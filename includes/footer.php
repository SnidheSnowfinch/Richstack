<footer class="footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <p>Crichstack is for the ones who love cake and we make that special for...</p>
                    <div class="social-icons">

                        <label class="icon-nav"><i class="bi bi-instagram"></i></label>
                        <label class="icon-nav"><i class="bi bi-twitter"></i></label>
                        <label class="icon-nav"><i class="bi bi-facebook"></i></label>
                        <label class="icon-nav"><i class="bi bi-youtube"></i></label>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Your Account</a></li>
                        <li><a href="#">View Order</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-hours">
                    <h4>Work Times</h4>
                    <ul>
                        <li>Mon - Sat: 8 AM - 8 PM</li>
                        <li>Tue - Sat: 8 AM - 8 PM</li>
                        <li>Wed - Sat: 8 AM - 8 PM</li>
                        <li>Thu - Sat: 8 AM - 8 PM</li>
                        <li>Fri - Sat: 8 AM - 8 PM</li>
                        <li>Sat - Sat: 8 AM - 8 PM</li>
                        <li>Sun: Closed</li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Contact Info</h4>
                    <p>00000 00000</p>
                    <label>Richstack Store</label><br>
                    <label>256, Baker Street, India, 52455</label>
                    <p>Email: richstack@gmail.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Richstack © 2025 All Rights Reserved.</p>
                <p>Developed by <span class="highlight">Snowfinch</span></p>
            </div>
        </div>
    </footer>
    <script>
        let currentIndexx = 0;
        const slidess = document.querySelectorAll(".slide");
        const dots = document.querySelectorAll(".dot");

        function moveToSlide(index) {
            currentIndexx = index;
            document.querySelector(".slider").style.transform = `translateX(-${index * 100}%)`;

            dots.forEach(dot => dot.classList.remove("active"));
            dots[index].classList.add("active");
        }

        // Auto Slide
        setInterval(() => {
            currentIndexx = (currentIndexx + 1) % slidess.length;
            moveToSlide(currentIndexx);
        }, 3000);
        // ----------------
        let currentIndex = 0;
        const testimonials = document.querySelectorAll(".testimonial");

        function showTestimonial(index) {
            testimonials.forEach((t, i) => {
                t.classList.toggle("active", i === index);
            });
        }

        function prevTestimonial() {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            showTestimonial(currentIndex);
        }

        function nextTestimonial() {
            currentIndex = (currentIndex + 1) % testimonials.length;
            showTestimonial(currentIndex);
        }
        const slides = [
            { image: "bootstrap/images/home-img.png", title: "Freshly baked pastries are the true <br><strong>language of love</strong>", text: "This drastic appeal for baked goods promoted baking all throughout Europe and expanded into the eastern parts of Asia." },
            { image: "bootstrap/images/home-img.png", title: "Indulge in the Sweetness of Life <br><strong>language of love</strong>", text: "Every bite of our handcrafted cakes brings a moment of joy and delight." },
            { image: "bootstrap/images/home-img.png", title: "A Slice of Happiness in Every Bite <br><strong>language of love</strong>", text: "Our cakes are made with love, perfect for every occasion and celebration." }
        ];
        let currentSlide = 0;
        function updateSlide() {
            document.getElementById("hero-img").src = slides[currentSlide].image;
            document.getElementById("hero-title").innerHTML = slides[currentSlide].title;
            document.getElementById("hero-text").innerHTML = slides[currentSlide].text;
        }
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlide();
        }
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateSlide();
        }

        function scrollLeftDest() {
            let containerdiv = document.getElementById("homecard");
            containerdiv.scrollBy({ left: -320, behavior: "smooth" });
        }

        function scrollRightDest() {
            let containerdiv = document.getElementById("homecard");
            containerdiv.scrollBy({ left: 320, behavior: "smooth" });
        }
    </script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>