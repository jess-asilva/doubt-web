<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Publication;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publication::create([
            'user_id' => '1',
            'title' => 'Bem-vindo!',
            'content' => 'É com alegria que recebemos você para o início de uma trajetória que, acreditamos, será uma experiência transformadora, de crescimento acadêmico e também profissional. ',
            'image_url' => '/storage/publications/images/CY7FnQRZk7nIKgL0s03j8hG9oZVJCLJwZKCYVSKi.png',
            'video_url' => '',
        ]);

        Publication::create([
            'user_id' => '2',
            'title' => 'O que é SQL',
            'content' => 'O SQL foi desenvolvido originalmente nos laboratórios da IBM na década de 70, tendo sido padronizado a partir da década de 80 para se tornar a linguagem padrão para gerenciamento de informações em um banco de dados relacional.
            
            Um banco de dados relacional armazena os dados em formatos similares a tabelas, com as quais é possível construir relações entre si, facilitando a inserção e a recuperação das informações.
            
            Com o SQL, é possível realizar consultas à base de dados informando diversos tipos de parâmetros (seguindo algumas regras e normas da linguagem), podendo obter grandes quantidades de informação de diferentes fontes (no caso, tabelas) com poucos ou até mesmo apenas uma instrução.
            
            O que é SQL / Camille Rubin / Unsplash
            Exemplo de código SQL (Imagem: Camille Rubin/Unsplash)
            A linguagem também possui outros subconjuntos de operações utilizadas para gerenciar e manipular as informações e o próprio banco de dados, como inserção, atualização e exclusão de informações, criação de novas tabelas, etc.
            
            Abaixo, um exemplo de uma consulta utilizando SQL em um banco de dados relacional, que retorna as informações (caso existam) de um usuário com o nome “Diego Melo”, na tabela “tecnoblog”.
            
            SELECT * from tecnoblog WHERE user = "Diego Melo";
            
            Como funciona?
            Os principais comandos de SQL são:
            
            SELECT: busca linhas em uma tabela de acordo com os critérios definidos;
            INSERT: insere novas linhas na tabela;
            UPDATE: atualiza as informações de uma ou mais linhas de acordo com os critérios definidos;
            DELETE: remove uma ou mais linhas da tabela de acordo com os critérios definidos;
            Existem outros subconjuntos de comandos também muito utilizados em bancos de dados SQL, como o CREATE, para criar tabelas, e o JOIN, LIKE e GROUP BY, que auxiliam em buscas mais complexas.
            
            Junto dos comandos, existem as cláusulas, que são condições a serem respeitadas que definem ou modificam os dados (ou registros) que serão retornados pelas consultas. As principais são:
            
            FROM: especifica a tabela a ser consultada;
            WHERE: especifica as condições que devem reunir os registros retornados;
            ORDER BY: ordena os registros retornados em uma ordem específica;
            GROUP BY: agrupa os registros conforme os critérios informados;
            
            O SQL também suporta operadores lógicos em suas consultas, como o AND, que retorna os dados caso ambas as condições da consulta sejam verdadeiras; o OR, para casos em que uma das condições é verdadeira (ou satisfeita); e o NOT, que devolve o valor contrário da expressão.',
            'image_url' => '',
            'video_url' => '',
        ]);

        Publication::create([
            'user_id' => '5',
            'title' => 'Criando um ambiente de desenvolvimento PHP com Docker Compose',
            'content' => 'Docker usa “imagens” para criar containers. Uma imagem contém um ambiente linux mínimo e geralmente executa uma função específica: um servidor web, servidor de banco de dados…

            Com a ajuda de Docker Engine você pode executar “Containers” Docker.
            
            Um container é em muitos aspectos comparável com uma máquina virtual: você pode criar, remover e modificar arquivos.
            
            Para a maioria dos softwares ou linguagens de desenvolvimento há uma variedade de imagens oficiais Docker disponíveis. A única coisa que resta é adicionar seu próprio código ou dados e está pronto.
            
            Quando você vai usar vários containers dentro de um projeto nem sempre é simples. Configurando cada container, vinculando volumes, configurá-lo torna-se uma tarefa de muito trabalho.
            
            Para resolver este problema, temos Docker Compose.
            
            Com Docker Compose é possível definir uma aplicação multi-container. Com um único comando, você pode iniciar o ambiente inteiro!',
            'image_url' => '/storage/publications/images/PEbkhBbtn1NM7uAYdKBGklgfX2nGouMZZDg6QgHb.png',
            'video_url' => '',
        ]);

        Publication::create([
            'user_id' => '5',
            'title' => 'HTML, CSS e JavaScript',
            'content' => 'HTML: linguagem de marcação utilizada para estruturar os elementos da página, como parágrafos, links, títulos, tabelas, imagens e até vídeos.
            CSS: linguagem de estilos utilizada para definir cores, fontes, tamanhos, posicionamento e qualquer outro valor estético para os elementos da página.
            Javascript: linguagem de programação utilizada para deixar a página com mais movimento, podendo atualizar elementos dinamicamente e lidar melhor com dados enviados e recebidos na página.',
            'image_url' => '/storage/publications/images/MWQhNRB5Zs1J4pYsuW9BLQmryAqzGH7yTSEClHqN.png',
            'video_url' => '',
        ]);

        // Publication::create([
        //     'user_id' => '6',
        //     'title' => '',
        //     'content' => '',
        //     'image_url' => '',
        //     'video_url' => '',
        // ]);

        // Publication::create([
        //     'user_id' => '6',
        //     'title' => '',
        //     'content' => '',
        //     'image_url' => '',
        //     'video_url' => '',
        // ]);
    }
}
