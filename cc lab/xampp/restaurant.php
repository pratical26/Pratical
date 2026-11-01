<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spice Delight Restaurant</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fdfaf6;
            color: #333;
        }

        /* Navigation Header */
        header {
            background-color: #d32f2f;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        header h1 {
            font-size: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
            transition: color 0.2s;
        }

        nav a:hover {
            color: #ffeb3b;
        }

        /* Hero Banner */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200') center/cover no-repeat;
            color: white;
            text-align: center;
            padding: 70px 20px;
        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .hero .btn {
            background-color: #ff9800;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 25px;
            font-weight: bold;
            display: inline-block;
        }

        .hero .btn:hover {
            background-color: #e68900;
        }

        /* Main Container */
        .container {
            max-width: 1000px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
            color: #d32f2f;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #ff9800;
            margin: 8px auto 0;
        }

        /* Menu Grid */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .menu-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            padding: 20px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }

        .menu-card .emoji {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .menu-card h3 {
            margin-bottom: 6px;
            font-size: 19px;
        }

        .menu-card p {
            font-size: 13px;
            color: #666;
            margin-bottom: 10px;
        }

        .menu-card .price {
            font-size: 18px;
            color: #d32f2f;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .menu-card button {
            background-color: #d32f2f;
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.2s;
        }

        .menu-card button:hover {
            background-color: #b71c1c;
        }

        /* Order Section */
        .order-section {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-top: 35px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        .order-table th, .order-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .order-table th {
            background-color: #f5f5f5;
        }

        .total-box {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-order {
            width: 100%;
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-order:hover {
            background-color: #43a047;
        }

        /* Order Details Receipt Box */
        #receipt-box {
            display: none;
            margin-top: 25px;
            background: #f9fff9;
            border: 2px dashed #4caf50;
            border-radius: 8px;
            padding: 20px;
        }

        .receipt-header {
            text-align: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .receipt-header h3 {
            color: #2e7d32;
            font-size: 22px;
        }

        .receipt-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .receipt-items {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        .receipt-items th, .receipt-items td {
            border-bottom: 1px solid #eee;
            padding: 8px;
            text-align: left;
        }

        .receipt-items th:last-child, .receipt-items td:last-child {
            text-align: right;
        }

        .receipt-total {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            color: #d32f2f;
        }

        /* Footer */
        footer {
            background: #212121;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <h1>🍽️ Spice Delight</h1>
        <nav>
            <a href="#menu">Menu</a>
            <a href="#order">Order & Details</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Hero Banner -->
    <section class="hero">
        <h2>Fresh, Hot & Delicious Food</h2>
        <p>Order your favorite meals and enjoy mouth-watering flavors!</p>
        <a href="#menu" class="btn">Explore Menu</a>
    </section>

    <!-- Menu Section -->
    <div class="container" id="menu">
        <h2 class="section-title">Our Special Menu</h2>
        <div class="menu-grid">

            <div class="menu-card">
                <div class="emoji">🍕</div>
                <h3>Cheese Pizza</h3>
                <p>Crispy crust with melted mozzarella cheese.</p>
                <div class="price">₹150</div>
                <button onclick="addToOrder('Cheese Pizza', 150)">Add to Order</button>
            </div>

            <div class="menu-card">
                <div class="emoji">🍔</div>
                <h3>Classic Burger</h3>
                <p>Juicy grilled patty with cheddar & fresh veggies.</p>
                <div class="price">₹80</div>
                <button onclick="addToOrder('Classic Burger', 80)">Add to Order</button>
            </div>

            <div class="menu-card">
                <div class="emoji">🍝</div>
                <h3>Creamy Pasta</h3>
                <p>Delicious Alfredo sauce pasta with herbs.</p>
                <div class="price">₹120</div>
                <button onclick="addToOrder('Creamy Pasta', 120)">Add to Order</button>
            </div>

            <div class="menu-card">
                <div class="emoji">🍟</div>
                <h3>French Fries</h3>
                <p>Crispy golden potato fries seasoned with salt.</p>
                <div class="price">₹60</div>
                <button onclick="addToOrder('French Fries', 60)">Add to Order</button>
            </div>

            <div class="menu-card">
                <div class="emoji">🥤</div>
                <h3>Cold Drinks</h3>
                <p>Chilled refreshing soda drinks.</p>
                <div class="price">₹40</div>
                <button onclick="addToOrder('Cold Drinks', 40)">Add to Order</button>
            </div>

            <div class="menu-card">
                <div class="emoji">🍰</div>
                <h3>Chocolate Cake</h3>
                <p>Rich and moist dark chocolate slice.</p>
                <div class="price">₹90</div>
                <button onclick="addToOrder('Chocolate Cake', 90)">Add to Order</button>
            </div>

        </div>

        <!-- Order Form & Cart -->
        <div class="order-section" id="order">
            <h2 class="section-title">Place Your Order</h2>

            <table class="order-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="cart-body">
                    <tr id="empty-cart-row">
                        <td colspan="3" style="color: #888;">No items added yet. Click "Add to Order" above!</td>
                    </tr>
                </tbody>
            </table>

            <div class="total-box">
                Total: ₹<span id="total-amount">0</span>
            </div>

            <form onsubmit="return handlePlaceOrder(event)">
                <div class="form-group">
                    <label for="cust-name">Customer Name:</label>
                    <input type="text" id="cust-name" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label for="cust-phone">Phone Number:</label>
                    <input type="tel" id="cust-phone" placeholder="Enter 10-digit mobile number" required>
                </div>

                <div class="form-group">
                    <label for="table-no">Table Number / Address:</label>
                    <input type="text" id="table-no" placeholder="e.g., Table 4 or Room 102" required>
                </div>

                <button type="submit" class="btn-order">Confirm & Place Order</button>
            </form>

            <!-- Order Details Receipt Section -->
            <div id="receipt-box">
                <div class="receipt-header">
                    <h3>✅ Order Confirmed!</h3>
                    <p>Here are your complete order details:</p>
                </div>

                <div class="receipt-info">
                    <div>
                        <p><strong>Customer Name:</strong> <span id="r-name"></span></p>
                        <p><strong>Phone:</strong> <span id="r-phone"></span></p>
                    </div>
                    <div>
                        <p><strong>Location:</strong> <span id="r-location"></span></p>
                        <p><strong>Order Time:</strong> <span id="r-time"></span></p>
                    </div>
                </div>

                <table class="receipt-items">
                    <thead>
                        <tr>
                            <th>Ordered Item</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="r-items-list">
                    </tbody>
                </table>

                <div class="receipt-total">
                    Grand Total: ₹<span id="r-total"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact & Footer -->
    <footer id="contact">
        <p><strong>Spice Delight Restaurant</strong></p>
        <p>📍 123 Food Street, City Center | 📞 +91 98765 43210</p>
        <p>⏰ Open Daily: 10:00 AM - 11:00 PM</p>
        <p style="margin-top: 10px; color: #888;">&copy; 2026 Spice Delight. All Rights Reserved.</p>
    </footer>

    <!-- JavaScript Functionality -->
    <script>
        let cart = [];

        function addToOrder(itemName, itemPrice) {
            cart.push({ name: itemName, price: itemPrice });
            updateCartDisplay();
        }

        function removeItem(index) {
            cart.splice(index, 1);
            updateCartDisplay();
        }

        function updateCartDisplay() {
            const cartBody = document.getElementById('cart-body');
            const totalSpan = document.getElementById('total-amount');

            if (cart.length === 0) {
                cartBody.innerHTML = `
                    <tr id="empty-cart-row">
                        <td colspan="3" style="color: #888;">No items added yet. Click "Add to Order" above!</td>
                    </tr>
                `;
                totalSpan.textContent = '0';
                return;
            }

            let rows = '';
            let total = 0;

            cart.forEach((item, index) => {
                total += item.price;
                rows += `
                    <tr>
                        <td>${item.name}</td>
                        <td>₹${item.price}</td>
                        <td>
                            <button type="button" onclick="removeItem(${index})" style="background:#e53935;color:white;border:none;padding:5px 10px;border-radius:4px;cursor:pointer;">
                                Remove
                            </button>
                        </td>
                    </tr>
                `;
            });

            cartBody.innerHTML = rows;
            totalSpan.textContent = total;
        }

        function handlePlaceOrder(event) {
            event.preventDefault();

            if (cart.length === 0) {
                alert('Please add at least one food item to your order!');
                return false;
            }

            const name = document.getElementById('cust-name').value;
            const phone = document.getElementById('cust-phone').value;
            const location = document.getElementById('table-no').value;
            const total = document.getElementById('total-amount').textContent;

            // Populate the detailed receipt
            document.getElementById('r-name').textContent = name;
            document.getElementById('r-phone').textContent = phone;
            document.getElementById('r-location').textContent = location;
            document.getElementById('r-time').textContent = new Date().toLocaleTimeString();
            document.getElementById('r-total').textContent = total;

            // Generate items list in receipt
            const receiptItemsList = document.getElementById('r-items-list');
            let itemRows = '';
            cart.forEach(item => {
                itemRows += `
                    <tr>
                        <td>${item.name}</td>
                        <td>₹${item.price}</td>
                    </tr>
                `;
            });
            receiptItemsList.innerHTML = itemRows;

            // Display Receipt Box
            const receiptBox = document.getElementById('receipt-box');
            receiptBox.style.display = 'block';
            receiptBox.scrollIntoView({ behavior: 'smooth' });

            // Reset cart
            cart = [];
            updateCartDisplay();

            return false;
        }
    </script>
</body>
</html>
