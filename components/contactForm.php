<p>
    Puedes comunicarte directo a:
    <a href="tel:+51956277654">
        956277654
    </a> |
    <a href="tel:+51941303070">
        941303070
    </a>
    <br>
    O envíanos un correo electrónico a:
    <a href="mailto:info@filcot.pe" target="_top">
        info@filcot.pe
    </a>
</p>
<form method="post" action="mail.php">
    <div class="form-group">
        <label for="name">Nombre y Apellidos<span>*</span></label>
        <input type="text" class="form-control" id="name" name="name" required="required" />
    </div>
    <div class="form-group">
        <label for="phone">Teléfono <span>*</span></label>
        <input type="number" class="form-control" id="phone" name="phone" required="required" />
    </div>
    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" />
        <small id="emailHelp" class="form-text text-muted">Si no cuentas con un correo,
            descuida. Nos comunicaremos a tu
            número de contacto
        </small>
    </div>

    <div class="form-group">
        <label for="message">Mensaje</label>
        <textarea class="form-control" id="message" name="message" rows="3" required="required">
		</textarea>
    </div>
    <div class="buttonContainer">
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
    </div>
</form>