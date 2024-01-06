<?php require_once('admin_header.php');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assign Delivery</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="css/assignDelivery1.css">
    </head>
    <body>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Shipper Name</th>
                        <th>Receiver Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01658839274</td>
                        <td>LEX PH</td>
                        <td>Angel D.</td>
                        <td>Picked Up</td>
                        <td>
                            <button onclick="open_modal('view', '01658839274')">
                                View</button>
                            <button class="assign-btn">
                                Assign</button>
                        </td>
                    </tr>
                    <tr>
                        <td>01231254063</td>
                        <td>Penshoppe</td>
                        <td>Via C.</td>
                        <td>Picked Up</td>
                        <td>
                            <button class="view-btn">View</button>
                            <button class="assign-btn">
                                Assign</button>
                        </td>
                    </tr>
                    <tr>
                        <td>55845302231</td>
                        <td>Thrift Shop</td>
                        <td>Samantha N.</td>
                        <td>Picked Up</td>
                        <td>
                            <button class="view-btn">View</button>
                            <button class="assign-btn">
                                Assign</button>
                        </td>
                    </tr>
                    <tr>
                        <td>31120645203</td>
                        <td>AMIA TECH</td>
                        <td>James N.</td>
                        <td>Picked Up</td>
                        <td>
                            <button class="view-btn">View</button>
                            <button class="assign-btn">
                                Assign</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="view_modal" class="modal">
            <div class="modal-content">
                <span class="close-btn" onclick="close_modal()">&times;</span>
                <div id="order_info"></div>
            </div>
        </div>

            <!-- Assign Modal -->
        <div class="assign-overlay" id="assign_overlay"></div>
        <div class="assign-modal" id="assign_modal">
            <h2>Assign Delivery</h2>
            <form class="filter-button">
                <input type="text" name="filter" placeholder="">
                <button type="button" class="filter">Filter</button>
            </form>
            <div class="assign-table-container">
                <table class="assign-table">
                    <thead>
                        <tr>
                            <th>Delivery Partner</th>
                            <th>Vehicle</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fame Manalo</td>
                            <td>Motorcycle</td>
                            <td><input type="radio" id="option_1" 
                                name="options" value="option_1"></td>
                        </tr>
                        <tr>
                            <td>Ferb Delacruz</td>
                            <td>Motorcycle</td>
                            <td><input type="radio" id="option_2" name="options" 
                                value="option_2"></td>
                        </tr>
                        <tr>
                            <td>Ferlin Datu</td>
                            <td>L300</td>
                            <td><input type="radio" id="option_1" 
                                name="options" value="option_1"></td>
                        </tr>
                        <tr>
                            <td>Frixter Gomez</td>
                            <td>Closed Van</td>
                            <td><input type="radio" id="option_1" 
                                name="options" value="option_1"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="assign-button-container">
                    <button type="submit" class="assign" disabled>
                        Assign Order</button>
                </div>
            </div>
        </div>

        <script src="js/assignDelivery.js"></script>
    </body>
</html>

<?php require_once('admin_footer.php');?>