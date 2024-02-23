import mysql.connector as mysql

conexao = mysql.connect(
    host = "127.0.0.1", user = "root"
    password = "",
    database = "dbpython"
)

cursor = conexao.cursor()

sql = "select * from contatos order by nome"

cursor.execute(sql)

dados = cursor.fetchall()

for contato in dados:
    
    print(contato)