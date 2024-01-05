function open_modal(type, order_id) {
    const modal = document.getElementById(`${type}_modal`);
    const modal_content = modal.querySelector(".modal-content");

    const order_data = {
        order_id: order_id,
        status: "Picked Up",
        receiver: "Angel Delama",
        phone_number: "09789456123",
        address: "Alabang, Muntinlupa City",
        email: "delama.angel@gmail.com"
    };
    
    modal_content.innerHTML = `
        <div class="line">
            <h2>Order Information</h2>
            <span class="close-btn" onclick="close_modal()">&times;</span>
        </div>
        <div id="order_info">${create_order_info_html(order_data)}</div>
    `;

    modal.style.display = "flex";
}

function create_order_info_html(order_data) {
    return `
        <p><strong>Order ID:</strong> ${order_data.order_id}</p>
        <p><strong>Order Status:</strong> ${order_data.status}</p>
        <p><strong>Receiver:</strong> ${order_data.receiver}</p>
        <p><strong>Phone Number:</strong> ${order_data.phone_number}</p>
        <p><strong>Address:</strong> ${order_data.address}</p>
        <p><strong>Email:</strong> ${order_data.email}</p>
    `;
}

function close_modal() {
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => modal.style.display = 'none');
}

window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = "none";
    }
};

document.addEventListener('DOMContentLoaded', function () {
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    const assignButton = document.querySelector('.assign');
  
    radioButtons.forEach(function (radioButton) {
        radioButton.addEventListener('change', function () {
            const atLeastOneChecked = Array.from(radioButtons)
              .some(radio => radio.checked);
            assignButton.disabled = !atLeastOneChecked;
        });
    });
  });
  
  document.addEventListener('DOMContentLoaded', function () {
    const openModalBtns = document.querySelectorAll('.assign-btn');
    const modal = document.getElementById('assign_modal');
    const overlay = document.getElementById('assign_overlay');
  
    openModalBtns.forEach(function (openModalBtn) {
        openModalBtn.addEventListener('click', function () {
            modal.style.display = 'block';
            overlay.style.display = 'block';
        });
    });
  
    overlay.addEventListener('click', function () {
        modal.style.display = 'none';
        overlay.style.display = 'none';
    });
});