<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Royale Hotel | Luxury Redefined</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Playfair Display', 'Times New Roman', serif;
            line-height: 1.6;
            color: #333;
            background: #fafafa;
        }

        /* Luxury Color Palette */
        :root {
            --gold: #D4AF37;
            --dark-gold: #B8860B;
            --charcoal: #2C2C2C;
            --cream: #F5F5F0;
            --white: #FFFFFF;
            --dark-charcoal: #1a1a1a;
        }

        /* Header & Navigation */
        header {
            background: linear-gradient(135deg, var(--charcoal) 0%, var(--dark-charcoal) 100%);
            color: var(--white);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.3);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--gold);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                        url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
            margin-top: 80px;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            background: var(--gold);
            color: var(--charcoal);
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: var(--dark-gold);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Sections */
        section {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: var(--charcoal);
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background: var(--gold);
            margin: 1rem auto;
        }

        /* Rooms Grid */
        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .room-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .room-card:hover {
            transform: translateY(-5px);
        }

        .room-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .room-content {
            padding: 1.5rem;
        }

        .room-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--charcoal);
        }

        .room-price {
            color: var(--gold);
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        /* Booking Form */
        .booking-form {
            background: var(--white);
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        /* Amenities */
        .amenities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .amenity-item {
            padding: 2rem;
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .amenity-item i {
            font-size: 3rem;
            color: var(--gold);
            margin-bottom: 1rem;
        }

        /* Footer */
        footer {
            background: var(--charcoal);
            color: var(--white);
            padding: 3rem 2rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: left;
        }

        .footer-section h3 {
            color: var(--gold);
            margin-bottom: 1rem;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: var(--white);
            padding: 3rem;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            text-align: center;
        }

        .close-modal {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 2rem;
            cursor: pointer;
            color: var(--gold);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="nav-container">
            <a href="#" class="logo">GRAND ROYALE</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#rooms">Rooms & Suites</a></li>
                <li><a href="#amenities">Amenities</a></li>
                <li><a href="#booking">Book Now</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Luxury Redefined</h1>
            <p>Experience unparalleled elegance at Grand Royale Hotel</p>
            <a href="#booking" class="btn">Book Your Stay</a>
        </div>
    </section>

    <!-- Rooms Section -->
    <section id="rooms">
        <h2 class="section-title">Rooms & Suites</h2>
        <div class="rooms-grid">
            <!-- Room cards will be generated by PHP -->
            <?php
            $rooms = [
                [
                    'name' => 'Deluxe King Room',
                    'price' => '$399',
                    'image' => 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
                    'description' => 'Spacious room with king bed and city view'
                ],
                [
                    'name' => 'Executive Suite',
                    'price' => '$699',
                    'image' => 'https://images.unsplash.com/photo-1582719471384-894fbb16e074?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
                    'description' => 'Luxurious suite with separate living area'
                ],
                [
                    'name' => 'Presidential Suite',
                    'price' => '$1299',
                    'image' => 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
                    'description' => 'Ultimate luxury with panoramic views'
                ],
                [
                    'name' => 'Royal Penthouse',
                    'price' => '$2499',
                    'image' => 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
                    'description' => 'Exclusive penthouse with private terrace'
                ]
            ];

            foreach ($rooms as $room) {
                echo "
                <div class='room-card'>
                    <img src='{$room['image']}' alt='{$room['name']}' class='room-image'>
                    <div class='room-content'>
                        <h3 class='room-title'>{$room['name']}</h3>
                        <p class='room-price'>{$room['price']}/night</p>
                        <p>{$room['description']}</p>
                        <button class='btn book-room' data-room='{$room['name']}' style='margin-top: 1rem; width: 100%;'>Book Now</button>
                    </div>
                </div>";
            }
            ?>
        </div>
    </section>

    <!-- Amenities Section -->
    <section id="amenities" style="background: var(--cream);">
        <h2 class="section-title">Hotel Amenities</h2>
        <div class="amenities-grid">
            <div class="amenity-item">
                <i class="fas fa-swimming-pool"></i>
                <h3>Infinity Pool</h3>
                <p>Heated outdoor pool with stunning views</p>
            </div>
            <div class="amenity-item">
                <i class="fas fa-spa"></i>
                <h3>Luxury Spa</h3>
                <p>World-class treatments and therapies</p>
            </div>
            <div class="amenity-item">
                <i class="fas fa-utensils"></i>
                <h3>Fine Dining</h3>
                <p>Michelin-starred restaurants</p>
            </div>
            <div class="amenity-item">
                <i class="fas fa-dumbbell"></i>
                <h3>Fitness Center</h3>
                <p>State-of-the-art equipment</p>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
        <h2 class="section-title">Book Your Stay</h2>
        <form class="booking-form" id="bookingForm">
            <div class="form-row">
                <div class="form-group">
                    <label for="checkin">Check-in Date</label>
                    <input type="date" id="checkin" name="checkin" required>
                </div>
                <div class="form-group">
                    <label for="checkout">Check-out Date</label>
                    <input type="date" id="checkout" name="checkout" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="guests">Guests</label>
                    <select id="guests" name="guests" required>
                        <option value="1">1 Guest</option>
                        <option value="2" selected>2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="roomType">Room Type</label>
                    <select id="roomType" name="roomType" required>
                        <option value="deluxe">Deluxe King Room</option>
                        <option value="executive">Executive Suite</option>
                        <option value="presidential">Presidential Suite</option>
                        <option value="penthouse">Royal Penthouse</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <button type="submit" class="btn" style="width: 100%; font-size: 1.2rem;">Check Availability</button>
        </form>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2 class="section-title">Contact Us</h2>
        <div style="text-align: center; max-width: 600px; margin: 0 auto;">
            <p><i class="fas fa-map-marker-alt"></i> 123 Luxury Avenue, Monaco</p>
            <p><i class="fas fa-phone"></i> +1 (555) 123-ROYALE</p>
            <p><i class="fas fa-envelope"></i> reservations@grandroyale.com</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Grand Royale Hotel</h3>
                <p>Experience the pinnacle of luxury and service in the heart of the city.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <p><a href="#rooms" style="color: var(--white);">Rooms & Suites</a></p>
                <p><a href="#amenities" style="color: var(--white);">Amenities</a></p>
                <p><a href="#booking" style="color: var(--white);">Special Offers</a></p>
            </div>
            <div class="footer-section">
                <h3>Connect With Us</h3>
                <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
        <p style="margin-top: 2rem;">&copy; 2024 Grand Royale Hotel. All rights reserved.</p>
    </footer>

    <!-- Booking Modal -->
    <div class="modal" id="bookingModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Booking Confirmation</h2>
            <p id="modalMessage">Your booking has been successfully submitted!</p>
            <button class="btn" id="confirmBtn" style="margin-top: 1rem;">Confirm Booking</button>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Booking form handling
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                checkin: document.getElementById('checkin').value,
                checkout: document.getElementById('checkout').value,
                guests: document.getElementById('guests').value,
                roomType: document.getElementById('roomType').value,
                email: document.getElementById('email').value
            };

            // Simple validation
            if (!formData.checkin || !formData.checkout || !formData.email) {
                alert('Please fill in all required fields.');
                return;
            }

            // Show success modal
            document.getElementById('modalMessage').textContent = 
                `Thank you! Your booking request for the ${formData.roomType} has been received. We will contact you at ${formData.email} to confirm.`;
            document.getElementById('bookingModal').style.display = 'flex';
        });

        // Room booking buttons
        document.querySelectorAll('.book-room').forEach(button => {
            button.addEventListener('click', function() {
                const roomName = this.getAttribute('data-room');
                document.getElementById('roomType').value = roomName.toLowerCase().replace(' ', '-');
                document.getElementById('booking').scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Modal functionality
        document.querySelector('.close-modal').addEventListener('click', function() {
            document.getElementById('bookingModal').style.display = 'none';
        });

        document.getElementById('confirmBtn').addEventListener('click', function() {
            document.getElementById('bookingModal').style.display = 'none';
            alert('Booking confirmed! Thank you for choosing Grand Royale.');
            document.getElementById('bookingForm').reset();
        });

        // Close modal when clicking outside
        window.addEventListener('click', function(e) {
            if (e.target === document.getElementById('bookingModal')) {
                document.getElementById('bookingModal').style.display = 'none';
            }
        });

        // Set minimum date for check-in to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('checkin').min = today;
        
        // Update checkout min date when checkin changes
        document.getElementById('checkin').addEventListener('change', function() {
            document.getElementById('checkout').min = this.value;
        });
    </script>

    <?php
    // Simple PHP form processing (in a real application, this would connect to a database)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $checkin = $_POST['checkin'] ?? '';
        $checkout = $_POST['checkout'] ?? '';
        $guests = $_POST['guests'] ?? '';
        $roomType = $_POST['roomType'] ?? '';
        $email = $_POST['email'] ?? '';
        
        // In a real application, you would save to database here
        // For demo purposes, we'll just simulate processing
        error_log("Booking received: $roomType for $guests guests from $checkin to $checkout. Email: $email");
    }
    ?>
</body>
</html>