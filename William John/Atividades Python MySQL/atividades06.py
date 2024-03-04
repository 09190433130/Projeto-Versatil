import mysql.connector as mysql

conexao = mysql.connect(
host="127.0.0.1",
username="root",
password="",
database="dbpython"
)
cursor = conexao.cursor()

cursor.execute("SELECT * FROM contatos")

dados = cursor.fetchone()

print("ID       ", dados[0])
print("NOME     ", dados[1])
print("EMAIL    ", dados[2])
print("TELEFONE ", dados[3])

print(type(dados))