import mysql.connector as mysql

# abrindo conexao
conexao = mysql.connect(host="127.0.0.1", username="root", password="", database="pythondbcrud")

# abrindo um CURSOR -> uma chamada para um comando SQL
cursor = conexao.cursor()

cursor.execute("SELECT * FROM contatos")

"""
ao capturar os dados com fetch-all
todos os dados são coletados em forma de LISTA
"""
dados = cursor.fetchall()
print(type(dados))

# imprimindo
for registro in dados:
    print("DADOS: ", registro, "TIPO: ", type(registro))
    # cada registro é devolvido como TUPLA