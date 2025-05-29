<?php
// Weza Craft - African Artisan Marketplace
// Sample data for demonstration

$products = [
    [
        'id' => 1,
        'name' => 'Large Sisal Market Basket',
        'price' => 'KSh 3,500',
        'artisan' => 'Grace Mwangi',
        'location' => 'Nairobi, Kenya',
        'image' => 'https://images.unsplash.com/photo-1628926379972-9e8096907f46?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Handwoven from sisal fiber with leather handles, perfect for shopping or home storage.'
    ],
    [
        'id' => 2,
        'name' => 'Decorative Clay Pot',
        'price' => 'KSh 2,800',
        'artisan' => 'Elizabeth Odera',
        'location' => 'Kisumu, Kenya',
        'image' => 'https://images.unsplash.com/photo-1584589167171-541ce45f1eea?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Hand-crafted clay pot with traditional patterns, perfect for home décor.'
    ],
    [
        'id' => 3,
        'name' => 'Maasai Beaded Necklace',
        'price' => 'KSh 1,500',
        'artisan' => 'Njeri Wainaina',
        'location' => 'Samburu, Kenya',
        'image' => 'https://images.unsplash.com/photo-1626875251041-0d3117cbd365?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Vibrant multi-strand beaded necklace handcrafted using traditional Maasai techniques.'
    ],
    [
        'id' => 4,
        'name' => 'Colorful Kiondo Handbag',
        'price' => 'KSh 2,200',
        'artisan' => 'Grace Mwangi',
        'location' => 'Nairobi, Kenya',
        'image' => 'https://images.unsplash.com/photo-1620783770629-122b7f187703?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Stylish and durable kiondo handbag woven from sisal and wool with vibrant African patterns.'
    ],
    [
        'id' => 5,
        'name' => 'Traditional Woven Table Mat',
        'price' => 'KSh 800',
        'artisan' => 'Grace Mwangi',
        'location' => 'Nairobi, Kenya',
        'image' => 'https://images.unsplash.com/photo-1601659856128-8a868e4f9bad?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Handwoven table mat made with natural fibers and traditional patterns.'
    ],
    [
        'id' => 6,
        'name' => 'African Print Cushion Cover',
        'price' => 'KSh 1,200',
        'artisan' => 'Amina Hassan',
        'location' => 'Mombasa, Kenya',
        'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Beautiful cushion cover featuring authentic African prints and patterns.'
    ]
];

$artisans = [
    [
        'id' => 1,
        'name' => 'Grace Mwangi',
        'craft' => 'Basket Weaving',
        'location' => 'Nairobi, Kenya',
        'image' => 'https://images.unsplash.com/photo-1531123414780-f74242c2b052?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400',
        'bio' => "I've been weaving Kiondo baskets for over 25 years, preserving traditional techniques passed down from my grandmother.",
        'experience' => '25+ years'
    ],
    [
        'id' => 2,
        'name' => 'Elizabeth Odera',
        'craft' => 'Pottery',
        'location' => 'Kisumu, Kenya',
        'image' => 'https://images.unsplash.com/photo-1535295972055-1c762f4483e5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400',
        'bio' => 'As a rural caregiver, pottery has become my creative outlet and source of income. I specialize in traditional patterns.',
        'experience' => '15+ years'
    ],
    [
        'id' => 3,
        'name' => 'Njeri Wainaina',
        'craft' => 'Beadwork',
        'location' => 'Samburu, Kenya',
        'image' => 'https://images.unsplash.com/photo-1543949806-2c9935b84b20?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400',
        'bio' => 'I create authentic Maasai beadwork while caring for my family. Each piece tells a story of our heritage.',
        'experience' => '20+ years'
    ],
    [
        'id' => 4,
        'name' => 'Amina Hassan',
        'craft' => 'Textile Arts',
        'location' => 'Mombasa, Kenya',
        'image' => 'https://images.unsplash.com/photo-1494790108755-2616c4c20b44?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400',
        'bio' => 'I specialize in creating beautiful textiles using traditional Swahili coastal techniques and vibrant African prints.',
        'experience' => '18+ years'
    ]
];

$testimonials = [
    [
        'content' => 'Weza Craft has transformed my life as a rural artisan. I can now sell my kiondo baskets to customers across the world while still caring for my family.',
        'author' => 'Grace Mwangi',
        'location' => 'Nairobi, Kenya',
        'rating' => 5,
        'image' => 'https://images.unsplash.com/photo-1531123414780-f74242c2b052?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400'
    ],
    [
        'content' => 'Being able to share my pottery skills with younger women in my community while earning income has been a blessing. Thank you Weza Craft!',
        'author' => 'Elizabeth Odera',
        'location' => 'Kisumu, Kenya',
        'rating' => 5,
        'image' => 'https://images.unsplash.com/photo-1535295972055-1c762f4483e5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400'
    ],
    [
        'content' => 'As a grandmother and caregiver, this platform allows me to preserve our cultural craft traditions while supporting my family financially.',
        'author' => 'Njeri Wainaina',
        'location' => 'Samburu, Kenya',
        'rating' => 5,
        'image' => 'https://images.unsplash.com/photo-1543949806-2c9935b84b20?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400'
    ]
];

$categories = [
    [
        'name' => 'Kiondo Baskets',
        'description' => 'Traditional handwoven Kenyan baskets made from sisal fiber',
        'image' => 'https://images.unsplash.com/photo-1509112756314-34a0badb29d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400'
    ],
    [
        'name' => 'African Pottery',
        'description' => 'Hand-crafted clay pottery with traditional designs',
        'image' => 'https://images.unsplash.com/photo-1604284047150-c1d28ceb769b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400'
    ],
    [
        'name' => 'Beaded Jewelry',
        'description' => 'Colorful handmade Maasai beadwork',
        'image' => 'https://images.unsplash.com/photo-1617038220319-276d3cfab638?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400'
    ],
    [
        'name' => 'Handwoven Textiles',
        'description' => 'Traditional African woven fabrics and mats',
        'image' => 'https://images.unsplash.com/photo-1550368566-f1cc6b0851cf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400'
    ]
];

function generateStars($rating) {
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $stars .= '<i class="fas fa-star"></i>';
        } else {
            $stars .= '<i class="far fa-star"></i>';
        }
    }
    return $stars;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weza Craft - African Artisan Marketplace</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;500;600&family=Caveat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="container nav-container">
                <div class="nav-brand">
                    <h1 class="brand-name">Weza Craft</h1>
                    <p class="brand-tagline">African Artisan Marketplace</p>
                </div>
                <button class="nav-toggle" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="#artisans">Artisans</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact" class="btn btn-primary">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">Empowering African Artisan Caregivers</h2>
                <p class="hero-subtitle">From Rural Hands to Global Markets</p>
                <p class="hero-text">Discover authentic handcrafted treasures while supporting rural women artisans and preserving generations of African cultural heritage.</p>
                <div class="hero-buttons">
                    <a href="#shop" class="btn btn-primary">Shop Authentic Crafts</a>
                    <a href="#artisans" class="btn btn-outline">Meet Our Artisans</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Explore Craft Categories</h2>
                <p class="accent-text">Traditional African Craftsmanship</p>
            </div>
            <div class="categories-grid">
                <?php foreach ($categories as $category): ?>
                <div class="category-card">
                    <img src="<?php echo $category['image']; ?>" alt="<?php echo $category['name']; ?>">
                    <div class="category-overlay">
                        <h3><?php echo $category['name']; ?></h3>
                        <p><?php echo $category['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="shop" class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h2>Featured Handcrafted Treasures</h2>
                <p class="accent-text">Each Piece Tells a Story</p>
            </div>
            <div class="products-grid">
                <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <div class="product-info">
                        <h3 class="product-title"><?php echo $product['name']; ?></h3>
                        <p class="product-artisan">By <?php echo $product['artisan']; ?></p>
                        <p class="product-location"><i class="fas fa-map-marker-alt"></i> <?php echo $product['location']; ?></p>
                        <div class="product-price"><?php echo $product['price']; ?></div>
                        <p class="product-description"><?php echo $product['description']; ?></p>
                        <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Artisans Section -->
    <section id="artisans" class="section kente-pattern">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Artisans</h2>
                <p class="accent-text">The Skilled Hands Behind the Crafts</p>
            </div>
            <div class="artisans-grid">
                <?php foreach ($artisans as $artisan): ?>
                <div class="artisan-card">
                    <img src="<?php echo $artisan['image']; ?>" alt="<?php echo $artisan['name']; ?>" class="artisan-img">
                    <h3 class="artisan-name"><?php echo $artisan['name']; ?></h3>
                    <p class="artisan-craft"><?php echo $artisan['craft']; ?></p>
                    <p class="artisan-location"><i class="fas fa-map-marker-alt"></i> <?php echo $artisan['location']; ?></p>
                    <p class="artisan-experience"><i class="fas fa-clock"></i> <?php echo $artisan['experience']; ?></p>
                    <p class="artisan-bio"><?php echo $artisan['bio']; ?></p>
                    <a href="artisan.php?id=<?php echo $artisan['id']; ?>" class="btn btn-primary">View Profile</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Our Impact</h2>
                <p class="accent-text">Empowering Communities Through Craft</p>
            </div>
            <div class="impact-grid">
                <div class="impact-item">
                    <div class="impact-icon">
                        <i class="fas fa-female"></i>
                    </div>
                    <h3>Supporting Women Caregivers</h3>
                    <p>We empower rural women who balance caregiving with crafting, enabling them to earn income while preserving cultural traditions.</p>
                </div>
                <div class="impact-item">
                    <div class="impact-icon">
                        <i class="fas fa-hands"></i>
                    </div>
                    <h3>Preserving Cultural Heritage</h3>
                    <p>Every product helps preserve generations of African craftsmanship and traditional techniques.</p>
                </div>
                <div class="impact-item">
                    <div class="impact-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Environmental Sustainability</h3>
                    <p>We promote eco-friendly materials and traditional craft methods with minimal environmental impact.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h2>Artisan Stories</h2>
                <p class="accent-text">Voices from Our Community</p>
            </div>
            <div class="testimonials-grid">
                <?php foreach ($testimonials as $testimonial): ?>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "<?php echo $testimonial['content']; ?>"
                    </div>
                    <div class="testimonial-author">
                        <img src="<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['author']; ?>" class="testimonial-avatar">
                        <div class="testimonial-info">
                            <h5><?php echo $testimonial['author']; ?></h5>
                            <p><?php echo $testimonial['location']; ?></p>
                            <div class="testimonial-rating">
                                <?php echo generateStars($testimonial['rating']); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <div class="container">
            <h2>Join Our Community Today</h2>
            <p>Whether you're seeking authentic African treasures or want to share your craft, become part of our growing community.</p>
            <div class="cta-buttons">
                <a href="#shop" class="btn btn-light">Start Shopping</a>
                <a href="contact.php" class="btn btn-outline">Become an Artisan</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Weza Craft</h3>
                    <p>Connecting rural artisan caregivers with global markets while preserving African cultural heritage.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#shop">Shop</a></li>
                        <li><a href="#artisans">Artisans</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="shipping.php">Shipping</a></li>
                        <li><a href="returns.php">Returns</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Weza Craft. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>