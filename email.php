<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jina = $_POST['jina'];
    $barua = $_POST['barua'];
    $ujumbe = $_POST['ujumbe'];

    $to = "andreatujabe4@gmail.com"; // ✅ Email yako
    $subject = "Ujumbe mpya kutoka kwenye website";
    $message = "Jina: $jina\n";
    $message .= "Barua Pepe: $barua\n";
    $message .= "Ujumbe:\n$ujumbe\n";
    $headers = "From: $barua";

    if (mail($to, $subject, $message, $headers)) {
        echo "✅ Ujumbe umetumwa kwa mafanikio!";
    } else {
        echo "❌ Samahani, ujumbe haukutumwa.";
    }
}
?>