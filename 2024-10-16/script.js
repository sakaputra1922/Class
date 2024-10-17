document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    
    // Simple validation
    if (name && email && message) {
        document.getElementById("response-message").innerText = `Thank you for your message, ${name}!`;
        document.getElementById("response-message").classList.remove("hidden");
        this.reset();
    } else {
        document.getElementById("response-message").innerText = "Please fill out all fields.";
        document.getElementById("response-message").classList.remove("hidden");
    }
});


