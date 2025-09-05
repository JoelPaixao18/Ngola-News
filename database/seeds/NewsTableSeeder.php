<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('news')->delete();

        DB::table('news')->insert(array(
            0 =>
            array(
                'id' => 1,
                'image' => '902aa384fac8b53519862ea5887465b9.jpg',
                'title' => 'Afrobasket e 50 anos da Independência impulsionam turismo em Angola',
                'slug' => 'afrobasket-e-50-anos-da-independencia-impulsionam-turismo-em-angola',
                'subtitle' => 'Angola recebeu 26.414 turistas, no período entre 15 e 17 de Agosto de 2025, resultado directo do impacto do Campeonato Africano de Basquetebol (AfroBasket 2025) e das comemorações dos 50 anos da Independência.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>De acordo com uma nota do Ministério do Turismo consultada pelo JA Online, as províncias do Namibe e do Cuanza-Sul registaram 100% de ocupação hoteleira, seguidas por Moxico e Huíla, com taxas acima de 90%. No total, a taxa média de ocupação foi de 69,3% nos hotéis e 68,8% noutros tipos de alojamento.&nbsp;&nbsp;</p><p>Por exemplo, a província do Namibe, que acolheu os jogos da fase de grupos do Afrobasket entre 13 e 17 de Agosto, passaram 7.670 turistas, dos quais 2.970 estrangeiros oriundos da África do Sul, Namíbia, Reino Unido e países participantes do torneio, como Sudão do Sul, Líbia, Cabo Verde, Congo, Rwanda, Mali, Senegal e Eritreia.</p><p>&nbsp;&nbsp;</p><p>Cerca de 4.700 visitantes nacionais viajaram de províncias como Huíla, Cunene, Benguela, Luanda e Huambo para apoiar a Selecção nacional e conhecer os pontos turísticos locais.</p><p>&nbsp;</p><p style="margin-left:auto;"><strong>Locais mais visitados</strong></p><p style="margin-left:auto;">Entre os locais mais procurados estiveram as Colinas do Curoca, Lagoa do Arco, Dunas do Deserto, Praia do
Soba, Piscinas Naturais do Piambo, a Welwitschia Mirabilis e a Foz do Rio Cunene.</p><p style="margin-left:auto;">O documento refere que o
sector do turismo arrecadou cerca de 210 milhões de kwanzas no período, impulsionado pela procura em hotelaria, restauração, agências de viagens, serviços de guias, transportes e rent-a-car.</p><p style="margin-left:auto;">Além do impacto económico, o Afrobasket proporcionou ao Namibe ampla exposição mediática e fomentou a criação de novos postos de trabalho, sobretudo para jovens, reforçando a imagem da província como um destino turístico de excelência no sul de Angola.</p><figure class="image" style="height:auto;"><img src="https://www.jornaldeangola.ao/" alt=""></figure>',
                'date' => '2025-08-27',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:35:46',
                'updated_at' => '2025-08-27 08:35:46',
            ),
            1 =>
            array(
                'id' => 2,
                'image' => 'a1a1cbffabb864d0c0c675381463b010.jpg',
                'title' => '“Vocês são o modelo a seguir. Os nossos jovens e as crianças inspiram-se nos vossos feitos”',
                'slug' => 'voces-sao-o-modelo-a-seguir-os-nossos-jovens-e-as-criancas-inspiram-se-nos-vossos-feitos',
                'subtitle' => 'O Presidente da República considerou, terça-feira, os campeões africanos em basquetebol o orgulho do país neste ano de celebração dos 50 anos da Independência Nacional.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>João Lourenço teceu o elogio durante a cerimónia de recepção dos campeões africanos no Palácio Presidencial, em Luanda, ocasião durante a qual os atletas ofereceram ao casal presidencial duas camisolas e uma bola com as suas assinaturas.</p><p>“O povo angolano estava a precisar desta vitória, deste título, que não é mais um título. É aquele título que vem quebrar o jejum de mais de 10 anos, em que Angola, não obstante ter no seu palmarés 11 vitórias, ficamos este interregno sem conquistar o Campeonato Africano de
Basquetebol”, destacou o Chefe de Estado.</p><p>Para o Presidente da República, com este feito, os atletas participantes nesta épica conquista passam a ser modelo de inspiração para os jovens angolanos. “Vocês são o modelo a seguir. Os nossos jovens e as crianças inspiram-se nos vossos feitos e todos querem ser campeões”, ressaltou.</p><p>Com vista a manter a hegemonia do país no basquetebol e em outras modalidades, em África, João Lourenço reiterou que o Executivo vai continuar a apostar em infra-estruturas desportivas, de modo a massificar a prática do desporto no país, em particular do basquetebol.</p><p>Essa aposta, reiterou o Chefe de Estado, vai passar, entre outras soluções, pela construção de mais quadras nas comunidades. “Creio que o ministro já terá anunciado a decisão do Executivo de construir, nos próximos dois anos, cerca de 12 pavilhões multiusos”, ressaltou o Presidente, referindo-se a Rui Falcão, titular da pasta da Juventude e Desportos.</p><p>“Precisamos de massificar ainda mais a prática do basquetebol e de outras modalidades, mas em particular desta, uma vez que está provado
que Angola tem um grande potencial ainda pela frente, e podemos ir muito mais longe em termos de basquetebol”, afirmou o Chefe de Estado.</p><p>O Presidente da República adiantou que a ideia é fazer com que haja um pavilhão multi-desportivo em todo o território nacional, para a prática do basquetebol e de todas as outras modalidades que utilizam este tipo de infra-estrutura, nomeadamente o andebol, o voleibol e o
futebol de salão.</p><p>“Creio que, com este investimento, quer em infra-estruturas, quer na formação dos nossos jovens, Angola pode vir a
se tornar numa grande potência desportiva”, vaticinou o Presidente, para quem é só uma questão de se acreditar em bons resultados.</p><p>O
Chefe de Estado destacou o facto de existirem outras modalidades no país que também se destacam pelas conquistas que conseguem, numa alusão ao andebol feminino, modalidades de luta, artes marciais mistas, natação e ginástica.</p><p>Gelson Lukeny, capitão da Selecção Nacional, considerou o encontro com o Presidente da República um momento importante para o grupo.”O Presidente agradeceu a nossa presença e voltou a manifestar alegria por termos concretizado o troféu que muita falta falta aos angolanos”, ressaltou Gelson Lukeny.</p><p>Uma das ausências neste encontro foi a do treinador Pep Clarós, por razões familiares, tal como justificou à imprensa o presidente da Federação Angolana de Basquetebol, Moniz Silva.&nbsp;</p>',
                'date' => '2025-08-27',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:39:05',
                'updated_at' => '2025-08-27 08:39:05',
            ),
            2 =>
            array(
                'id' => 3,
                'image' => '63089f535b3f10ca72af3fd40ca737c3.jpg',
                'title' => 'Monumento da Renascença Africana do Senegal acolhe eventos culturais de Angola',
                'slug' => 'monumento-da-renascenca-africana-do-senegal-acolhe-eventos-culturais-de-angola',
                'subtitle' => 'O Monumento da Renascença Africana, em Dakar, no Senegal, vai acolher, a partir de agora, eventos culturais
angolanos realizados naquele país da África Ocidental.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>A informação foi avançada no final de um encontro entre o embaixador de Angola no Senegal, Adão Pinto, e o administrador-geral do Monumento da Renascença Africana,&nbsp;Birame Diouf, refere uma nota, enviada ao JA Online.</p><p>No âmbito da
diplomacia cultural, o monumento passa a acolher exposições de arte de artistas angolanos, performances de grupos folclóricos e outras actividades conexas que fortaleçam a construção de pontes culturais no contexto da cooperação e intercâmbio entre os dois países.</p><p>O comunicado destaca, ainda, que o Monumento da Renascença Africana é uma estátua gigante de bronze,com 52 metros de altura, tendo no seu interior salas para visitas que retratam aspectos culturais do continente.</p><p>Considerada uma das maiores do mundo, o monumento recebe, mensalmente, mais de dez mil visitantes.</p><p>O espaço é, igualmente, considerado como um símbolo poderoso da unidade e resiliência do continente, funcionando como um elo de ligação cultural entre as nações africanas.</p>',
                'date' => '2025-08-27',
                'category_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:54:34',
                'updated_at' => '2025-08-27 08:54:34',
            ),
            3 =>
            array(
                'id' => 4,
                'image' => '1b6fe48924a3be76d020228b77fa8a9c.jpg',
                'title' => 'Pep Clarós deixa Selecção de Basquetebol após conquista do 12.° título',
                'slug' => 'pep-claros-deixa-seleccao-de-basquetebol-apos-conquista-do-12-titulo',
                'subtitle' => 'O técnico Pep Clarós terminou o vínculo contratual com a Federação Angolana (FAB) de Basquetebol e deixa de comandar os dodeca campeões africanos, dois dias após o fim do Afrobasket 2025.',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>Importa recordar que em Janeiro de 2025, a FAB havia confirmado a recondução de Pep Clarós ao comando
técnico da Selecção, noticiou a Rádio Nacional de Angola.</p><p>O técnico espanhol, de 58 anos, chegou a Angola em 2023 e foi reconduzido em Janeiro de 2025 para liderar a preparação da equipa rumo ao Afrobasket disputado no país. Sob o seu comando, Angola quebrou um jejum de dez anos sem títulos e voltou a erguer o troféu continental.</p>',
                'date' => '2025-08-27',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:57:14',
                'updated_at' => '2025-08-27 08:57:14',
            ),
            4 =>
            array(
                'id' => 5,
                'image' => '940f60efe69276b9d46aa0184a5f7c54.jpg',
                'title' => 'Angola aposta em tecnologia de ponta para reforçar segurança aérea',
                'slug' => 'angola-aposta-em-tecnologia-de-ponta-para-reforcar-seguranca-aerea',
                'subtitle' => 'Com a instalação de um sistema de radar de superfície de última geração, o novo Aeroporto Internacional Dr.
António Agostinho Neto dá mais um passo estratégico para se afirmar como hub de referência na aviação africana.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p style="margin-left:0px;">O Aeroporto Internacional Dr. António Agostinho Neto (AIAAN) está a reforçar a segurança e a eficiência operacional com a implementação de um sistema de radar de superfície de ponta. O investimento inscreve-se na visão de modernização tecnológica que visa coloca Angola na linha da frente da segurança operacional no continente.</p><p style="margin-left:0px;">O novo equipamento, integrado no Programa de Modernização dos Sistemas de Ajuda à Navegação Aérea “AGO20801” da Empresa Nacional de Navegação Aérea (ENNA-EP), permite a monitorização contínua de aeronaves e veículos nas áreas mais críticas do aeroporto, incluindo pistas, caminhos de circulação e zonas de estacionamento.</p><p style="margin-left:0px;">Essa capacidade é considerada vital para garantir a segurança operacional, independentemente das condições meteorológicas.</p><p style="margin-left:0px;">“Mesmo em situações de visibilidade extremamente reduzida, como nevoeiro intenso ou chuva forte, a tecnologia assegura a gestão eficaz do tráfego aéreo e terrestre, reafirmando o compromisso de Angola com a modernização da aviação civil”, refere a ENNA-EP, em comunicado.</p><p style="margin-left:0px;">Aliado a outras soluções inovadoras, como os sistemas ADS/WAM e a expansão da cobertura VHF, o radar eleva os padrões de vigilância e segurança da aviação angolana a níveis internacionais. “O avanço tecnológico coloca Angola entre os países líderes da aviação civil no continente africano”, destaca a
nota.</p><p style="margin-left:0px;">Ainda assim, a empresa sublinha que apenas o investimento contínuo em tecnologia e uma visão estratégica orientada para o futuro permitirão consolidar o país como referência regional.</p><p style="margin-left:0px;">A nova tecnologia de radar de superfície demonstra que, mesmo quando os olhos humanos não conseguem ver, a segurança de cada voo está garantida.</p>',
                'date' => '2025-08-27',
                'category_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:00:44',
                'updated_at' => '2025-08-27 09:00:44',
            ),
            5 =>
            array(
                'id' => 6,
                'image' => '07315330f1d0fc789987af606f9b1280.jpg',
                'title' => 'Vietnamita detida no Aeroporto 4 de Fevereiro com mais de 27 mil dólares',
                'slug' => 'vietnamita-detida-no-aeroporto-4-de-fevereiro-com-mais-de-27-mil-dolares',
                'subtitle' => 'Uma cidadã vietnamita foi detida, na segunda-feira, no Aeroporto Internacional 4 de Fevereiro, em Luanda, por tentar transportar ilegalmente para o exterior mais de 27 mil dólares, cujo valor não é permitido por lei.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>De acordo com a Polícia Nacional, a passageira, identificada como Trinh Thi Hanh, de 48 anos, foi interpelada durante o embarque no voo QR-1491 da Qatar Airways, com destino a Doha.</p><p>Durante uma operação conjunta entre a Polícia Fiscal Aduaneira e técnicos da Administração Geral Tributária (AGT), o dinheiro excedente foi encontrado escondido em fundos falsos de uma mochila e de uma mala de mão.</p><p>O caso enquadra-se no crime de fraude no transporte ou transferência de moeda para o exterior, punível com pena de prisão maior.</p><p>Após a detenção, a suspeita foi encaminhada ao estabelecimento prisional competente e será apresentada ao Ministério Público para o primeiro interrogatório judicial.</p>',
                'date' => '2025-08-27',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:13:29',
                'updated_at' => '2025-08-27 09:13:29',
            ),
            6 =>
            array(
                'id' => 7,
                'image' => '5f50cf807e0b170b17de91c1e7c40a18.jpg',
                'title' => 'Mobilização de mais membros satisfaz OMA',
                'slug' => 'mobilizacao-de-mais-membros-satisfaz-oma',
                'subtitle' => 'O recrutamento de novos membros para integrarem a OMA, na província do Cuando, satisfaz a organização política feminina do MPLA, revelou, terça-feira, no município de Mavinga, a secretária-geral adjunta, Maria Esperança dos Santos.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>A dirigente partidária, citada pela Angop, manifestou a satisfação em declarações à imprensa, no fim da Assembleia Piloto n.º 1 do Processo Orgânico, que reconduziu a coordenadora de base do bairro Vila-Alice, em Mavinga, Adelina Mulonga, e
mais três membros da direcção.</p><p>Em relação ao processo de eleição interna, Maria Esperança dos Santos considerou ter sido “um bom exercício democrático” e acredita que “a direcção eleita está em condições de continuar a conduzir, com êxito, os destinos da OMA na circunscrição”.</p><p>A secretária-geral adjunta da OMA admitiu, também, que as militantes em Mavin- ga estão comprometidas com a causa da organização, tendo adiantado que o processo de realização das assembleias ao nível das estruturas de base vai continuar no Cuando, nas próximas duas
semanas, pelo facto de ter iniciado tardiamente em relação às demais províncias.</p><p>Terminada esta fase, esclareceu Maria Esperança dos
Santos, dar-se-á início às assembleias constitutivas ao nível comunal, municipal e, em Novembro, a eleição das secretárias provinciais da OMA.</p><p>A agenda da secretária-geral adjunta da OMA reser- va, para o último dia de trabalho, em Mavinga, visitas a infra-estruturas de carácter social e económico em execução na capital da província do Cuando.</p>',
                'date' => '2025-08-27',
                'category_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:29:11',
                'updated_at' => '2025-08-27 09:29:11',
            ),
            7 =>
            array(
                'id' => 8,
                'image' => '309e8d78b1a878942b08784a3ce563cb.jpg',
                'title' => 'Delegação angolana participa na 75.ª Sessão do Comité Regional da OMS para África',
                'slug' => 'delegacao-angolana-participa-na-75a-sessao-do-comite-regional-da-oms-para-africa',
                'subtitle' => 'A ministra da Saúde, Sílvia Lutucuta, chefia uma delegação angolana que participa na 75.ª Sessão do Comité Regional da Organização Mundial da Saúde (OMS) para África, que decorre de 25 a 27 de Agosto, em Lusaka, capital da República da Zâmbia',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>O encontro reúne ministros da saúde africanos, líderes de agências multilaterais, representantes diplomáticos e parceiros estratégicos para avaliar progressos e definir estratégias de reforço dos sistemas de saúde pública na região.</p><p>Segundo uma nota de imprensa enviada ao Jornal de Angola Online, na cerimónia de abertura o Presidente da Zâmbia, Hakainde Hichilema, destacou a importância da cooperação entre Estados-Membros, com foco na vigilância epidemiológica, vacinação e resposta a surtos como cólera, MPOX e outras doenças infecciosas.</p><p>&nbsp;&nbsp;</p><p>O Chefe de Estado apelou, ainda, ao aumento das contribuições internas dos países africanos ao orçamento da OMS.</p><p>A participação angolana decorre num contexto em que o país, sob a liderança do Presidente da República
e da União Africana, João Lourenço, actual líder da União Africana, tem reforçado a importância da diplomacia da saúde.</p><p>Na 78.ª Assembleia Mundial da Saúde, Angola fez uma contribuição financeira voluntária à OMS, incentivando outros países a seguir o mesmo exemplo. Durante a sessão, Angola reafirmou o compromisso com o acesso universal à saúde, a inclusão, a sustentabilidade e a resiliência dos sistemas sanitários, alinhando-se à abordagem “Uma Só Saúde” e aos objectivos da segurança sanitária regional.</p><p>&nbsp;</p><p>Entre os presentes estão o Director-Geral da OMS, Tedros Adhanom Ghebreyesus, o novo Director Regional da OMS para África, Yakub Janabi, o Director-Geral do CDC África, Jean Kaseya, o Presidente da Comissão da União Africana, Mahamoud Ali Youssouf, e o Embaixador de Angola na Zâmbia, Albino Malungo.</p><p>O evento reforça a importância do diálogo político multilateral para soluções regionais sustentáveis face aos desafios de saúde pública em África.</p>',
                'date' => '2025-08-27',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:34:35',
                'updated_at' => '2025-08-27 09:34:35',
            ),
            8 =>
            array(
                'id' => 9,
                'image' => '69bf2cb804f036e09a0aace779a2d4d8.jpg',
                'title' => 'Moda angolana inspirada na Palanca Negra ganha destaque na Alemanha',
                'slug' => 'moda-angolana-inspirada-na-palanca-negra-ganha-destaque-na-alemanha',
                'subtitle' => 'A moda angolana esteve em alta esta semana, na cidade de Berlim, Alemanha, pelas mãos da Kabuiza Couture, que realizou um desfile naquele que é um cenário internacional.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>Na sua 1.ª edição a marca apresentou uma coleção de tecidos com designs próprios, inspirados na Palanca Negra Gigante, símbolo de elegância e identidade cultural de Angola, localizada no parque de Cangandala Província de Malange, utilizando materiais naturais e designs sofisticados, avança um comunicado de imprensa.</p><p>O evento contou com a presença de diplomatas, com destaque a embaixadora de Angola, na República Federal da Alemanha, a Maria Isabel Gomes Godinho de Resende Encoge e o embaixador de Moçambique na Alemanha o Elias Jaime Zimba, bem como altos funcionários das duas representações diplomáticas para além de empresários local e internacionais</p><p><strong>Desfile</strong></p><p>Desfilaram Modelos de várias nacionalidades reforçando o caráter cultural global e inclusivo da marca Kabuiza.</p><p>Segundo os CEOs, a missão da Kabuiza Couture é elevar a moda angolana ao nível do mundo, mostrando criatividade, autenticidade e inovação.</p><p>O evento contou com a colaboração da NIO House Deutschland, Edueni Academy, Eduini Acessoria, ABBB (ANGOLAN BUSINESS BEYOND BORDER), Michael Summer photos, e outros.</p>',
                'date' => '2025-08-27',
                'category_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:40:27',
                'updated_at' => '2025-08-27 09:40:27',
            ),
            9 =>
            array(
                'id' => 10,
                'image' => 'cd0440eae18d4ca252021f4c02653926.jpg',
                'title' => 'Primeiro-ministro guineense levado para hospital de Dakar',
                'slug' => 'primeiro-ministro-guineense-levado-para-hospital-de-dakar',
                'subtitle' => 'O Primeiro-Ministro da Guiné-Bissau, Braima Camará, foi transportado ontem de urgência para um hospital em Dakar, no Senegal, após desmaiar numa cerimónia no palácio presidencial de Bissau, avançou a agência de notícias France-Presse (AFP).',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>“No final da cerimónia, ele sentiu-se mal e desmaiou”, confirmou à AFP uma fonte próxima do gabinete do Primeiro-Ministro, explicando que o Chefe do Governo se encontrava de pé, juntamente com outros responsáveis guineenses, enquan- to o Presidente discursava, tendo desmaiado.</p><p>O Chefe do Governo foi, então, levado a bordo de um avião militar médico senegalês para Dakar, para
ser internado num hospital, acrescentou a mesma fonte.</p><p>Não foi feita qualquer declaração oficial pública sobre o assunto, noticia, ainda, a AFP. “O Primeiro-Ministro está fora de perigo; recebeu cuidados muito rápidos e eficazes” antes mesmo de ser retirado, disse outro membro da comitiva do Primeiro-Ministro.</p><p>Camará sucedeu a Rui de Barros, nomeado a 20 de Dezembro de 2023 para liderar um Governo de iniciativa presidencial, depois da dissolução do Parlamento pelo Chefe de Estado, meio ano depois das legislativas, ganhas pela coligação Plataforma Aliança Inclusiva (PAI) - Terra Ranka.</p><p>As presidenciais têm estado envoltas em polémica com a oposição a defender que já deviam ter sido marcadas antes de 27 de Fevereiro, data em que Sissoco Embaló completou cinco anos à frente da Presidência da Guiné-Bissau.</p>',
                'date' => '2025-08-27',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:43:22',
                'updated_at' => '2025-08-27 09:43:22',
            ),
            10 =>
            array(
                'id' => 16,
                'image' => '82ad18bc36ed174af020c796bf74e11a.jpg',
                'title' => 'Ministro Mário Oliveira destaca importância da Feira de Inovação Tecnológica do ITEL na promoção de soluções inovadoras',
                'slug' => 'ministro-mario-oliveira-destaca-importancia-da-feira-de-inovacao-tecnologica-do-itel-na-promocao-de-solucoes-inovadoras',
                'subtitle' => 'ITEL realiza a 16ª edição da FITITEL - Feira de Inovação Tecnologica do ITEL',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p style="margin-left:0px;">O Ministro das Telecomunicações tecnologias de informação e comunicação social destacou a importância da Feira de Inovação Tecnológica do ITEL, FITITEL como meio para fomentar a criatividade, intercambio e partilha de conhecimento.</p><p style="margin-left:0px;">Mário Oliveira que falava esta quinta-feira, 12 de setembro, na abertura da décima quinta edição do FITITEL sublinhou ainda o papel da feira para a promoção de soluções inovadoras e contribuir para transformação da economia digital de Angola.</p><p style="margin-left:0px;">O director do ITEL Cláudio Gonçalves, disse que a feira tem também como objectivo despertar os estudantes para a necessidade de se investir no sector do empreendedorismo.</p><p style="margin-left:0px;">A Feira de Inovação Tecnológica do ITEL decorre este ano sob o lema “Fintechs como Impulsionadoras da Economia Digital e Independência Financeira” e conta com 100 expositores, 60 projectos inovadores, 40 feitos pelos estudantes do ITEL e 12 mesas redondas.</p>',
                'date' => '2025-08-28',
                'category_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-08-28 09:56:28',
                'updated_at' => '2025-08-28 09:56:28',
            ),
            11 =>
            array(
                'id' => 17,
                'image' => '69926262745876b10fb9a24ad5587211.jpg',
                'title' => 'Presidente da República a caminho de Cabinda',
                'slug' => 'presidente-da-republica-a-caminho-de-cabinda',
                'subtitle' => 'O Presidente da República, João Lourenço, desloca-se hoje, à Província de Cabinda, para uma visita
de trabalho de dois dias.',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>A agenda inclui a inauguração da Refinaria de Cabinda e a visita às obras do Terminal do Caio.</p><p>Antes da partida, o chefe de Estado recebeu cumprimentos de despedida da Vice-presidente, Esperança Costa, do Governador Provincial de Luanda, Luís Nunes e demais entidades do aparelho do Estado.</p>',
                'date' => '2025-09-01',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 08:31:39',
                'updated_at' => '2025-09-01 08:31:39',
            ),
            12 =>
            array(
                'id' => 18,
                'image' => 'e44eeae80391f0d3b4b042d084292a2e.jpg',
                'title' => 'Governo investe 500 milhões de dólares para construção de mais escolas nos próximos dois anos',
                'slug' => 'governo-investe-500-milhoes-de-dolares-para-construcao-de-mais-escolas-nos-proximos-dois-anos',
                'subtitle' => 'O Executivo mobilizou mais 500 milhões de dólares para a construção, nos próximos dois anos, de escolas do ensino de base em todo o país, para inverter o quadro vigente de crianças fora do sistema de ensino.',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>O anúncio foi feito, sexta-feira, em Luanda, pelo Presidente da República, João Lourenço, no discurso de abertura da Conferência Nacional sobre o Capital Humano, que encerrou hoje (sábado), em Luanda.</p><p>De acordo com João Lourenço, para cobrir o déficit de escolas públicas do ensino de base, o Executivo disponibilizou, também, este ano 199 milhões de
Euros, para atender só as províncias de Luanda e Icolo e Bengo.</p><p>"São inegáveis os progressos que Angola tem registado ao longo dos 50 anos, no que respeita ao acesso à educação e ao ensino, embora reconheçamos que ainda temos enormes desafios pela frente", disse o Presidente João Lourenço.</p><p>Antes da nossa Independência, apontou, a taxa de analfabetismo entre os angolanos era de 85%, acrescentando que, ao longo destas cinco décadas, a taxa de angolanos analfabetos reduziu consideravelmente, correspondendo hoje a 24% da população acima dos 15 anos de idade e com maior incidência nas mulheres e nas comunidades rurais, havendo a necessidade de reforçarmos as tarefas de alfabetização para a erradicação do analfabetismo em todo o país.</p><p>"Cerca de 85% das escolas públicas já disponibilizam a classe de Iniciação, cuja taxa bruta de escolarização atingiu os 64,4% no ano lectivo 2024/2025. A taxa de conclusão do ensino primário ainda não nos satisfaz, porquanto, no ano lectivo 2024/2025, não ultrapassou os 61%", sublinhou o Chefe de Estado.</p>',
                'date' => '2025-09-01',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 09:33:15',
                'updated_at' => '2025-09-01 09:33:15',
            ),
            13 =>
            array(
                'id' => 19,
                'image' => '80fbd25c342242f37a3c7a465166b422.jpg',
                'title' => '“Juntos podemos moldar um país onde o capital humano é valorizado”',
                'slug' => 'juntos-podemos-moldar-um-pais-onde-o-capital-humano-e-valorizado',
                'subtitle' => 'O Presidente da República defendeu, sexta-feira, em Luanda, a necessidade de se unir esforços para
a elevação de Angola ao patamar em que o capital humano seja ainda mais valorizado e que cada angolano tenha a oportunidade de alcançar o seu pleno potencial.',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>João Lourenço lançou o repto durante o discurso de abertura da Conferência Nacional sobre o Capital Humano, que encerra hoje na capital angolana, sublinhando que “o verdadeiro poder de uma Nação reside na capacidade dos seus cidadãos de transformar ideias em soluções, face aos principais problemas da sociedade”.</p><p>O Presidente da República disse ser com base nesta meta que o Plano de Desenvolvimento Nacional (PDN), referente ao período 2023-2027, consagra o compromisso de promover o desenvolvimento do capital humano, através da expansão do acesso à saúde, à educação, à cultura, ao desporto, ao empreendedorismo e à inovação.</p><p>“Para que haja desenvolvimento do capital humano, é necessário um esforço, não só das instituições de formação, mas também dos vários agentes económicos, com realce para os que concedem capital e conhecimento aos empresários, pois são
estes que criam os empregos no sector privado”, indicou.</p><p>João Lourenço fez saber que o PDN 2023-2027 está em perfeito alinhamento com a “Agenda 2063”, da União Africana, sobretudo no quadro da 1ª e 6ª aspirações, que defendem, entre outras, uma África próspera baseada no crescimento inclusivo e desenvolvimento sustentável, onde o desenvolvimento seja orientado para as pessoas, confiando no potencial do povo africano, especialmente na mulher e na juventude e nos cuidados à criança.</p><p>“Este Plano é um pacto com as futuras gerações, para que cada criança, jovem e adulto tenham as oportunidades necessárias para aprender, trabalhar e prosperar”, assegurou.</p><p>Nesta equação, João Lourenço ressaltou que a formação de professores, devidamente qualificados e motivados, é uma das grandes prioridades do Executivo, considerando o seu papel crítico na construção do capital humano.</p><p>Acrescentou, por isso, que todas as medidas em curso visam, acima de tudo, captar os melhores candidatos para a profissão docente e reter os que evidenciam melhor desempenho. “Estamos a trabalhar arduamente para a melhoria considerável das condições das infra-estruturas das instituições de ensino em todos os níveis, de modo que o ambiente do processo de ensino-aprendizagem seja o mais adequado para professores e alunos”, adiantou.</p><p>A título ilustrativo, o Presidente da República referiu-se à inauguração, há aproximadamente duas semanas, das novas instalações da Universidade Lueji A’Nkonde, no Dundo e Saurimo, bem como de outras infra-estruturas ligadas ao ensino em curso em Ndalatando, no Cuito, Luena, Ondjiva e, em breve, no Soyo.</p><p>No quadro do investimento em infra-estruturas adequadas para universidades, em várias províncias do país, João Lourenço anunciou, para breve, a conclusão das obras da
infra-estrutura que acomodará, de forma condigna, o Instituto Superior Politécnico do Cuanza-Sul, na cidade do Sumbe.&nbsp;</p><p>A par destas empreitadas, o Presidente da República disse estarem a decorrer, na Universidade do Namibe, em Moçâmedes, obras de ampliação e melhorias, cuja conclusão está prevista para o final do ano de 2026, assim como de outras espalhadas um pouco por todo o país.&nbsp;</p><p>Sobre os investimento na área da formação, o Titular do Poder Executivo trouxe à liça o programa de envio anual de 300 licenciados e mestres angolanos com elevado desempenho e mérito académico para as melhores Universidades do mundo, que disse ser um exemplo peculiar do investimento do Executivo para o reforço do capital humano “altamente qualificado”.&nbsp;</p><p>João Lourenço informou que este programa permitiu a atribuição, até 2024, de 823 bolsas de estudo. “Angola não pode esperar, o nosso futuro depende das decisões que tomarmos hoje”, acentuou.</p><p>No domínio da formação profissional, João Lourenço avançou que estão a ser aplicadas várias medidas e desenvolvidas acções de capacitação de jovens em idade activa, com a finalidade de facilitar a
sua inserção no mercado de trabalho e na actividade económica no geral.&nbsp;</p><p>Informou que foram matriculados, em 2024, 63.841 jovens nos programas de formação itinerante.</p><p><strong>Reformas no recrutamento de funcionários públicos</strong></p><p>O Titular do Poder Executivo reafirmou que o Governo tem efectuado a revisão dos diplomas com incidência sobre a gestão do capital humano, e salientou ser neste âmbito que estão em implementação medidas de regulamentação da Lei n.º 26/22, de 22 de Agosto, Lei de
Bases da Função Pública.</p><p>“Estão a ser introduzidas reformas estruturais no modelo de recrutamento e selecção de funcionários públicos, que, hoje, é mais transparente, permitindo que ingressem para a Administração Pública candidatos motivados, competentes e preocupados com os serviços públicos”, asseverou.&nbsp;</p><p>O Presidente da República informou que, no quadro dessas reformas, a Escola Nacional de Administração e Políticas Públicas (ENAPP) ajustou a oferta formativa ao Plano de Desenvolvimento do Capital Humano, alterando o seu plano de formação.&nbsp;</p><p>Esta medida, precisou o Chefe de Estado e Titular do Poder Executivo, permitiu conceber cursos ajustados às necessidades da Administração Pública, assim como para a formação de pessoal da área de atendimento directo ao cidadão. Essas acções de formação, prosseguiu, permitiram capacitar, de 2023 a 2024, 56.434 funcionários públicos.&nbsp;</p><p>“Juntos podemos moldar um país onde o capital humano é valorizado, onde cada angolano tem a oportunidade de alcançar
o seu pleno potencial”, acentuou o Chefe de Estado, João Manuel Gonçalves Lourenço.</p>',
                'date' => '2025-09-01',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 09:35:21',
                'updated_at' => '2025-09-01 09:35:21',
            ),
            14 =>
            array(
                'id' => 20,
                'image' => '8b1eae014bd5491df55cca44af0c0b73.jpg',
                'title' => 'Presidente da República inaugura Refinaria de Petróleo de Cabinda',
                'slug' => 'presidente-da-republica-inaugura-refinaria-de-petroleo-de-cabinda',
                'subtitle' => 'A primeira fase da Refinaria de Cabinda, a ser inaugurada hoje, pelo Presidente João Lourenço, assinala um marco histórico para a indústria petrolífera e a segurança energética do país.',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>A inauguração da infra-estrutura petrolífera acontece no quadro da visita de trabalho que o Titular do Poder Executivo realiza hoje e amanhã à província de Cabinda.</p><p>Informações avançadas pelo secretário do Presidente da República para os Assuntos de Comunicação Institucional e Imprensa, Luís Fernando, dão conta que este feito histórico coloca Cabinda como a primeira região, além de Luanda, a refinar petróleo bruto e a possuir uma indústria deste porte.</p><p>Depois da inauguração da Refinaria, João Lourenço prossegue com uma visita às obras do Terminal de Águas Profundas do Caio para tomar pulso do seu andamento.</p><p>Segundo o programa, está igualmente prevista para amanhã a inauguração da sede do Governo Provincial, e a seguir realiza-se uma reunião com o Governo Local, onde será feita uma avaliação exaustiva sobre o estado do território nos mais variados
domínios, essencialmente o nível de execução das obras públicas, escolas, estradas e infra-estruturas sanitárias.</p><p><strong>Excedentes para a exportação de refinados</strong></p><p>A entrada em funcionamento da primeira fase da Refinaria de Petróleo de Cabinda, a partir de hoje, vai assegurar o abastecimento interno, reduzir a dependência de importações e criar excedentes para a exportação, segundo a Sonangol.</p><p>Em nota, divulgada ontem, a petrolífera estatal angolana considera a nova unidade industrial factor determinante para a criação de mais empregos aos jovens, capacitação e inovação.</p><p>A título de exemplo, até ao momento, já foram criados três mil e 300 postos de trabalho directos, e formados 700 quadros nacionais, com o compromisso de atingir cinco mil técnicos qualificados ao longo dos próximos meses.</p><p>Aponta, igualmente, a Refinaria de Cabinda como um empreendimento que se tornará num dos pilares estratégicos da indústria petrolífera nacional e um símbolo de confiança no futuro de Angola.</p><p>Acrescenta que a nova infra-estrutura foi desenhada com tecnologias de ponta, reforçando o compromisso da Sonangol com a sustentabilidade, segurança e as melhores práticas internacionais.</p><p>Esse será um passo decisivo para a soberania energética de Angola, consolidando o protagonismo da Sonangol como motor de desenvolvimento económico e social, em linha com a visão do Executivo para o futuro do país.</p><p>Com uma capacidade total de processar 60 mil barris de petróleo por dia, a unidade fabril entra em funcionamento com 30 mil barris diários, na primeira fase.</p><p>Nessa fase, que vai produzir gasóleo, combustível de aviação, fuel óleo pesado e nafta, o investimento global ascende 473 milhões de dólares, dos quais 335 milhões resultaram de financiamento internacional, evidenciando a credibilidade do país junto de parceiros globais.</p><p><strong>&nbsp;Produção comercial projectada em 30 mil barris</strong></p><p>A inauguração da Refinaria de Cabinda marca a conclusão da construção da primeira fase desta unidade fabril e o
arranque do processo de comissionamento, que antecede a produção comercial projectada, inicialmente, para o processamento de 30 mil barris por dia.</p><p>Com a entrada em operação da refinaria, a produção e venda de combustíveis, como gasóleo, querosene (petróleo) de aviação (Jet A1), fuel óleo pesado e nafta, terá início dentro de aproximadamente três meses, segundo uma nota de imprensa a que a Angop teve ontem acesso.</p><p>De acordo com o documento, citado pela Angop, os 30 mil barris por dia que a refinaria vai processar, na primeira fase, representam uma fatia relevante, contribuindo para reduzir, significativamente, a importação de produtos refinados.</p><p>Até estar em plena operação, serão realizados testes de processamento durante cerca de três meses, até atingir os padrões exigidos de qualidade para comercialização.</p><p>A primeira fase da refinaria foi orçada em 473 milhões de dólares, sendo 38 milhões disponibilizados por parceiros e 335 milhões em financiamento sindicado.</p><p>Com uma capacidade para processar 60 mil barris por dia, em fases sucessivas, a produção de gasolina está prevista para uma fase posterior do projecto, processo que está em preparação.</p><p>De acordo com a nota, citada pela Angop, a redução das importações vai ser registada logo após o início da produção comercial, com im- pacto progressivo à medida que a refinaria atingir plena capacidade, permitindo que o Estado tenha menor dependência de importações e redução da factura cambial e maior segurança energética.</p><p>A prioridade é garantir o abastecimento interno, sendo os eventuais excedentes exportados, gerando receitas adicionais para o país.</p><p>A primeira fase contou com o apoio financeiro de um consórcio internacional de bancos, incluindo AFC, Afreximbank, BADEA, IDC e BFA. Também se espera que estes e outros parceiros mantenham o apoio na fase seguinte.</p><p>Durante a construção foram criados mais de três mil e 300 empregos, ocupados em grande parte por jovens angolanos.</p><p>Na componente formação de trabalhadores, foram realizadas 14 milhões de horas e estão em curso programas de capacitação, como o Projecto Kuma, que prevê formar mais de cinco mil jovens em 12 meses.</p><p>Além da criação de em- pregos e formação, as comunidades locais também foram apoiados com projectos de educação, saúde e programas comunitários na província de Cabinda.</p><p>Por outro lado, justifica-se a entrada em funcionamento tardia pelo facto de ser
um projecto de grande complexidade que atravessou a pandemia da Covid-19 e enfrentou graves perturbações nas cadeias globais de fornecimento. Apesar disso, a Fase I foi concluída com sucesso.</p><p>Quanto à Fase II, já começou a ser realizada, na qual estão a
ser investidos mais de seis milhões de dólares em engenharia básica e licenciamento de tecnologia, passos necessários antes do lançamento do concurso de construção.</p><p>A Refinaria de Cabinda resulta de uma parceria pú- blico-privada entre a Sonangol (empresa pública) e a Gemcorp (investidor privado).</p><p>Enquanto isso, a governança é partilhada entre a Sonangol e a Gemcorp, sob supervisão do Ministério dos Recursos Minerais, Petróleo e Gás.</p><p><strong>Autoridades garantem conformidade&nbsp;</strong></p><p>O secretário provincial do Ambiente, Gestão de Resíduos e Serviços Comunitários do Governo Provincial de Cabinda, Lourenço Domingos Bilolo, assegurou ontem que todas as medidas ambientais foram devidamente acauteladas no âmbito da construção da nova Refinaria,
que será hoje inaugurada.Segundo o responsável, que falava à Angop e à TV Zimbo, o empreendimento obedeceu a estudos ambientais realizados por uma empresa especializada, validados pelo Ministério do Ambiente, incluindo consultas públicas à população local e visitas técnicas de monitorização.</p><p>“O estudo ambiental não se limitou apenas ao perímetro da Refinaria. Foi definido um coeficiente de segurança que abrange também áreas adjacentes, garantindo que não haverá impactos negativos para as comunidades vizinhas”, sublinhou.</p><p>Lourenço Bilolo destacou ainda que a captação e encaminhamento de águas, a gestão de resíduos sólidos e a preservação ambiental foram estruturadas de acordo com padrões internacionais.</p><p>“Existe já um mapa próprio para a recolha e tratamento de resíduos. O lixo é seleccionado, recolhido e depositado em locais adequados, sem riscos para a população”, assegurou.</p><p>De acordo com o secretário, a preocupação ambiental esteve sempre presente durante a execução do projecto, incluindo iniciativas de reflorestação no local.</p><p><strong>Impacto na criaçãode emprego e formação</strong></p><p>O secretário provincial da Juventude e Desportos de Cabinda, Leão Miranda, referiu que a inauguração da Refinaria, prevista para hoje, simboliza esperança para a região e principalmente para milhares de jovens.</p><p>Acrescentou que o empreendimento vai proporcionar cerca de 3.300 empregos a
jovens locais, ao mesmo tempo que integra uma forte componente de formação e valorização do capital humano.</p><p>“É a primeira refinaria erguida em Angola após a independência, um motivo de orgulho para Cabinda e para a juventude, que vê aqui não apenas oportunidades de trabalho, mas também de capacitação profissional”, afirmou.</p><p>Leão Miranda sublinhou ainda que o projecto, denominado KUMA, recentemente lançado no quadro da refinaria, prevê formar perto de seis mil jovens, abrangendo não só os que estão directamente ligados ao complexo, mas também para aqueles que procuram qualificação em diversas áreas.</p><p><strong>* Com ANGOP</strong></p>',
                'date' => '2025-09-01',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 09:39:26',
                'updated_at' => '2025-09-01 09:39:26',
            ),
            15 =>
            array(
                'id' => 21,
                'image' => '467d72695c33ecd49501249736eb7cb6.jpg',
                'title' => 'Agência japonesa atribui notação de risco de “A”',
                'slug' => 'agencia-japonesa-atribui-notacao-de-risco-de-a',
                'subtitle' => 'A Agência de Classificação de Crédito do Japão, Ltd. (JCR) reafirmou, recentemente, o rating “A” do African Export-Import Bank (Afreximbank) com uma perspectiva estável.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>A classificação reflecte a avaliação do JCR do forte posicionamento estratégico do Afreximbank, estrutura robusta de gestão de risco, lucro consistente, políticas prudentes de liquidez e base de capital resiliente.</p><p>A JCR 
também observou o importante papel do Banco no apoio ao financiamento comercial e ao desenvolvimento económico em África e no Caribe. Segundo uma nota, a agência de classificação afirmou esperar que a classificação do Afreximbank permaneça estável nos próximos 12 a 18 meses, apesar dos desafios macroeconómicos externos e das pressões potenciais no ambiente operacional.</p><p>Em reacção ao anúncio, o vice-presidente executivo sénior do Afreximbank, Denys Denya, disse que a afirmação reforça a credibilidade do banco 
nos mercados globais e destaca a sua importância sistémica para África.</p><p>“A classificação da JCR ressalta os nossos fortes fundamentos e práticas prudentes de gerenciamento de risco”, disse.Para Denys Denya, isto fortalece a capacidade de diversificar as 
fontes de financiamento, incluindo a entrada nos mercados de capitais do Japão para avançar ainda mais no mandato de promover e financiar o comércio intra e extra-africano.”</p><p>Denys Denya reafirmou o compromisso inabalável do Afreximbank com os Estados-membros, parceiros e clientes, observando que a entrega consistente, mesmo em tempos desafiadores, tem sido um factor-chave por trás 
da forte posição de crédito.</p><p>“Esta classificação é uma prova da resiliência e do foco estratégico do banco, permitindo-nos mobilizar recursos para impulsionar o comércio e o desenvol- vimento em África e no Caribe”, acrescentou.</p><p>Espera-se que a afirmação do JCR aumente a confiança entre os investidores e partes interessadas, apoiando os esforços contínuos do Afreximbank para 
expandir a base de financiamento global e aumentar a presença no mercado.De acordo com o posicionamento, o Afreximbank concluiu com sucesso a sua emissão inaugural de títulos Samurai no Japão em 2024, arrecadando 81,3 mil milhões de JPY (Usd 530 milhões).</p>',
                'date' => '2025-09-01',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 10:50:51',
                'updated_at' => '2025-09-01 10:50:51',
            ),
        ));
    }
}
