import mysql.connector as mysql

# abrindo conexao
conexao = mysql.connect(host="127.0.0.1", username="root", password="", database="pythondbcrud")

# abrindo um CURSOR -> uma chamada para um comando SQL
cursor = conexao.cursor()

sql = "INSERT INTO contatos(nome, email, telefone) VALUES (%s, %s, %s)"
val = ("Filipe Coutinho", "filipe@mail.com", "61 9812-0898")

# executando a chamada do comando SQL
cursor.execute(sql, val)

# efetivando as operacoes no banco de dados
conexao.commit()

print("Comando OK")
print(cursor.rowcount, "foram salvos.")
