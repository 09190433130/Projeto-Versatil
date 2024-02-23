import mysql.connector as mysql

# abrindo conexao
conexao = mysql.connect(host="127.0.0.1", username="root", password="", database="pythondbcrud")

# abrindo um CURSOR -> uma chamada para um comando SQL
cursor = conexao.cursor()

cursor.execute("SELECT * FROM contatos")

"""
ao capturar os dados com fetch-one
só é coletado apenas o primeiro registro da busca
"""
dados = cursor.fetchone()

# imprimindo
print("ID       ", dados[0])
print("NOME     ", dados[1])
print("EMAIL    ", dados[2])
print("TELEFONE ", dados[3])

# cada registro é devolvido como TUPLA
print(type(dados))
