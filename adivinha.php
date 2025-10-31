<?php
$valor = rand(1, 100);
$tentativas = 10;
$pontos = 10;

is_int(1);

while($tentativas != 0)
{
    if($tentativas > 1){
        
            print("Você possui $tentativas tentativas\n");
            
    }else {
        
        if($tentativas == 1){
            
            print("Você possui 1 tentativa\n");
            
        }
    }
    
    $chute=(int) readline("Insira um número: ");
    
    is_int(1);
    
    if($chute ==  $valor){

        if($pontos > 1){
            
            if($pontos > 1 && $pontos != 10)
            {
                print("Você venceu!!!\nVocê terminou com $pontos pontos\n");
                
            } else {
                
                if($pontos == 10){
                    
                    print("Você é brabo demais!!!\nVocê fez 10 pontos!\n");
                    
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
            
            print("Você errou, mas o valor é menor que $chute\n");
        } else{
            
            if($chute < $valor){
                
                print("Você errou, mas o valor é maior que $chute\n");
            }
        }
    }
    $tentativas--;
    $pontos--; 

}

if($pontos == 0 ){

    print("O número era $valor\n");

}
?>
