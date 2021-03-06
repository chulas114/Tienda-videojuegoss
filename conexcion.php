<!-- Form -->
<form class="block-decoration-2" id="contactForm" method="post" action="./php/reservas.php">

<!-- Contact number (hidden) -->
<input type="hidden" name="contact_number">

<!-- Name -->
<div class="mb-3">
    <label class="visually-hidden" for="user_name">Nombre completo</label>
    <input class="form-control" id="user_name" name="user_name" type="text" placeholder="Nombre completo" required />
</div>

<!-- Email -->
<div class="mb-3">
    <label class="visually-hidden" for="user_email">Direccion de correo electronico</label>
    <input class="form-control" id="user_email" name="user_email" type="email" placeholder="Direccion de correo electronico" required />
</div>

<!-- Message -->
<div class="mb-3">
    <label class="visually-hidden" for="message">Mensaje</label>
    <textarea class="form-control" id="message" name="message" rows="9" placeholder="Mensaje" required></textarea>
</div>

<!-- Button -->
<button class="btn btn-outline-primary" type="submit">
    Enviar mensaje
</button>