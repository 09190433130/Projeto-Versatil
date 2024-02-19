import random

def escolher_palavra():
    with open('palavras.txt' . 'r') as file:
        palavras = file.readlines()
    return random.choice(palavras).strip()

def exibir_forca(erros):
    forca = [

    ]
    return forca[erros]

def jogar_forca():
    palavra = escolher_palavra()
    palavra_secreta = list('_' * len(palavra))
    letras_erradas = []
    tentativas = 6

    while tentativas > 0:
        letra = input(f"\nPalavra: {''.join(palavra_secreta)}\nLetras erradas: {''.join(letras_erradas)}\nDigite uma letra: ").lower()

            if letra.isalpha() and len(letra) == 1:
                if letra in palavra:
                    for i in range(len(palavra)):
                        if palavra[i] == letra:
                            palavra_secreta[i] = letra
                    if '_' not in palavra_secreta:
                        print(f"\nParabéns! Você acertou a palavra: {palavra}")
                        break
                    else:
                        letras_erradas.append(letra)
                        tentativas -= 1
                        print(exibir_forca(6 - tentativas))

                    else:
                        print("Por favor, digite uma letra válida.")

                        if tentativas == 0:
                            print(f"\nVocê foi enforcado! A palavra correta era: {palavra}")
                    if __name__ == "__main__":
                        jogar_forca()