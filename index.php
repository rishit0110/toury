<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    main {
        width: 80%;
        margin: 20px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .hero-section {
        text-align: center;
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        color: white;
        padding: 40px 20px;
        border-radius: 10px;
    }
    .hero-section h1 {
        font-size: 2.5em;
    }
    .hero-section p {
        font-size: 1.2em;
    }
    .hero-image img {
        width: 100%;
        max-width: 600px;
        border-radius: 10px;
        margin-top: 20px;
    }
    section {
        margin-bottom: 20px;
    }
    h2 {
        color: #333;
        border-bottom: 3px solid #feb47b;
        padding-bottom: 5px;
    }
    button {
        background-color: #ff7e5f;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover {
        background-color: #d75f49;
    }
    .itinerary-details {
        background: #ffebd6;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
    }
    blockquote {
        font-style: italic;
        background: #f9f9f9;
        padding: 10px;
        border-left: 5px solid #feb47b;
    }
    .faq h3 {
        color: #ff7e5f;
    }
</style>

<main>
    <section class="hero-section">
        <h1>Welcome to the Golden Triangle of India</h1>
        <p>Explore the rich culture, history, and beauty of Delhi, Agra, and Jaipur.</p>
        <div class="hero-image">
            <img src="golden_triangle.jpg" alt="Golden Triangle">
        </div>
    </section>

    <section class="introduction">
        <h2>About the Golden Triangle</h2>
        <p>The Golden Triangle is one of the most popular tourist circuits in India, connecting three major cities: Delhi, Agra, and Jaipur. This route offers a glimpse into India's rich heritage, stunning architecture, and vibrant culture.</p>
    </section>

    <section class="itineraries">
        <h2>Suggested Itineraries</h2>
        <ul>
            <li>
                <strong>3-Day Itinerary:</strong> Explore Delhi, visit the Taj Mahal in Agra, and discover Jaipur.
                <button onclick="showDetails('itinerary3')">View</button>
                <p id="itinerary3" class="itinerary-details" style="display:none;">Day 1: Explore Delhi - Visit India Gate, Red Fort, and Humayun’s Tomb. Enjoy local street food at Chandni Chowk.<br>
                Day 2: Travel to Agra - Visit the Taj Mahal at sunrise, explore Agra Fort, and Mehtab Bagh for a sunset view.<br>
                Day 3: Jaipur - Visit Amber Fort, City Palace, Hawa Mahal, and shop in Johri Bazaar.</p>
            </li>
            <li>
                <strong>5-Day Itinerary:</strong> Enjoy a deeper dive into each city with guided tours and local experiences.
                <button onclick="showDetails('itinerary5')">View</button>
                <p id="itinerary5" class="itinerary-details" style="display:none;">Day 1: Delhi - Explore Qutub Minar, Lotus Temple, and Akshardham Temple. Evening at India Gate.<br>
                Day 2: Old Delhi Tour - Visit Jama Masjid, Raj Ghat, and Chandni Chowk for shopping.<br>
                Day 3: Agra - Visit Taj Mahal, Agra Fort, and Fatehpur Sikri. Enjoy Mughlai cuisine at a local restaurant.<br>
                Day 4: Jaipur - Visit City Palace, Jantar Mantar, and Nahargarh Fort for an evening view of the city.<br>
                Day 5: Jaipur - Explore Albert Hall Museum, Birla Temple, and take an elephant ride at Amber Fort.</p>
            </li>
            <li>
                <strong>7-Day Itinerary:</strong> Extend your journey to include nearby attractions like Fatehpur Sikri and Pushkar.
                <button onclick="showDetails('itinerary7')">View</button>
                <p id="itinerary7" class="itinerary-details" style="display:none;">Day 1: Delhi - Visit Red Fort, Jama Masjid, and Humayun’s Tomb. Enjoy a rickshaw ride in Old Delhi.<br>
                Day 2: Delhi - Visit Akshardham Temple, Lotus Temple, and Hauz Khas Village for nightlife.<br>
                Day 3: Agra - Visit Taj Mahal, explore Agra Fort, and enjoy a cultural evening at Kalakriti Cultural & Convention Center.<br>
                Day 4: Fatehpur Sikri & Jaipur - Explore the historic ruins of Fatehpur Sikri before heading to Jaipur.<br>
                Day 5: Jaipur - Visit Hawa Mahal, Jantar Mantar, and City Palace. Enjoy Rajasthani cuisine at Chokhi Dhani.<br>
                Day 6: Pushkar - Take a day trip to Pushkar, visit Brahma Temple, and explore the Pushkar Lake area.<br>
                Day 7: Jaipur - Visit Amber Fort, Nahargarh Fort, and explore local bazaars before departure.</p>
            </li>
        </ul>
    </section>
    </section>

    <section class="testimonials">
        <h2>What Our Travelers Say</h2>
        <blockquote>
            <p>"The Golden Triangle was an unforgettable experience! Each city had its own charm and beauty." - Sarah J.</p>
        </blockquote>
        <blockquote>
            <p>"I loved the rich history and culture of Delhi, Agra, and Jaipur. The food was amazing too!" - Mark T.</p>
        </blockquote>
    </section>

    <section class="faq">
        <h2>Frequently Asked Questions</h2>
        <h3>What is the best time to visit the Golden Triangle?</h3>
        <p>The best time to visit is from October to March when the weather is pleasant.</p>
        <h3>How do I travel between the cities?</h3>
        <p>You can travel by train, bus, or hire a private car for convenience.</p>
        <h3>Is it safe to travel in these cities?</h3>
        <p>Yes, these cities are generally safe for tourists, but it's always good to stay aware of your surroundings.</p>
    </section>
</main>

<script>
function showDetails(id) {
    var element = document.getElementById(id);
    if (element.style.display === "none") {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }
}
</script>

<?php include 'footer.php'; ?>
