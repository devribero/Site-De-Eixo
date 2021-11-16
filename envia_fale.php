<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "8anoceixo@gmail.com";

$submit = $_REQUEST['submit'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Submit: " . $submit . "\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $submit , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.htm");


?>
