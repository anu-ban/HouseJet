<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property Search</title>
    <style>
        body { font-family: Arial, sans-serif; }
        form { margin-bottom: 20px; }
        ul { list-style: none; padding: 0; }
        li { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Property Listings</h1>
    <form method="GET" action="">
        <label for="beds">Beds:</label>
        <input type="number" name="beds" id="beds" value="<?= htmlspecialchars($_GET['beds'] ?? '') ?>">
        <label for="baths">Baths:</label>
        <input type="number" name="baths" id="baths" value="<?= htmlspecialchars($_GET['baths'] ?? '') ?>">
        <label for="sqft">SqFt:</label>
        <input type="number" name="sqft" id="sqft" value="<?= htmlspecialchars($_GET['sqft'] ?? '') ?>">
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="<?= htmlspecialchars($_GET['price'] ?? '') ?>">
        <button type="submit">Search</button>
    </form>
    <ul>
        <?php if (!empty($data['properties'])): ?>
            <?php foreach ($data['properties'] as $property): ?>
                <li>
                    <?= "Beds: " . htmlspecialchars($property['beds']) . ", Baths: " . htmlspecialchars($property['baths']) . ", SqFt: " . htmlspecialchars($property['sqft']) . ", Price: $" . htmlspecialchars(number_format($property['price'])) ?>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No properties found. Try adjusting your search criteria.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
  