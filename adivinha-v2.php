<?php

$numero1 = (int) readline("Insira o primeiro valor do intervalo: ");
$numero2 = (int) readline("Insira o segundo valor do intervalo: ");

$valor = rand($numero1, $numero2);

$tentativas = 10;
$pontos = 10;

is_int(1);

while($tentativas != 0)
{
    if($tentativas > 1){
        
            print("\033[34mVocê possui $tentativas tentativas\033[0m\n");
            
    }else {
        
        if($tentativas == 1){
            
            print("\033[34mVocê possui 1 tentativa\033[0m\n");
            
        }
    }
    
    $chute=(int) readline("Insira um número: ");
    
    is_int(1);
    
    if($chute ==  $valor){

        if($pontos > 1){
            
            if($pontos > 1 && $pontos != 10)
            {
                print("\033[32mVocê venceu!!!\nVocê terminou com $pontos pontos\033[0m\n");
                
            } else {
                
                if($pontos == 10){
                    
                    print("\033[32mVocê é brabo demais!!!\nVocê terminou com 10 pontos!\033[0m\n");
                    
                }
            }
            break;
            
        } else {
            
            if($pontos == 1){
                
                print("Você venceu!!!\nVocê fez 1 ponto\n");
                break;
                
            }
        }

    } else {
        
        if($chute > $valor){
            
            print("\03[33mVocê errou, mas o valor é menor que $chute\033[0m\n");
        } else{
            
            if($chute < $valor){
                
                print("\033[33mVocê errou, mas o valor é maior que $chute\033[0m\n");
            }
        }
    }
    $tentativas--;
    $pontos--; 

}

print("\033[31mVocê utilizou todas as suas tentativas\033[0m\n");

if($pontos == 0 ){

    print("\033[31mO número era $valor\033[0m\n");

}
?>
