<!DOCTYPE html>
<html>
<head>

<title>EVRP UCP Registration</title>

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="container">

    <div class="card">

        <h1>EVRP UCP Register</h1>

        <form
            id="registerForm"
            action="process_register.php"
            method="POST"
        >

            <input
                type="text"
                name="ucp"
                id="ucp"
                placeholder="UCP Name"
                required
            >

            <input
                type="email"
                name="email"
                id="email"
                placeholder="Email"
                required
            >

            <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
                required
            >

            <input
                type="password"
                name="confirm"
                id="confirm"
                placeholder="Confirm Password"
                required
            >

            <button type="submit">
                REGISTER
            </button>

        </form>

    </div>

</div>

<script src="assets/js/register.js"></script>

</body>
</html>