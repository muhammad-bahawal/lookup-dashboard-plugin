document.addEventListener("DOMContentLoaded", function () {
            const links = document.querySelectorAll(".bh-sidebar ul li a");
            const sections = document.querySelectorAll(".bh-section");
            const notificationIcon = document.querySelector(".bh-icons .bh-icon:nth-child(1)");
            const menuIcon = document.querySelector(".bh-icons .bh-icon:nth-child(2)");
            const notificationPopup = document.createElement("div");
            const menuPopup = document.createElement("div");
            const sidebar = document.querySelector(".bh-sidebar");
            const sidebarToggle = document.createElement("button");

            // Toggle active sections
            links.forEach((link, index) => {
                link.addEventListener("click", function (e) {
                    e.preventDefault();

                    sections.forEach(section => section.classList.remove("active"));
                    links.forEach(link => link.classList.remove("active"));

                    sections[index].classList.add("active");
                    link.classList.add("active");
                });
            });

            // Setup notification popup
            notificationPopup.className = "bh-popup";
            notificationPopup.innerHTML = `
                <div class="bh-popup-content">
                    <div class="nt-dropdown">
        <div class="nt-dropdown-header">Notifications</div>
        <p class="nt-border">You have 1 unread message</p>
        <h4>NEW</h4>
        <div class="nt-notification">
            <img src="https://fastly.picsum.photos/id/915/536/354.jpg?hmac=-U-RQjOm3-4QumkyatP7o4QEmM5f9wJLIZ6Ciz1AtUc" alt="Cart" width="20px">
            <div>
                <strong>Complete subscription!</strong>
                <p>Start the search today</p>
            </div>
            <a href="#" class="nt-btn" style="background: #ff5733;">BUY NOW</a>
        </div>
        <h4>BEFORE THAT</h4>
        <div class="nt-notification">
            <img src="https://fastly.picsum.photos/id/915/536/354.jpg?hmac=-U-RQjOm3-4QumkyatP7o4QEmM5f9wJLIZ6Ciz1AtUc" alt="User" width="20px">
            <div>
                <strong>Registration</strong>
                <p>Your account was registered successfully</p>
                <p>🕒 about 1 month ago</p>
            </div>
        </div>
    </div>
                </div>
            `;
            document.body.appendChild(notificationPopup);

            // Setup menu popup
            menuPopup.className = "bh-popup";
            menuPopup.innerHTML = `
                <div class="bh-popup-content">
                     <div class="bh-dropdown">
        <div class="bh-dropdown-header">hafizhamza810@gmail.com</div>
        <ul class="bh-dropdown-menu">
            <li><i>🏠</i> Dashboard</li>
            <li><i>👤</i> Profile</li>
            <li><i>💳</i> Billing</li>
            <li><i>❓</i> Help Center</li>
            <li><i>💬</i> Chat</li>
            <li><i>➡️</i> Log Out</li>
        </ul>
        <div class="bh-promo">
            <h4>Access unlimited data!</h4>
            <p>Name, phone, email, address and company lookups, criminal reports, and more.</p>
            <a href="#" class="bh-btn">CHOOSE YOUR PLAN</a>
        </div>
    </div>
                </div>
            `;
            document.body.appendChild(menuPopup);

            // Toggle popups
            notificationIcon.addEventListener("click", function (event) {
                event.stopPropagation();
                notificationPopup.classList.toggle("active");
                menuPopup.classList.remove("active");
            });

            menuIcon.addEventListener("click", function (event) {
                event.stopPropagation();
                menuPopup.classList.toggle("active");
                notificationPopup.classList.remove("active");
            });

            // Close popups when clicking outside
            document.addEventListener("click", function () {
                notificationPopup.classList.remove("active");
                menuPopup.classList.remove("active");
            });

            notificationPopup.addEventListener("click", function (event) {
                event.stopPropagation();
            });

            menuPopup.addEventListener("click", function (event) {
                event.stopPropagation();
            });

            // Sidebar Toggle Functionality
            sidebarToggle.className = "bh-sidebar-toggle";
            sidebarToggle.innerHTML = `<img src="right-arrow.png" alt="Toggle Sidebar">`;
            document.body.appendChild(sidebarToggle);
            sidebarToggle.addEventListener("click", function () {
    if (sidebarToggle.style.left === "32%") {
        sidebarToggle.style.left = "0%";
        sidebarToggle.querySelector("img").style.transform = "rotate(0deg)"; // Reset rotation
    } else {
        sidebarToggle.style.left = "32%";
        sidebarToggle.querySelector("img").style.transform = "rotate(180deg)"; // Rotate icon
    }
});

            // toogle sidebar button
            sidebarToggle.addEventListener("click", function () {
                sidebar.classList.toggle("active");
            });
        });