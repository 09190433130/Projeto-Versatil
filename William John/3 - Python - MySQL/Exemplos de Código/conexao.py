import mysql.connector as mysql

try:
    conexao = mysql.connect(
        host = "127.0.0.1",
        user = "root",
        password = "",
        database = "pythondbcrud"
    )
    print("Objeto: ", conexao)
    print("Classe do objeto: ", type(conexao))

except mysql.Error as e:
    # capturando possiveis erros de conexao ou SQL com TRY CATCH
    print(e.msg)

