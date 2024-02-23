import mysql.connector as mysql

# abrindo conexao
conexao = mysql.connect(host="127.0.0.1", username="root", password="", database="pythondbcrud")

# abrindo um CURSOR -> uma chamada para um comando SQL
cursor = conexao.cursor()

sql = "DELETE FROM contatos WHERE email = %s"
val = ("marcos@mail.com", )

# executando a chamada do comando SQL
cursor.execute(sql, val)

# efetivando as operacoes no banco de dados
conexao.commit()

print("Comando OK")
print(cursor.rowcount, "foram salvos.")
