const showBtn = document.querySelector('.navBtn');
const topNav = document.querySelector('.top-nav');

document.addEventListener('DOMContentLoaded', () => {
    const showBtn = document.querySelector('.navBtn');
    const topNav = document.querySelector('.top-nav');

    // Toggle navbar
    if (showBtn && topNav) {
        showBtn.addEventListener('click', function () {
            if (topNav.classList.contains('showNav')) {
                topNav.classList.remove('showNav');
                showBtn.innerHTML = '<i class="fas fa-bars"></i>';
            } else {
                topNav.classList.add('showNav');
                showBtn.innerHTML = '<i class="fas fa-times"></i>';
            }
        });
    }

    // Popup logic
    const authPopup = document.getElementById('authPopup');
    const closePopupBtn = document.getElementById('closePopupBtn');
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    // Close popup
    if (authPopup && closePopupBtn) {
        closePopupBtn.addEventListener('click', () => {
            authPopup.classList.remove('show');
        });
    }

    // Tab switching logic
    if (tabButtons.length && tabContents.length) {
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.add('hidden'));

                button.classList.add('active');
                document.getElementById(button.dataset.tab).classList.remove('hidden');
            });
        });
    }

    // Check for error message from PHP (via query params)
    const params = new URLSearchParams(window.location.search);
    const popupType = params.get('popup');
    const errorMessage = params.get('error');

    if (popupType === 'login') {
        const loginTabBtn = document.querySelector('[data-tab="loginTab"]');
        const loginTab = document.getElementById('loginTab');

        if (authPopup && loginTabBtn && loginTab) {
            authPopup.classList.add('show');
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.add('hidden'));
            loginTabBtn.classList.add('active');
            loginTab.classList.remove('hidden');

            const errorBox = document.querySelector('.form-error');
            if (errorMessage && errorBox) {
                errorBox.classList.remove('hidden');
                errorBox.textContent = errorMessage;
            }
        }
    }

    if (popupType === 'register') {
        const registerTabBtn = document.querySelector('[data-tab="registerTab"]');
        const registerTab = document.getElementById('registerTab');

        if (authPopup && registerTabBtn && registerTab) {
            authPopup.classList.add('show');
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.add('hidden'));
            registerTabBtn.classList.add('active');
            registerTab.classList.remove('hidden');

            const errorBox = document.querySelector('.form-error');
            if (errorMessage && errorBox) {
                errorBox.classList.remove('hidden');
                errorBox.textContent = errorMessage;
            }
        }
    }

    // Lightbox (optional)
    if (document.querySelector('.gallery a')) {
        var lightbox = new SimpleLightbox('.gallery a', { /* options */});
    }
});


// Contact logic
document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    // Remove existing error messages
    form.querySelectorAll(".error-msg").forEach(el => el.remove());

    // Validate form fields
    const inputs = form.querySelectorAll("input[required], textarea[required]");
    let valid = true;

    inputs.forEach(input => {
        input.style.borderColor = "";
        if (!input.checkValidity()) {
            valid = false;
            input.style.borderColor = "red";

            const error = document.createElement("span");
            error.className = "error-msg";
            error.style.color = "red";
            error.style.fontSize = "14px";
            error.textContent = input.validationMessage;
            input.insertAdjacentElement("afterend", error);
        }
    });

    // If form is valid, submit the form via AJAX
    if (valid) {
        fetch('../backend/handle_contact.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById("popupMessage").textContent = data.message;
                    document.getElementById("popup").classList.add("show");
                    form.reset();
                } else {
                    // Handle errors or failure from backend if needed
                    alert("Something went wrong. Please try again.");
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error submitting the form.');
            });
    }
});

// Close popup when button is clicked
function closePopup() {
    document.getElementById("popup").classList.remove("show");
}


