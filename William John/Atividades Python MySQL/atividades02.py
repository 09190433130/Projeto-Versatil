import mysql.connector as mysql

try:
    conexao = mysql.connect(
        host = "127.0.0.1", 
        user = "root",
        password = "",
        database = "dbpython"
    )
    print("objeto: ", conexao)
    print("classe do objeto:", type(conexao))
    
except mysql.error as e:
    print(e.msg)