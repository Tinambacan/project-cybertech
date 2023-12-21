<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="ship_draft_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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

    <div id="shipment_container">
        <div id="deliver_details">
            <p id="delivered_name">Delivered on Mon, 11 Dec 2023</p>
            <p id="shipped">Shipped with Standard Local - J&T Express</p>
        </div>

        <div id="tracking_num">
            <svg id="green_circle" width="12" height="12">
                <circle cx="6" cy="6" r="6" style="fill:green;" />
            </svg>
            <span id="delivered">Delivered</span>
            <p id="origin">Parcel has been delivered.</p>

            <svg id="red_circle" width="12" height="12">
                <circle cx="6" cy="6" r="6" style="fill:red;" />
            </svg>
            <span id="shipped_to">Shipped to</span>
            <p id="destination">Destination</p>
        </div>
    </div>


    <footer>
        <div class="footer-icons">
            <a href="#" class="icon-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>

            <a href="#" class="icon-link">
                <i class="fas fa-file-alt"></i>
                <span>Orders</span>
            </a>
            <a href="#" class="icon-link">
                <i class="fas fa-truck"></i>
                <span>Shipment</span>
            </a>
        </div>
    </footer>


</body>

</html>