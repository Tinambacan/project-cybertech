<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shipment Page</title>
        <link rel="stylesheet" href="css/shipment1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <header>
            <button class="back-button">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="menu-button">
                <i class="fas fa-ellipsis-h"></i>
            </button>
        </header>

        <div class="title-container">
            <h2>Shipment</h2>
        </div>

        <main>
            <div class="shipment">
                <div class="status">
                    <div class="delivered-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="delivered-details">
                        <div class="delivered-title">
                            Delivered on Mon, 11 Dec 2023
                        </div>
                        <div class="delivered-text">
                            Shipped with Standard Local - J&T Express
                        </div>
                    </div>
                </div>

                <div class="tracking-info">
                    <div class="tracking-label">Tracking Number:</div>
                    <div class="tracking-number">75311260294302</div>
                    <div class="copy-link">
                        <a href="#" class="copy-link-text">COPY</a>
                    </div>
                </div>

                <div class="progress-bar">
                    <div class="step">
                        <div><i class="fas fa-circle final-location"></i></div>
                        <div class="destination">
                            <strong>Delivered</strong>
                            Parcel has been delivered.
                        </div>
                    </div>

                    <div class="step">
                        <div><i class="fas fa-circle"></i></div>
                        <div class="destination">
                            <strong>In Transit</strong>
                            Parcel is out for delivery.
                        </div>
                    </div>

                    <div class="step">
                        <div><i class="fas fa-circle"></i></div>
                        <div class="destination">
                            Your parcel has arrived at the delivery hub
                        </div>
                    </div>

                    <div class="step">
                        <div><i class="fas fa-circle"></i></div>
                        <div class="destination">
                            <strong>
                                Parcel has arrived at sorting facility:
                            </strong>
                            MUNTINLUPA Alabang - 1
                        </div>
                    </div>

                    <div class="step">
                        <div><i class="fas fa-circle"></i></div>
                        <div class="destination">
                            <strong>
                                Parcel has departed from sorting facility:
                            </strong>
                            PARANAQUE NCR South Warehouse
                        </div>
                    </div>

                    <div class="step">
                        <div><i class="fas fa-circle"></i></div>
                        <div class="destination">
                            <strong>
                                Parcel has arrived at sorting facility:
                            </strong>
                            PARANAQUE NCR South Warehouse
                        </div>
                    </div>

                    <div class="step">
                        <div><i class="fas fa-circle"></i></div>
                        <div class="destination">
                            <strong>
                                Parcel has departed from sorting facility:
                            </strong>
                            TAGUIG Sorting Hub
                        </div>
                    </div>

                    <div class="step">
                        <div><i class="fas fa-circle first-location"></i></div>
                        <div class="destination">
                            Your parcel has been picked up by our logistics 
                            partner.
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
    </body>
</html>

