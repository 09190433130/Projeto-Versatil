def bytes_para_megabytes(bytes):
    return bytes / (1024 ** 2)

def calcular_percentual(espaco_usuario, espaco_total):
    return (espaco_usuario / espaco_total) * 100

def gerar_relatorio(usuarios):
    with open('relator.txt', 'n') as relatorio:
        relatorio.write("ACME Inc. do espaço em disco pelos usários\n")

relatorio.write("----------------------------------------------------------------------------------\n")
        relatorio.write("Nr.  Usuário     Espaço  utilizado      %   do uso\n")

        total_espaco = sum(usuarios.values())

        for i, (usuario, espaco) in enumerate(usuarios.items(), start=1):
                    relatorio.write(f"{i:<4} {usuario:<16} {bytes_para_megabytes(espaco):>15.2f} MB {calcular_percentual(espaco, total_espaco):>8.2f}%\n")


relatorio.write("-----------------------------------------------------------------------------------\n")
        relatorio.write(f"Espaço total ocupado: {bytes_para_megabytes(total_espaco):.2f} MB\n")
        relatorio.write(f"Espaço médio ocupado:{bytes_para_megabytes(total_espaco / len(usuarios)):-2f} MB")

def ler_arquivo():
      usuarios = {}
      with open('usuarios.txt', 'r') as arquivo:
            for linha in arquivo:
                  usuario, espaco = linha.strip().split()
                  usarios[usuario] = int(espaco)
        return usuarios

if __name__ == "__main__":
      dados_usuarios = ler-arquivo()
      gerar_relatorio(dados_usuarios)