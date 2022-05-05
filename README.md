<h2>Documentação do Projeto Inteiro</h2>
Um editor de arquivo dinâmico !!!<br/>
O propósito desse projeto é fazer uma alteração em tempo real de um arquivo interno sem precisar editar ele pela
a IDE ou bloco de notas,basta editar ele pelo o navegador facíl e simples!

Para começar é necessario pegar todos os arquivos dentro de uma pasta utilizando a função nativa do php que é 
<b>"<a target="_blank" href="https://www.php.net/manual/en/function.scandir.php">scandir()</a>"</b> é só passa o nome da pasta como parâmetro para pode pegar todos os arquivos que permanecem
dentro da pasta escolhida!!

depois só colocar a função com o parâmetro da pasta dentro de uma variavel para podem fazer um loop com o <b><a target="_blank" href="https://www.php.net/manual/en/control-structures.for.php">for()</a></b>
com a variavel usando a função <b><a target="_blank" hre="https://www.php.net/manual/en/function.count.php">count()</a></b> , E dentro do loop fazer separação de todos os arquivos para pegar a extenção.
para fazer a separação do arquivo é utilizando a função <b><a target="_blank" href="https://www.php.net/manual/en/function.explode.php">explode()</a></b>.
e com isso é só passa como parâmetro o <b>".",</b> e a variável atribuida antes. com tudo isso é só encapsula todo esse valor dentro de 
uma nova variavel no caso do meu código eu coloquei o nome da variável como <b>$file_extension</b>.
depois que declara a variável é só fazer uma condição no <b><a target="_blank" href="https://www.php.net/manual/en/control-structures.if.php">if()</a></b> os valores da condição passado é <b>"$file_extension[1] == 'php'"</b> também pode
colocar <b>"@"</b> para esconder qualquer error que apareçar.

![editar](https://user-images.githubusercontent.com/89558456/167020868-bb361c87-ef8b-4b2a-8cfc-4bfdae6e1f51.png)

Dentro do loop passe uma tag (<b><a target="_blank" href="https://www.w3schools.com/tags/tag_a.asp" >a</a></b>) valor do texto da tag vai ser a primaira variável que foi declarada no começo da documentação e também passa 
o índice da variável "<b>$i</b>" que é decrarada como é criada o função "<b>for()</b>".já no href da tag é nessesaria passa uma query url com o mesmo
valor do texto!

e depois tem que fazer mais uma função para verificar se existe a query no url do para isso é nessesario utilizar a super variável "<b><a target="_blank" href="https://www.php.net/manual/en/reserved.variables.get.php">$_GET[]</a></b>" para pegar a query
url e a função "<b><a target="_blank" href="https://www.php.net/manual/en/function.isset.php">isset()</a></b>" para verificar se existe a query!!
depois só fazer um formulário com o textarea que como valor vai ser necessário pegar o arquivo da pasta.então vai ter que utilizar mais uma função especial,
a função é a <b><a target="_blank" href="https://www.php.net/manual/en/function.file-get-contents.php">get_file_contents()</a></b> o parâmetro vai ser o nome da pasta passa como concatenação a query como valor.
e também um input com tipo hidden com o mesmo valor textarea mais sem a função,e por ultimo o input type submit!!

![editar2](https://user-images.githubusercontent.com/89558456/167025096-1bcab6e7-5d6e-4c65-a6fb-1f00978fd666.png)

E agora para editar vai ser pela requisição ajax utilizando a biblioteca <a target="_blank" href="https://jquery.com/">jquery</a> para o código ficar mais pequeno e facíl de escrever.
o método vai ser assim quando clicar no submit vai ser necessario usar uma função "<b><a target="_blank" href="https://api.jquery.com/click/">click()</a></b>" do jquery e depois guardar os valores do formulário
usando o id em cada (input,textarea) para ser o valor das duas variáveis, e depois usar a função do "<b>$.jax()</b>".

o método da requisição vai ser post ,a url vai ser um arquivo interno que no caso do meu código o nome do arquivo é "<b><a target="_blank" href="https://github.com/Gabs1405dragon/Editor_de_arquivo/blob/main/ajax.php">ajax.php</b></a>" e por utimo passa os valores do 
input e textarea pelo data. 

E agora para terminar é só repecuperar os valores pelo o backend usando a função  <b><a target="_blank" href="https://www.php.net/manual/en/function.file-put-contents.php">file_put_contents()</a></b> 
e passar as duas variáveis como parâmetro na função para fazer a alteração no arquivo.





