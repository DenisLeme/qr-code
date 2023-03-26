<?php
$nome = "João"; // Nome do usuário
$url = "https://buzzvel.com/" . $nome; // URL do usuário
$qr_code = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($url); // QR Code

if (isset($_GET['nome']) && $_GET['nome'] === $nome) {
    header("Location: /john");
    exit();
}

echo "<img src='john_mobile_image.jpg' alt='John Mobile Image'>";

if ($_SERVER['REQUEST_URI'] === '/john') {
    echo "<h1>Meu nome é $nome</h1>";
    echo "<p>Meu telefone é (XX) XXXX-XXXX</p>";
    echo "<p>Meu email é joao@meunegocio.com</p>";
} else {
    echo "<img src='$qr_code' alt='QR Code'>";
    echo "<p>Escaneie este código QR para acessar a página de $nome</p>";
}""
?>
