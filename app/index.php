<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/index2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="wrapper">
        <div class="container">
            <i class="fas fa-map-marker-alt"></i>
            <input class="input-location" type="text" 
                placeholder="Lower Bicutan, Taguig" readonly>
            <h2 class="h2-1">Let's track your package</h2>
            <p class="p-1">Please enter your tracking number: </p>
            <div class="search-container">
                <i class="fas fa-search fa-2xl"></i>
                <input type="text" class="input-tracking" 
                    placeholder="Enter tracking number">
                <button class="search-tracking">Search</button>
            </div>
        </div>
        <main>
            <div class="tracking-history">
                <h2>Tracking history</h2>
                <div class="shop">
                    <img src="images/shop_location.png" alt="" class="shop-location">
                    <div class="shop-info">
                        <p>Cybertech Store</p>
                        <p>Tracking #: 75311260294302</p>
                    </div>
                </div>
                <div class="shop">
                    <img src="images/shop_location.png" alt="" class="shop-location">
                    <div class="shop-info">
                        <p>Thrift Shop</p>
                        <p>Tracking #: 75311260294302</p>
                    </div>
                </div>

                <h2>Current Shipment</h2>
                <div class="container-shipment-progress">
                    <div class="container-shipment">
                        <img src="images/shop_location.png" alt="" class="shop-location">
                        <div class="shop-info">
                            <p>Thrift Shop</p>
                            <p>Tracking #: 75311260294302</p>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="step">
                            <div><i class="fas fa-circle"></i></div>
                            <div class="shipment-info">
                                <p class="shipment-status">From</p>
                                <p class="shipment-loc">Don Bosco Village, Paranaque City</p> 
                            </div> 
                            
                        </div>
                        <div class="dotted-list">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </div>
                        <div class="step">
                            <div><i class="fas fa-circle final-location"></i></div>
                            <div class="shipment-info">
                                <p class="shipment-status">Shipped to</p>
                                <p class="shipment-loc">Don Bosco Village, Paranaque City</p> 
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <footer>
        <div class="footer-icons">
            <a href="index.php" class="icon-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <a href="index_orders.php" class="icon-link">
                <i class="fas fa-file-alt"></i>
                <span>Orders</span>
            </a>
            <a href="shipment.php" class="icon-link">
                <i class="fas fa-truck"></i>
                <span>Shipment</span>
            </a>
        </div>
    </footer>
</div>
</body>
</html>