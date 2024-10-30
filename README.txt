Nuno Gonçalves
Curso Web, CodeMaster, 2023

===== PROJECTO FINAL ======
= WEBSITE Sebastião Alves =

===== UPDATE 16 DE MAIO 2023 =====

# Projecto final

# Backoffice
endereço: sebastiaoalves/admin
Conta de acesso: admin@admin.pt / admin
Procurou-se, na medida do possível, criar um design um pouco melhor recorrendo ao bootstrap.

## Página "Admin" (acesso pelo botão ao lado de "LOG-OUT" com o nome do utilizador)
Pode alterar os dados de acesso, inlcuindo password, nome e email (usado como login).
É apresentado um resumo do log para esse utilizador.
O log é composto por duas secções:
1. Sessões, onde se apresentam os registos de log-in e log-out.
2. Alterações sucessivas nas páginas
Inclui o apagar registos para maior controlo.

Possibilitará, com facilidade, a implementação de um "super-user" que possa verificar todos os logs de todos os utilizadores.
Achámos desnecessário implementar essa funcionalidade nesta fase do projecto, pois ia muito para além do pedido e sem que traga
qualquer benefício.

## Gestor de Ficheiros
Integrou-se o gestor de ficheiros como página do backoffice, além do popup em caso de pressionar o botão respectivo junto aos links das imagens.

## Restantes páginas auto-explicativas

# Front-End
Foram adicionadas as funcionalidades JavaScript, em particular:
1. "Ver mais" para a página "Autor"
2. Abertura do menu LIVROS a partir do menu no footer
3. scroll para a div "Título" de todas as páginas, menos para a index. Esta, no console, retornará um erro porque não possui a respectiva div.
4. a alteração do botão do menu em mobile para o fechar, já havia sido conseguida com recurso ao CSS e, uma vez que alcança o mesmo objectivo
não fizémos qualquer alteração.



===== UPDATE 17 de Abril 2023 =====

# Foram adicionados novos selectores ao css para as novas páginas, usando o mesmo princípio descrito.
#
# Ao contrário do que foi feito até aqui, seguindo as instruções, nomeadamente o que diz respeito ao tipo de
# fontes, seus nomes e pesos, passei a ignorar a memória descritiva dos designers, dando total prevalência 
# aos prints, excepto para alguns detalhes.
#
# Foi corrigido o posicionamento do footer, passando a estar mais próximo dos prints.
#
# Foi corrigido o dropdown do menu LIVROS.


===== PRIMEIRA VERSÃO =====

data: 4 Abril 2023
fase: Home Page, Desktop


=== MEMÓRIA DESCRITIVA ===
É objectivo deste ficheiro ter um conjunto de notas que visam facilitar a compreensão das opções tomadas na
construção do código. Serve também, por outro lado, para ajudar qualquer outro programador a quem seja entregue
alguma actualização ou correcção necessária.
Tal como o Projecto Final, que será entregue aos poucos, também este ficheiro se irá actualizando.
No cabeçalho encontra-se a data e a fase do projecto.


CSS
Site totalmente baseado em Bootstrap, v. 5.3, importado para o servidor.
ficheiro: css/bootstrap.css

Sempre que possível e de acordo com as especificações dadas, procurou-se recorrer ao Bootstrap.
Quando tal não foi possível, recorreu-se à personalização do CSS.

Ficheiro de estilos personalizados
css/style.css

Dado que o CSS é um tipo de código muito difícil de manter, cuja estruturação pode diferir bastante,
de projecto para projecto e de programador para programador, utilizaram-se os seguintes critérios para este projecto:

1. Dada a multiplicidade de especifididades dadas pelo design (por exemplo, contabilizaram-se 8 tamanhos de fonte 
    diferentes), optou-se por especificar cada uma das secções e os respectivos selectores, em vez de usar selectores gerais, 
    como mandam as melhores práticas de manutenção de código.
2. Procurou-se, mesmo assim, ter selectores mais genéricos (por exemplo p{} .title_text{}, 
    more-button{}, etc.). 
    Esses estão numa secção denominada /* COMUNS */ logo no início do ficheiro.
3. Evitou-se a utilização dos mesmos selectores usados pelo bootstrap. Quando tal não foi possível ou adequado, existe
    a indicação "SOBREPÕE [...]" em forma de comentário, antes do selector.
3. As medidas em px foram convertidas para rem, partindo do seu valor por defeito (16px). Desta forma, o website 
    fica melhor preparado para actualizações futuras, em particular no que diz respeito às preocupações crescentes 
    com o design de websites para serem capazes de responder aos desafios de utilizadores com algum tipo de patologia
    ou deficiência. A medida em rem permite, desde logo, que as proporções (margens interiores e exteriores, tamanhos 
    de imagens, etc.), se mantenham ajustadas, caso um utilizador altere este valor nos seus dispositivos por necessidade.
4. Também no que diz respeito às fontes, foram importadas as fontes indicadas na memória descritiva nos pesos indicados.
    Quer dizer que, para a indicação, por exemplo, IBM Plex Sans Bold, usou-se a respectiva família desenhada pelo
    criador da fonte e disponível para download.
    As fontes foram convertidas para formato web através da ferramenta gratuita online disponível para o efeito em 
    Font Squirrel (https://www.fontsquirrel.com).
5. Variáveis.
    Foram criadas variáveis no início do ficheiro style.css para as cores e para as sombras. Deste modo, facilmente se 
    altera cada um desses parâmetros.
    No caso da sombra, o recurso à variável permite que se mantenha o design coerente por todo o website.
