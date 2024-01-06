<?php require_once('admin_header.php'); ?>
<link rel="stylesheet" href="css/del_style1.css">


<div class="partner-container">
    <div class="partner-box">
        <h3>Partner ID</h3>
    </div>
    <div class="partner-dropdown">
        <select id="dropdown" onchange="">
            <option value="sample">sample</option>
        </select>
    </div>
</div>

<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Checkpoint Location</th>
            <th>Description</th>
            <th>Rider Name</th>
        </tr>
    </thead>
    <tbody id="deliveryList_table"></tbody>
</table>
<?php require_once('admin_footer.php'); ?>