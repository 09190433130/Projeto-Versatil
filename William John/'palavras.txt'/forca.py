import random

def escolher_palavra():
    with open("palavra.txt", "r") as arquivo:
        palavras = arquivo.readlines()
    return random.choice(palavra).strip()

def exibir_forca(palavra, letras_corretas):
    resultado = ""
    for letra in palavra:
        if letra in letra_correta:
            resultado += letra
        else:
            resultado += "_"
        return resultado
    
def jogo_da_forca():
    palavra_secreta = escolher_palavra()
    tentativas_maximas = 6
    letras_corretas = []

    print("Bem-vindo ao jogo da forca!")
    print(exibir_forca(palavra_secreta,letras_corretas))

    while tentatvias_maximas > 0:
        letras_digitada = input("Digite uma letra:").lower()

        if letra_digitada in palavra_secreta:
            letras_corretas.append(letra_digitada)
            print("Letra correta!")
        else:
            tentatvias_maximas -= 1
            print(f"Letra incorreta: Tentativas restantes: {tentativas_maximas}")

            resultado_atual = exibir_forca(palavra_secreta,letras_corretas)
            print(resultado_atual)

            if "_" not in resultado_atual:
                print("Parabéns! Você ganhou!")
                break

        if tentativas_maximas == 0:
            print(f"Você foi enforcado: A palavra era: {palavra_secreta}")

        if __name__ == "__main__":
            jogo_da_forca()

def main():
    jogo_da_forca()

main()

