<h2>Fale Conosco</h2>
<form method="post" action="faleconosco.php">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="mensagem">Mensagem:</label><br>
    <textarea id="mensagem" name="mensagem" required></textarea><br><br>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode processar e enviar a mensagem para um email, salvar em um banco de dados etc.
    echo "<p>Obrigado, $nome! Sua mensagem foi enviada com sucesso.</p>";
}
?>
