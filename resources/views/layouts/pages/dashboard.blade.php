<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <h1>Writers Admin</h1>
        </div>
        <div class="wallet">
            <p>Wallet: KES 10.0</p>
            <button>Top up</button>
            <button>Withdraw</button>
            <button>Transfer</button>
            <button>Refresh</button>
        </div>
        <div class="public">
            <h2>Public</h2>
            <p>5</p>
        </div>
        <div class="news">
            <h2>NEWS</h2>
            <p>5 news</p>
            <div class="news-item">
                <h3>Writers group for updates only</h3>
                <p>Join this group for Writerd Admin updates only. For writers.!...</p>
                <button>View</button>
            </div>
            <div class="news-item">
                <h3>Warning to Private Writers</h3>
                <p>If you're a public writer, do not engage any random...</p>
                <button>View</button>
            </div>
            <div class="news-item">
                <h3>New Feature Alert</h3>
                <p>Going forward, all assigned orders have to be confirmed by...</p>
                <button>View</button>
            </div>
            <div class="news-item">
                <h3>Blind bidding</h3>
                <p>After realization that most of you just bid for the...</p>
                <button>View</button>
            </div>
            <div class="news-item">
                <h3>Warning to Private Writers</h3>
                <p>If you're a public writer, do not engage any random...</p>
                <button>View</button>
            </div>
        </div>
        <div class="messages">
            <h2>MESSAGES</h2>
            <p>No messages</p>
        </div>
        <div class="user">
            <div class="avatar">
                <p>avatar Wilson Munyua</p>
            </div>
            <button>Switch Account</button>
            <button>Edit Profile</button>
            <button>Logout</button>
        </div>
        <div class="dashboard">
            <button>Dashboard</button>
            <button>Available</button>
            <button>In Progress0</button>
            <button>In Review0</button>
            <button>Completed0</button>
            <button>Pending payment</button>
            <button>Paid</button>
            <button>Revision0</button>
            <button>Canceled0</button>
            <button>Disputed0</button>
        </div>
        <div class="profile">
            <button>Profile</button>
            <button>Rating</button>
        </div>
    </div>
    <div class="main-content">
        <button class="toggle-btn" id="toggle-btn">☰</button>
        <div class="content">
            <!-- Your main content here -->
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
