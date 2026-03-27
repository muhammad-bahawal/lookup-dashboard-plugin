<style type="text/css">
    .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 1000px;
            width: 100%;
            justify-content: center;
        }
        .account-balance {
            background: #eaf8f6;
            padding: 20px;
            border-radius: 10px;
            flex: 1 1 100%;
        }
        .account-balance h2 {
            margin-bottom: 10px;
        }
        .info {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #6b8f8e;
        }
        .info i {
            margin-right: 5px;
        }
        .cards {
            display: flex;
            gap: 15px;
            margin-top: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            flex: 1 1 30%;
            text-align: center;
            border: 1px dashed #ffa69e;
            min-width: 180px;
        }
        .card h3 {
            color: #ff6b5c;
            font-size: 24px;
        }
        .card p {
            color: #555;
            font-size: 14px;
            margin: 5px 0;
        }
        .card button {
            background: #16a085;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .card button:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        /* Promo slider */
        .promo-slider {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 400px;
            position: relative;
            gap: 10px;
        }
        .promo {
            background: linear-gradient(to right, #087f8c, #0ab5b9);
            color: white;
/*            padding: 20px;*/
            border-radius: 10px;
            text-align: center;
            width: 100%;
            height: 220px;
            display: none;
        }
        .promo.active {
            display: block;
        }
        .promo h3 {
            font-size: 14px;
            text-transform: uppercase;
            color: #68e1eb;
        }
        .promo h2 {
            font-size: 20px;
            margin: 10px 0;
        }
        .promo p {
            font-size: 14px;
        }
        .promo button {
            background: #ff6b5c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        /* Navigation */
        .promo-controls {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
            position: absolute;
            bottom: 10px;
        }
        .promo-controls i {
            font-size: 20px;
            cursor: pointer;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 800px) {
            .container {
                flex-direction: column-reverse;
                align-items: center;
                width: 100%;
            }
            .cards {
                flex-direction: column;
                align-items: center;
            }
            .card {
                width: 90%;
            }
            .promo-slider {
                max-width: 100%;
            }
            .account-balance{
                width: 94%;
            }
        }

        @media (min-width: 800px) {
            .container {
                flex-direction: row;
                align-items: flex-start;
                justify-content: space-between;
            }
            .account-balance {
                flex: 1;
                max-width: 55%;
            }
            .promo-slider {
                flex: 1;
                max-width: 40%;
            }
        }

/*        main info section*/
 .bh1-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            margin-top: 15px;
            background: #eaf8f6;
        }

        .bh1-cards-wrapper {
            display: flex;
            transition: transform 0.3s ease-in-out;

        }

        .bh1-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            flex: 0 0 95%;
            margin-right: 20px;
        }

        .bh1-profile-header {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;

        }

        .bh1-profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .bh1-lookup-label {
            color: #ff6b6b;
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .bh1-person-name {
            font-size: 1.5rem;
            color: #2d3436;
            font-weight: 600;
        }

        .bh1-section-title {
            color: #FF6600;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .bh1-info-grid {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 10px;
            align-items: center;
        }

        .bh1-label {
            color: #636e72;
            font-weight: 500;
        }

        .bh1-value {
            color: #2d3436;
        }

        .bh1-date-record {
            margin-bottom: 15px;
        }

        .bh1-date {
            color: #636e72;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .bh1-record-text {
            color: #2d3436;
            line-height: 1.4;
        }

        .bh1-slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 10;
        }

        .bh1-slider-arrow.bh1-left {
            left: 10px;
        }

        .bh1-slider-arrow.bh1-right {
            right: 10px;
        }
        .bh1-plan-butn{
            text-align: right;
        }
        .bh1-plan-butn button{
                background: #FF6600;
    color: white;
    width: 180px;
    border: none;
    height: 40px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 15px;
    margin-top: 10px;
        }

@media (max-width: 769px) {
    .bh1-plan-butn button{
                width: 100% !important;
            }
    .bh1-profile-header{
        text-align: center;
    }        
}
        @media (min-width: 769px) {
            .bh1-cards-wrapper {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
                height: 230px;
                overflow-y: auto;
                padding: 15px;
            }

            .bh1-card {
                flex: 1 1 auto;
                margin-right: 0;
            }

            .bh1-slider-arrow {
                display: none;
            }
            
        }

        @media (min-width: 1025px) {
            .bh1-cards-wrapper {
                grid-template-columns: repeat(3, 1fr);
            }
        }
</style>

<!-- accoutn section -->
<div class="container">
    <div class="account-balance">
        <h2>Account balance</h2>
        <div class="info">
            <i class="fas fa-info-circle"></i>
            <span>You don’t have an active subscription.</span>
        </div>
        <div class="cards">
            <div class="card">
                <h3>0</h3>
                <p>Searches</p>
                <button>CHOOSE YOUR PLAN</button>
            </div>
            <div class="card">
                <h3>0</h3>
                <p>Background checks</p>
                <button disabled>BUY NOW</button>
            </div>
            <div class="card">
                <h3>0</h3>
                <p>PDF Report downloads</p>
                <button disabled>BUY NOW</button>
            </div>
        </div>
    </div>

    <div class="promo-slider">
        <div class="promo active">
            <h3>Special Offer</h3>
            <h2>Get 50% Off</h2>
            <p>Subscribe today and enjoy a huge discount!</p>
            <button>CHECK NOW</button>
        </div>
        <div class="promo">
            <h3>Limited Time</h3>
            <h2>New Features Added</h2>
            <p>Check out the latest tools available now.</p>
            <button>Explore Features</button>
        </div>
        <div class="promo">
            <h3>Exclusive Deal</h3>
            <h2>Upgrade Your Plan</h2>
            <p>Enjoy more benefits by upgrading today.</p>
            <button>Upgrade Now</button>
        </div>
        <div class="promo-controls">
            <i class="fas fa-chevron-left" onclick="prevSlide()"></i>
            <i class="fas fa-chevron-right" onclick="nextSlide()"></i>
        </div>
    </div>
</div>

<!-- main info section -->
<div class="bh1-container">
        <button class="bh1-slider-arrow bh1-left" onclick="slide(-1)">&#10094;</button>
        <button class="bh1-slider-arrow bh1-right" onclick="slide(1)">&#10095;</button>

        <div class="bh1-profile-header">
            <img src="https://fastly.picsum.photos/id/744/536/354.jpg?hmac=bSwcAxDxfkwDQOJVwmXCbVdtrDKEo5SBPK1ccKLzQm4" alt="Profile" class="bh1-profile-img">
            <div>
                <div class="bh1-lookup-label">NAME LOOKUP:</div>
                <div class="bh1-person-name">John Gates</div>
            </div>
        </div>
        <div class="bh1-cards-wrapper">
            <!-- MAIN INFO -->
            <div class="bh1-card">
                <div class="bh1-section-title">MAIN INFO</div>
                <div class="bh1-info-grid">
                    <span class="bh1-label">Sex:</span>
                    <span class="bh1-value">Male</span>

                    <span class="bh1-label">Birth date:</span>
                    <span class="bh1-value">10/10/1987</span>

                    <span class="bh1-label">Email:</span>
                    <span class="bh1-value">dogmatix@aol.com</span>

                    <span class="bh1-label">Phone:</span>
                    <span class="bh1-value">973-983-9083</span>

                    <span class="bh1-label">Address:</span>
                    <span class="bh1-value">84 Bayard St. New York, NY 10013</span>
                </div>
            </div>
            <!-- FAMILY MEMBERS -->
            <div class="bh1-card">
                <div class="bh1-section-title">FAMILY MEMBERS</div>
                <div class="bh1-info-grid">
                    <span class="bh1-label">Parents:</span>
                    <span class="bh1-value">Jordan Gates, Samantha Gates</span>

                    <span class="bh1-label">Wife:</span>
                    <span class="bh1-value">Kristen Gates</span>

                    <span class="bh1-label">Children:</span>
                    <span class="bh1-value">Elizabeth Gates, Martha Gates, Sam</span>

                    <span class="bh1-label">Other:</span>
                    <span class="bh1-value">Colin Gates</span>

                </div>
            </div>
            <!-- PHONE NUMBERS -->
            <div class="bh1-card">
                <div class="bh1-section-title">PHONE NUMBERS</div>
                <div class="bh1-info-grid">
                    <span class="bh1-label">Phone 1:</span>
                    <span class="bh1-value">Jordan Gates, Samantha Gates</span>

                    <span class="bh1-label">Phone 2:</span>
                    <span class="bh1-value">Kristen Gates</span>
                </div>
            </div>
            <!-- EMAILS -->
            <div class="bh1-card">
                <div class="bh1-section-title">EMAILS</div>
                <div class="bh1-info-grid">
                    <span class="bh1-label">Email 1:</span>
                    <span class="bh1-value">Jordan Gates, Samantha Gates</span>

                    <span class="bh1-label">Email 2:</span>
                    <span class="bh1-value">Kristen Gates</span>
                </div>
            </div>
            <!-- SOCIAL NETWORKS -->
            <div class="bh1-card">
                <div class="bh1-section-title">SOCIAL NETWORKS</div>
                <div class="bh1-info-grid">
                    <span class="bh1-label">Facebook:</span>
                    <span class="bh1-value">Jordan Gates, Samantha Gates</span>

                    <span class="bh1-label">Instagram:</span>
                    <span class="bh1-value">Kristen Gates</span>

                    <span class="bh1-label">X (Twitter):</span>
                    <span class="bh1-value">Elizabeth Gates, Martha Gates, Sam</span>
                </div>
            </div>
            <!-- EDUCATION -->
            <div class="bh1-card">
                <div class="bh1-section-title">EDUCATION</div>
                <div class="bh1-info-grid">
                    <span class="bh1-label">2004-2009</span>
                    <span class="bh1-value">Jordan Gates, Samantha Gates</span>

                    <span class="bh1-label">2004-2009</span>
                    <span class="bh1-value">Kristen Gates</span>

                    <span class="bh1-label">2004-2009</span>
                    <span class="bh1-value">Elizabeth Gates, Martha Gates, Sam</span>
                </div>
            </div>
            <!-- JOBS INFO -->
            <div class="bh1-card">
                <div class="bh1-section-title">JOBS INFO</div>
                <div class="bh1-info-grid">
                    <span class="bh1-label">2016-2024</span>
                    <span class="bh1-value">Jordan Gates, Samantha Gates</span>

                    <span class="bh1-label">2016-2024</span>
                    <span class="bh1-value">Kristen Gates</span>

                    <span class="bh1-label">X (Twitter):</span>
                    <span class="bh1-value">Elizabeth Gates, Martha Gates, Sam</span>
                </div>
            </div>
        </div>

        <div class="bh1-plan-butn">
            <button>CHOOSE YOUR PLAN</button>
        </div>
    </div>

<script>
        let index = 0;
        const slides = document.querySelectorAll(".promo");

        function showSlide(i) {
            slides.forEach(slide => slide.classList.remove("active"));
            slides[i].classList.add("active");
            index = i;
        }

        function nextSlide() {
            index = (index + 1) % slides.length;
            showSlide(index);
        }

        function prevSlide() {
            index = (index - 1 + slides.length) % slides.length;
            showSlide(index);
        }

        setInterval(nextSlide, 3000);
    </script>
    <!-- main section code -->
    <script>
        let currentIndex = 0;
        const cardsWrapper = document.querySelector('.bh1-cards-wrapper');
        const cards = document.querySelectorAll('.bh1-card');
        const totalCards = cards.length;

        function slide(direction) {
            currentIndex = (currentIndex + direction + totalCards) % totalCards;
            const offset = -currentIndex * 100;
            cardsWrapper.style.transform = `translateX(${offset}%)`;
        }
    </script>