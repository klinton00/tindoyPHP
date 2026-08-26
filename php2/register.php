<?php require './layout/head.php'; ?>
<h1>Register</h1>
<form action="register_process.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter your username" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>
    
    <button type="submit">Register</button>
</form>
<?php require './layout/foot.php'; ?>