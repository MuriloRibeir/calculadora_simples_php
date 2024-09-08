<?php
$num1= $_POST["num1"];
$num2= $_POST["num2"];
$operacao= $_POST["operacao"];




switch ($operacao){
    case 'adi':
        $resu= $num1 + $num2;
        echo "resultado: $resu";
        break;
        case 'subi':
            $resu= $num1 - $num2;
            echo "resultado: $resu";
            break;
            case 'multi':
                $resu= $num1 * $num2;
                echo "resultado: $resu";
                break;

                case 'divi':
                    if ($num2 != 0) {
                        $resu= $num1 / $num2;
                        echo "Resultado: $resu";
                    } else {
                        echo"Erro: Não pode conter número 0";
                    }
                    break;

                    default:
                    $resu = "operação invalida!";
                    break;
}

                
?>