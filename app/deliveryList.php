<?php require_once('adminHeader.php'); ?>
<link rel="stylesheet" href="css/del_style.css">


<div class="partner-container">
    <div class="partner-box">
        <h3>Partner ID</h3>
    </div>
</div>

<div class="partner-dropdown">
    <select id="dropdown" onchange="">
        <option value="sample">sample</option>
    </select>
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
<?php require_once('adminFooter.php'); ?>