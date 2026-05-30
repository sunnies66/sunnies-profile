<!DOCTYPE html>
<html>
<head>
    <title>Register UCP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="card">

    <h2>Register UCP</h2>

    <form action="process_register.php" method="POST">

        <input
            type="text"
            name="ucp"
            placeholder="UCP Name"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Email"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <input
            type="password"
            name="confirm"
            placeholder="Confirm Password"
            required
        >

        <button type="submit">
            Register
        </button>

    </form>

</div>

</body>
</html>