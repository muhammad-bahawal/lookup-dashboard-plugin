<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <div class="bh-main-dashboard">
        <div class="bh-sidebar">
        <h1>LOOKPERSON</h1>
        <ul>
            <li><a href="#"><span>📊</span>Dashboard</a></li>
            <li><a href="#"><span>👤</span>Person Lookup</a></li>
            <li><a href="#"><span>#️⃣</span>Phone Lookup</a></li>
            <li><a href="#"><span>📧</span>Email Lookup</a></li>
            <li><a href="#"><span>📍</span>Address Lookup</a></li>
            <li><a href="#"><span>⚠️</span>Sex Offenders</a></li>
            <li><a href="#"><span>🛡️</span>Criminal Records</a></li>
            <li><a href="#"><span>🏢</span>Company Search</a></li>
            <li><a href="#"><span>🌐</span>Web Search</a></li>
        </ul>
    </div>

    <div class="bh-main">
        <!-- header -->
        <div class="bh-header">
            <div class="bh-icons">
                <div class="bh-icon">
                    <img src="bell.png" alt="Notifications">
                    <div class="bh-notification">1</div>
                </div>
                <div class="bh-icon">
                    <img src="menu.png" alt="Menu">
                </div>
            </div>
        </div>

        <div id="dashboard" class="bh-section active">
            <?php include 'dashboard-tab.php'; ?>
        </div>



        <div id="person-lookup" class="bh-section">
            <div class="bh-content">
                <p>This is the Person Lookup section.</p>
            </div>
        </div>
        <div id="phone-lookup" class="bh-section">
            <div class="bh-content">
                <p>This is the Phone Lookup section.</p>
            </div>
        </div>
        <div id="email-lookup" class="bh-section">
            <div class="bh-content">
                <p>This is the Email Lookup section.</p>
            </div>
        </div>
        <div id="address-lookup" class="bh-section">
            <div class="bh-content">
                <p>This is the Address Lookup section.</p>
            </div>
        </div>
        <div id="sex-offenders" class="bh-section">
            <div class="bh-content">
                <p>This is the Sex Offenders section.</p>
            </div>
        </div>
        <div id="criminal-records" class="bh-section">
            <div class="bh-content">
                <p>This is the Criminal Records section.</p>
            </div>
        </div>
        <div id="company-search" class="bh-section">
            <div class="bh-content">
                <p>This is the Company Search section.</p>
            </div>
        </div>
        <div id="web-search" class="bh-section">
            <div class="bh-content">
                <p>This is the Web Search section.</p>
            </div>
        </div>
    </div>
    </div>

</body>
</html>