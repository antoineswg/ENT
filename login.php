<div>
    <img src="images/logoeiffel1.png" alt="">
    <h1>Bienvenue sur votre ENT</h1>
    <p>Veuillez vous connecter</p>
    <form action="traitelogin.php" method="post">
        <label for="mail">Adresse e-mail*</label><br>
        <input type="email" id="mail" name="mail" required><br>

        <label for="password">Mot de passe*</label><br>
        <div class="input-wrapper">
        <input type="password" id="password" name="password" required><br>
        <button type="button" id="togglePassword" onclick="togglePasswordVisibility()">Afficher</button>
        </div>
        <br>
        <div>
            <div>
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Se souvenir de moi</label>
            </div>
            <a href="index.php?status=recover">Mot de passe oublié ?</a>
        </div>
        <button type="submit">Se connecter</button>
    </form>
    <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var toggleButton = document.getElementById('togglePassword');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleButton.textContent = 'Masquer';
        } else {
            passwordInput.type = 'password';
            toggleButton.textContent = 'Afficher';
        }
    }
    </script>

    <?php
    if (isset($_GET['erreur'])) {
        if ($_GET['erreur'] == 'mail') {
            echo '<p>Adresse e-mail inconnue</p>';
        }
        if ($_GET['erreur'] == 'password') {
            echo '<p>Mot de passe incorrect</p>';
        }
    }
    ?>

</div>

