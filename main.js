
document.addEventListener("DOMContentLoaded", function() {
    let form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(event) {
            let valid = true;
            const inputs = form.querySelectorAll('input[required], textarea[required]');
            inputs.forEach(function(input) {
                if (!input.value.trim()) {
                    valid = false;
                    input.classList.add('invalid');
                } else {
                    input.classList.remove('invalid');
                }

                if (input.type === "email" && input.value.trim()) {
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(input.value.trim())) {
                        valid = false;
                        input.classList.add('invalid');
                    } else {
                        input.classList.remove('invalid');
                    }
                }
            });

            if (!valid) {
                event.preventDefault();
                alert("Fill in all fields correctly!");
            }
        });
    }
});
