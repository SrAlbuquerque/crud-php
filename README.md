# OBSERVAÇÕES:

- **Nome das colunas da tabela produto:** idproduto(int), nome(varchar), categoria(varchar), preco(double).

- **Endpoint AWS:** database-1.cegsjvmeg9bl.us-east-2.rds.amazonaws.com

- **User AWS:** admin

- **Password AWS:** twjrjyAxc

- **DB AWS:** test

## Mudar de DB

1. Vá para o arquivo **dbconfig.php** que está dentro da pasta **config**.

2. Na função **db_connection()** terá 4 variáveis: host, user, password e db.

3. Basta mudar o valor delas para o valor do banco de dados que irá se conectar.

4. Lembrando que criei uma tabela no meu banco de dados com o nome de **produto**, então nas querys que são feitas no código, será com o nome de **produto**. Será necessário a criação da tabela com mesmo nome.
