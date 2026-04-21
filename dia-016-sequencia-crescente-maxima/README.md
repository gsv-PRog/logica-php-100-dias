# Dia 016

Um programa que encontra a maior sequência maxima. 

## Explicação 

- Pedi vários números separados por espaços
- Encontrar a maior sequência crescente consecutiva dentro de uma lista 
Exemplo: Digite números: 1 2 3 2 3 4 5 1 2

Maior sequência crescente: 2 3 4 5
Tamanho: 4

- cada número é maior que o anterior, quando parar de crescer a sequência termina

# lógica 

- usar a função explode()
- cria duas variáveis para aguardar as sequências
- Loop for e condições if/else
- Reiniciar a sequência $sequenciaAtual = [$n[$i]];