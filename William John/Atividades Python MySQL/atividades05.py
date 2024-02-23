import mysql.connector as mysql

id = input("Digite o id do contato: ")

conexao = mysql.connect(
    host = "127.0.0.1", user = "root",
    password = "",
    database = "dbpython"
)

cursor = conexao.cursor()

sql = "select * from contatos order by nome where id = %s"
val = (id, )

cursor.execute(sql, val)

dados = cursor.fetchone()
print(dados)