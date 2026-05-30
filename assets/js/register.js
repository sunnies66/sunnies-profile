document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("registerForm");

    form.addEventListener("submit", (e) => {

        const password =
            document.getElementById("password").value;

        const confirm =
            document.getElementById("confirm").value;

        const ucp =
            document.getElementById("ucp").value;

        const regex =
            /^[A-Za-z0-9_]+$/;

        if (!regex.test(ucp)) {

            e.preventDefault();

            alert(
                "UCP hanya boleh huruf, angka dan underscore."
            );

            return;
        }

        if (password.length < 8) {

            e.preventDefault();

            alert(
                "Password minimal 8 karakter."
            );

            return;
        }

        if (password !== confirm) {

            e.preventDefault();

            alert(
                "Password tidak sama."
            );

            return;
        }

    });

});