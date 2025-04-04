<link rel="stylesheet" href="styles.css">
<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<main>
    <section>
        <h2>Destinations in the Golden Triangle</h2>
        <div class="destination-list">
            <?php
            $stmt = $pdo->query("SELECT * FROM destinations");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='destination-item'>";
                echo "<h3>{$row['name']}</h3>";
                echo "<p>{$row['description']}</p>";
               
                echo "</div>";
            }
            ?>
        </div>
    </section>
</main>
<section class="destination-list">
    <?php
    $stmt = $pdo->query("SELECT * FROM destinations");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='destination-item'>";
        echo "<a href='{$row['name']}.php'>"; // Updated link to point to the respective page
        echo "<img src='{$row['image']}' alt='{$row['name']}'>";
        echo "<h3>{$row['name']}</h3>";
        echo "</a>";
        echo "</div>";
    }
    ?>
</section>
<?php include 'footer.php'; ?>