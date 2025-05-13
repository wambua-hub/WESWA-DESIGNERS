<?php
<!-- filepath: c:\Users\Administrator\.vscode\WESWA DESIGNERS\index.php -->
<?php
// Data for the website
$locations = [
    "Head Office: Nairobi",
    "Branches: Kisii, Kakamega"
];

$services = [
    ["name" => "Logo Design", "description" => "Professional logo design for your brand.", "price" => "Ksh 5,000"],
    ["name" => "Business Cards", "description" => "Custom business card designs.", "price" => "Ksh 2,000"],
    ["name" => "Flyer Design", "description" => "Creative flyer designs for your events.", "price" => "Ksh 3,000"]
];

$payment_methods = [
    "Mpesa Number" => "0741142600",
    "Mpesa Till Number" => "99999"
];

$sample_design = "assets/walter-images.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WESWA DESIGNERS</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>WESWA DESIGNERS</h1>
    <p>Your trusted graphic design partner</p>
  </header>

  <section id="location">
    <h2>Our Locations</h2>
    <?php foreach ($locations as $location): ?>
      <p><?php echo $location; ?></p>
    <?php endforeach; ?>
  </section>

  <section id="services">
    <h2>Our Services</h2>
    <ul>
      <?php foreach ($services as $service): ?>
        <li>
          <h3><?php echo $service['name']; ?></h3>
          <p><?php echo $service['description']; ?> <strong>Price: <?php echo $service['price']; ?></strong></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section id="sample">
    <h2>Sample Design</h2>
    <img src="<?php echo $sample_design; ?>" alt="Sample Design" width="300">
  </section>

  <section id="payment">
    <h2>Payment Methods</h2>
    <?php foreach ($payment_methods as $method => $details): ?>
      <p><?php echo $method; ?>: <strong><?php echo $details; ?></strong></p>
    <?php endforeach; ?>
  </section>

  <footer>
    <p>&copy; 2025 WESWA DESIGNERS. All rights reserved.</p>
  </footer>
</body>
</html>