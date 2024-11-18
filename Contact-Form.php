<!DOCTYPE html>
<form action="contact-form.php" method="POST">
    <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required placeholder="Enter your name">
    </div>
    <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email address">
    </div>
    <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" name="message" required placeholder="Write your message here"></textarea>
    </div>
    <button type="submit">Send Message</button>
</form>