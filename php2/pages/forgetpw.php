<?php require './layout/head.php'; ?>
<h1>Forgot Password</h1>
<p>If you forgot your password, please enter your email address below to reset it.</p>
<form action="resetpw.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
    <button type="submit">Reset Password</button>

<?php require './layout/foot.php'; ?>