INSERT INTO categoria (Categoria)
VALUES
('Ação'),
('Aventura'),
('Comédia'),
('Drama'),
('Romance'),
('Fantasia'),
('Suspense'),
('Terror');


INSERT INTO estrelas (ID_STAR, AVALIACAO)
VALUES
(1,'Muito Ruim'),
(2,'Ruim'),
(3,'Ok'),
(4,'Bom'),
(5,'Muito Bom');

INSERT INTO obras(Nome, Lancamento, Autor, ID_CATEGORIA, Sinopse, ID_STAR, Foto, Tipo)
VALUES
('Chainsaw Man', '2022-10-12', 'Tatsuki Fujimoto', 1, 'Denji tem um sonho simples: viver uma vida feliz e pacífica, passando um tempo com uma garota de quem ele goste. Porém, isso está muito longe da realidade, já que Denji é forçado pela yakuza a matar demônios para pagar suas dívidas astronômicas. Usando seu demônio de estimação, Pochita, como arma, ele está pronto para fazer qualquer coisa por um pouco de dinheiro. Infelizmente, ele é assassinado por um demônio contratado pela yakuza. No entanto, em uma virada inesperada nos acontecimentos, Pochita se funde com o cadáver de Denji e concede a ele os poderes de uma serra elétrica. Agora capaz de transformar partes de seu corpo em motosserras, um Denji revivido, usa suas novas habilidades para acabar com os seus inimigos de maneira rápida e brutal.', 5, 'elementos/chainsaw.webp', 1),
('Spy × Family', '2022-9-4','Tatsuya Endo', 1, 'Não acostumado a depender de outras pessoas, Twilight arruma uma mulher e uma criança para sua missão de se infiltrar em uma escola particular de elite. Mas o que ele não sabe é que a mulher que ele escolheu é uma assassina e a criança que ele adotou é uma telepata', 5, 'elementos/spy.jpe', 1),
('Attack on Titan', '2013-7-4', 'Hajime Isayama', 1 , 'Para escapar dos titãs, gigantes devoradores de homens, a humanidade se refugiou em cidades cercadas por enormes muralhas. Quando eles voltam a atacar, Eren Yeager se junta à luta para combater as criaturas.', 5, 'elementos/attack.webp', 1),
('RE:ZERO', '2016-6-4', 'Tappei Nagatsuki', 1, 'Re:Zero conta a história de Subaru Natsuki, um NEET que não faz nada além de jogar. Quando ele e "Satella" são misteriosamente mortos, Subaru acorda e descobre que adquiriu a habilidade que chama de "Retorno pela Morte", permitindo-lhe reverter o tempo ao morrer.', 4, 'elementos/re.jpe', 1),
('Mahou Tsukai No Yome', '2022-10-7', 'Kore Yamazaki', 6, 'Elias Ainsworth, um mago misterioso, aparece para Chise e oferece a ela a chance de ser sua aprendiz em um mundo de fadas e dragões. Antes que Chise se acostume com essa ideia, ela descobre que seu destino é ser mais do que a aprendiz de Elias, mas sim ser sua noiva.', 4, 'elementos/mahou.jpe', 1),
('Bleach', '2004-10-5', ' Tite Kubo', 1, 'O jovem Ichigo é surpreendido com indesejadas habilidades de ceifeiro de almas e quer devolver os poderes. Mas deve executar algumas tarefas antes.', 3, 'elementos/bleach.jpg', 1),
('Fairy Tail', '2006-2-8', 'Hiro Mashima', 1, 'Quando quatro jovens feiticeiros se juntam e trabalham um pouco por todo o reino, criam um elo mais poderoso do que qualquer magia e ficam mais fortes a cada missão.', 4, 'elementos/fairy.jpe', 1),
('Toradora', '2008-2-10', 'Yuyuko Takemiya', 4, 'Taiga e Ryuji são jovens que buscam aventuras românticas enquanto aproveitam sua adolescência e a empolgação de descobrir coisas novas. Ambos precisam lidar com os obstáculos do coração e tomar coragem para perseguir seus desejos ocultos.', 4, 'elementos/toradora.jpe', 1),
('Miss Kobayashi', '2012-12-1', 'Coolkyousinnjya', 3, 'Kobayashi é uma trabalhadora de escritório com uma vida simples. Ela mora em um pequeno apartamento sozinha, até salvar a vida de um dragão chamado Tohru com a capacidade de se transformar em uma adorável garota humana.', 4, 'elementos/miss.jpe', 1),
('You', '2018-9-9', 'Greg Berlanti', 7, 'A história acompanha Joe, um gerente de livrarias que conhece uma aspirante a escritora e usa a internet e as mídias sociais como ferramentas para reunir as informações pessoais para se aproximar dela e também para fazer a mulher dos seus sonhos se apaixonar por ele.', 4, 'elementos/you.jpg', 2),
('The Boys', '2019-26-7', 'Eric Kripke', 4, 'Em um mundo onde os super-heróis são tão populares que chegam até mesmo a ser tratados como verdadeiras celebridades, um grupo deles, chamado Os Sete, da poderosa corporação Vought International, usam de seu status e começam a abusar de seus poderes.', 5, 'elementos/boys.jpeg', 2),
('The Walking Dead', '2010-31-10', 'Frank Darabont', 8, 'Baseada em uma HQ, The Walking Dead conta a história de um grupo de sobreviventes, liderados pelo xerife Rick Grimes , após um apocalipse zumbi. Toda a população da Terra é infectada por um vírus misterioso que transforma os mortos em zumbis.', 5, 'elementos/walking.jpg', 2),
('O Mundo Sombrio de Sabrina', '2016-26-10', 'Roberto Aguirre-Sacasa', 4, 'Sabrina Spellman luta com sua natureza dupla - metade bruxa, metade mortal - enquanto se levanta contra as forças do mal que a ameaçam, sua família e o mundo humano.', 4, 'elementos/sabrina.jpg', 2),
('Stranger Things', '2016-15-7',  'Matt Duffer', 8, 'Passada na década de 1980, na cidade fictícia de Hawkings, Stranger Things conta a história de um garoto que desaparece misteriosamente e dos eventos paranormais que se passam em torno desse acontecimento.', 4, 'elementos/things.jpg', 2),
('Anne with an E', '2019-19-3', 'Moira Walley-Beckett', 5, 'A história acompanha a vida de Anne Shirley, uma jovem órfã que, após uma infância de abusos entre orfanatos e casas de estranhos, é enviada por engano para viver com um casal de irmãos em idade avançada.', 4, 'elementos/anne.jpg', 2),
('Breaking Bad', '2008-20-1', ' Vince Gilligan', 4, 'Um professor do secundário com cancro do pulmão terminal junta-se a um ex-aluno para fabricar e vender metanfetaminas como forma de garantir o futuro da sua família. ', 5, 'elementos/break.jpg', 2),
('O Gambito da Rainha', '2020-23-10', 'Scott Frank', 4, 'Em um orfanato nos anos 1950, uma garota-prodígio do xadrez luta contra o vício em uma jornada improvável para se tornar a número 1 do mundo.', 4, 'elementos/gambito.webp', 2),
('Kyoukai No Kanata', '2013-2-10', 'Nagomu Torii', 1, 'Kyoukai no Kanata conta a história de um garoto chamado Akihito Kanbara, que na verdade é meio humano e meio “Youmu”, uma criatura que consegue se curar rapidamente de feridas e machucados. Em um novo ano letivo, Akihito conhece Mirai Kuriyama, uma garota que tenta se suicidar pulando do telhado do colégio.', 5, 'elementos/kyoukai.jpg', 1),
('Delete', '2023-28-6', ' Parkpoom Wongpoom', 4, 'Um homem e uma mulher que vivem um caso extraconjugal planejam uma nova vida juntos após descobrirem um telefone com o poder de fazer as pessoas sumirem da face da Terra.', 4, 'elementos/delete.jpg', 2),
('Invasão Secreta', '2023-26-7', 'Brian Michael Bendis', 1, 'Após eventos recentes no Universo Marvel, o agente especial Nick Fury está desaparecido, mas poucos sabem seu verdadeiro paradeiro e identidade.', 4, 'elementos/invasao.jpg', 2),
('Loki', '2021-9-6',  'Michael Waldron', 1, 'O spin-off segue os passos de Loki , mais conhecido como Deus da Trapaça, que conseguiu roubar o tesserato dos Vingadores durante a missão de recuperar as Joias do Infinito. Com o poder da gema do espaço, o Asgardiano começa a pular no tempo com a intenção de chegar a Midgard.', 4, 'elementos/loki.jpg', 2),
('Obi-Wan Kenobi', '2022-27-5', 'John Williams', 1, ' a série acompanha as aventuras de Obi-Wan Kenobi (Ewan McGregor), uma década depois dos acontecimentos de A Vingança dos Sith. A trama começa com Obi-Wan cuidando de Luke Skywalker à distância no planeta Tatooine enquanto vive exilado no planeta.', 4, 'elementos/obi-wan.jpg', 2),
('bleach: thousand-year blood war', '2022-11-10', 'Tite Kubo', 1, 'Ichigo Kurosaki ganhou os poderes de um Soul Reaper através de um encontro casual. Como um substituto de um Soul Reaper, Ichigo foi pego na turbulência do Soul Society, um lugar onde as almas mortas se reúnem. Mas com a ajuda de seus amigos, Ichigo superou todos os desafios para se tornar ainda mais forte', 4, 'elementos/bleach.jpg', 1),
('One piece A Serie', '2023-31-8', 'Eiichiro Oda', 2, 'A produção em live-action segue o pirata Monkey D. Luffy e sua tripulação em busca do tesouro conhecido como One Piece, enquanto navegam por oceanos perigosos e enfrentam adversários.', 5, 'elementos/onepiece_serie.jpg', 2),
('One Piece', '1999-20-10', 'Eiichiro Oda', 2, 'A trama segue Luffy, um jovem com o corpo elástico que sonha em criar sua própria tripulação e partir em uma aventura para se tornar o próximo Rei dos Piratas.', 5, 'elementos/onepiece.jpg', 1),
('Tengoku Daimakyou', '2023-1-4', 'Makoto Fukami', 2, 'Dentro da segurança das paredes, os jovens são criados num ambiente de berçário por robôs. Embora a vida possa parecer obsoleta na superfície, as crianças estão cheias de potencial e curiosidade.', 4, 'elementos/tengoku.jpg', 1),
('Criminal Minds', '2005-22-9', 'Jeff Davis', 7, 'A história acompanha um grupo de elite Unidade de Análise Comportamental do FBI, que analisa perfis dos assassinos em série mais perigosos do país e crimes hediondos individuais, em um esforço para antecipar seus próximos movimentos antes de atacar novamente.', 4, 'elementos/criminal_minds.jpg', 2),
('Demon Slayer', '2019-6-4', 'Koyoharu Gotōge', 1, 'Dois meninos embarcam em um trem com a missão de derrotar um demônio que tem atormentado as pessoas.', 5, 'elementos/demonslayer.jpg', 1),
('Greys Anatomy', '2005-27-3', 'Shonda Rhimes', 4, 'A série foca na vida de médicos cirurgiões internos, residentes e atendentes; e como eles evoluem na sua profissão ao tentar manter a vida dos seus pacientes e nos seus relacionamentos pessoais.', 4, 'elementos/greys.jpg', 2),
('Scissor-Seven', '2018-25-4', 'He Xiaofeng', 1, 'Seven é um jovem muito atrapalhado e possui a habilidade de controlar uma tesoura através de telecinese. Ele tenta utilizar de diversos métodos de assassinato para executar sua missão, mas sempre falha miseravelmente. Ou por perder em suas lutas, ou por criar certa empatia por suas vítimas.', 5, 'elementos/scissor.jpg', 1),
('Jujutso Kaisen', '2020-3-10', 'Gege Akutami', 2, 'A história de Jujutsu Kaisen se passa em um universo em que a concentração de sentimentos negativos dá origem a Maldições monstros perigosos, que pessoas comuns não conseguem enxergar. Nesse contexto, Itadori Yuji é um garoto que vive com seu avô e possui capacidade física além do normal.', 4, 'elementos/jujutsu.png', 1),
('Peaky Blinders', '2013-12-9', 'Steven Knight', 4, 'Em 1919, um infame gangue de Birmingham é liderado pelo cruel Tommy Shelby, um patrão do crime determinado a conquistar o mundo a qualquer preço.', 4, 'elementos/peaky.jpg', 2)