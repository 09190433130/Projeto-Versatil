import mysql.connector as mysql

# abrindo conexao
conexao = mysql.connect(host="127.0.0.1", username="root", password="", database="pythondbcrud")

# abrindo um CURSOR -> uma chamada para um comando SQL
cursor = conexao.cursor()

sql = "UPDATE contatos SET email = %s WHERE id = %s"
val = ("marcos@mail.com", 1)

# executando a chamada do comando SQL
cursor.execute(sql, val)

# efetivando as operacoes no banco de dados
conexao.commit()

print("Comando OK")
print(cursor.rowcount, "foram salvos.")
