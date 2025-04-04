<link rel="stylesheet" href="style.css">
<?php include 'header.php'; ?>

<main>
    <section>
        <h2>Book Your Trip</h2>
        <form action="process_booking.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="destination">Destination:</label>
            <select id="destination" name="destination" required>
                <option value="3days">3 DAYS</option>
                <option value="5days">5 DAYS</option>
                <option value="7days">7 DAYS</option>
            </select>

            <input type="submit" value="Book Now">
        </form>
    </section>
</main>

<?php include 'footer.php'; ?>