<!DOCTYPE html>
<html lang="pt-BR">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale1.0">
       <title>Cadastro de cliente</title>
       <link rel="stylesheet" href="/css?cascata.css">

</head>

<body>
       <h1 id="aqui_temos_o_id_do_titulo" class="classe_do_h1"> Cadastro de cliente </h1>
       <hr>
       <form name="form" id="form">
              <label for="nome">nome </label>
              <br>
              <input type="text" id="nome" placeholder="Digite seu nome" resquired />
              <br>
              <br>

              <label for="sobre_nome">sobre completo </label>
              <br>
              <input type="text" id="sobre_nome" placeholder="sobre comleto" resquired />
              <br>
              <br>

              <label for="cpf">CPF </label>
              <br>
              <input type="text" id="cpf" placeholder="Digite seu CPF" resquired />
              <br>
              <br>

              <label for="rg">RG </label>
              <br>
              <input type="text" id="rg" placeholder="Digite seu RG" resquired />
              <br>
              <br>

              <label for="Data da nascimento">Data de nascimento</label>
              <br>
              <input type="date" id="data da nascimento" name="Data de nascimento" placeholder="Digite sua data de nascimento" resquired />
              <br>
              <br>

              <label for="nome do pai">Nome do pai </label>
              <br>
              <input type="text" id="nome do pai" placeholder="Digite seu pai" resquired />
              <br>
              <br>

              <label for="nome da mãe">Nome da mãe </label>
              <br>
              <input type="text" id="nome da mãe" placeholder="Digite seu mãe" resquired />
              <br>
              <br>

              <label for="renda mensal">Renda mensal </label>
              <br>
              <input type="text" id="renda Mensal" placeholder="Digite sua renda mensal" resquired />
              <br>
              <br>

              <label for="estado civil">Estado civil </label>
              <br>
              <input type="text" id="wstado civil" placeholder="Digite seu estado civil" resquired />
              <br>
              <br>

              <label for="cep">CEP </label>
              <br>
              <input type="text" id="cep" placeholder="Digite seu CEP" resquired />
              <br>
              <br>

              <label for="logradouro">Logradouro </label>
              <br>
              <input type="text" id="logradouro" placeholder="Logradouro" resquired />
              <br>
              <br>

              <label for="número da residencia">Número da residencia </label>
              <br>
              <input type="text" id="número da residencia" placeholder="Número da residencia" resquired />
              <br>
              <br>

              <label for="bairro">Bairro </label>
              <br>
              <input type="text" id="bairro" placeholder="Bairro" resquired />
              <br>
              <br>

              <label for="cidade">Cidade </label>
              <br>
              <input type="text" id="cidade" placeholder="Cidade" resquired />
              <br>
              <br>

              <label for="UF SELECT">UF SELECT </label>
              <br>
              <input type="text" id="UF SELECT" placeholder="UF SELECT" resquired />
              <br>
              <br>

              <label for="bais SELECT">Pais SELECT </label>
              <br>
              <input type="text" id="nome" placeholder="Pais SELECT" resquired />
              <br>
              <br>

              <label for="IBGE">IBGE </label>
              <br>
              <input type="text" id="IBGE" placeholder="IBGE" resquired />
              <br>
              <br>
              <label for="uf">Estado da completo</label>
              <select id="uf" name="uf" required>
                     <option value="">Selecione um estado brasileiro</option>
                     <option value="RO">Rôndonia</option>
                     <option value="AM">Amazonas</option>
                     <option value="AC">Acre</option>
                     <option value="AL">Alagoas</option>
                     <option value="AP">Amapá</option>
                     <option value="BA">Bahia</option>
                     <option value="CE">Ceará</option>
                     <option value="DF">Distrito Federal</option>
                     <option value="ES">Espírito Sabto</option>
                     <option value="GO">Goiás</option>
                     <option value="MA">Maranhão</option>
                     <option value="MT">Mato Grosso</option>
                     <option value="MS">Mato Grosso do Sul</option>
                     <option value="MG">Minas Gerais</option>
                     <option value="PA">Pará</option>
                     <option value="PB">Paraíba</option>
                     <option value="PR">Paraná</option>
                     <option value="PE">Pernambuco</option>
                     <option value="PI">Piaú</option>
                     <option value="RJ">Rio de janeiro</option>
                     <option value="RN">Rio GRande do Norte</option>
                     <option value="RS">Rio Grande do Sul</option>
                     <option value="RR">Roraima</option>
                     <option value="SC">Santa Catarina</option>
                     <option value="SP">São Paulo</option>
                     <option value="SE">Sergipe</option>
                     <option value="TO">Tocantins</option>


              </select>
              <br>
              <button type="submit"> Salvar</script>
       </form>
       <script src="/js/index.js"></script>
</body>

</html>