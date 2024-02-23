import mysql.connector as mysql

# abrindo conexao
conexao = mysql.connect(host="127.0.0.1", username="root", password="", database="pythondbcrud")

# abrindo um CURSOR -> uma chamada para um comando SQL
cursor = conexao.cursor()

sql = "INSERT INTO contatos(nome, email, telefone) VALUES (%s, %s, %s)"

val = [
    ("Maria do Carmo", "maria@mail.com", "62 99214-2184"),
    ("João da Silva", "joao@mail.com", "61 91240-8127"),
    ("Adriana de Souza", "adriana@mail.com", "61 81058-1012"),
    ("Kelly Silva", "kelly@mail.com", "82 84801-9807")
]

# executando a chamada de um comando SQL de várias atualizações
cursor.executemany(sql, val)

# efetivando as operacoes no banco de dados
conexao.commit()

print("Comando OK")
print(cursor.rowcount, "foram salvos.")
