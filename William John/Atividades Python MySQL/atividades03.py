import mysql.connector as mysql

nome = input("Informe o nome: ")
email = input("Informe o email: ")
telefone = input("Informe o telefone: ")

try:
    print("\nAbrindo conexão com banco...")
    
    conexao = mysql.connect(
        host = "127.0.0.1", user = "root",
        password = "",
        database = "dbpython"
    )

    print("Conexão ralizada com sucesso.")
    print("Salvando no banco de dados...")
    
    cursor = conexao.cursor()
    
    sql = "insert into contatos(nome, email, telefone) values (%s, %s, %s)"
    vals = (nome, email, telefone)
    
    cursor.execute(sql, vals)
    
    conexao.commit()
    
    print("Salvo com sucesso.")
    
except mysql.error as e:
    print("Ocorreu um erro:", e.msg)    