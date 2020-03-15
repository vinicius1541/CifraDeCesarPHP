<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php
$TextToEncrypt = $_POST['cifra'];
$n = 3;
$tamanhoAlfabeto = 256;
$fora = 32;
$encrypt = '';
$decrypt = '';

for ($i = 0; $i < strlen($TextToEncrypt); $i++) {
    $key = ord($TextToEncrypt[$i]); //funcao que pega o codigo em ascii (int) e joga em $key
    $newCode = $key + $n; //$novoCod recebe $chave +$deslocamento
    $newCode = $newCode % $tamanhoAlfabeto;
    if ($newCode > 122) { //para caso o $newCode seja maior que 122(z em ascii), 
        $novoCod = $newCode - 122; //entao $novoCod vai receber $newCode(124 por exemplo) - 122(z em ascii)
        $newCode = 96; // após a conta, zeramos o $newCode para 96(a em ascii)
        $newCode = $newCode + $novoCod; //entao somamos ao $newCode a diferenca (124-122=2) com o 96 do $newCode(96+2=98(c))
    }
    /*if($newCode<0){
            $newCode= 26-$n;
        }
        if($newCode >= 0 && $newCode < $fora){
            $newCode += $fora;
        }*/

    $encrypt .= chr($newCode);
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Cifra de Cesar - <b>Resultado</b></h5>
                    <?php
                        echo "<p class='text-center'>Deslocamentos: $n</p>";
                        echo "<p class='text-center'>Texto: $TextToEncrypt<br>Encriptado:$encrypt</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>