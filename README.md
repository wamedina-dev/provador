🧵 Provador Virtual Inteligente para Lojas de Roupas Online
Este projeto visa solucionar um dos principais problemas enfrentados por consumidores em lojas virtuais de vestuário: a incerteza na escolha do tamanho ideal das roupas. A aplicação permite que usuários insiram suas medidas corporais e recebam sugestões personalizadas de tamanhos, visualizando o caimento das peças em um manequim virtual, com base nas tabelas de medidas cadastradas pela loja.


🚀 Funcionalidades

Cadastro de produtos com imagens e tabelas de medidas

Criação de manequins virtuais com pontos de medição

Upload de imagens e arquivos

Consulta personalizada por parte do consumidor com sugestão de tamanho ideal

Visualização gráfica do caimento com base nas medidas inseridas

Alternância entre tamanhos com feedback (justo, ideal, largo)


🧩 Tecnologias Utilizadas

Linguagem de Programação: PHP 7.4+

Scripts e Dinamismo: JavaScript + JQuery

Banco de Dados: MySQL/MariaDB

Estilos e Responsividade: CSS3, Bootstrap (opcional)

Hospedagem: Apache 2.4+ em ambiente Linux



📁 Estrutura de Diretórios

/admin      → Área administrativa (cadastro de produtos, medidas, manequins)

/ajax       → Funções assíncronas em PHP chamadas via JQuery

/css        → Arquivos de estilo da interface

/imgs       → Imagens padrão e elementos gráficos

/includes   → Arquivos reaproveitáveis e trechos comuns (ex: cabeçalhos, rodapés)

/init       → Arquivo(s) de configuração e conexão com banco de dados

/js         → Scripts JS e bibliotecas JQuery

/uploads    → Imagens e arquivos enviados pelo administrador



⚙️ Como Executar o Projeto

Clone o repositório:

git clone https://github.com/wamedina-dev/provador.git


Configure o ambiente:

PHP 7.4+ com MySQL/MariaDB

Apache ou outro servidor web

Importar o banco de dados via /init/provador.sql (se existir)



Acesse pelo navegador:

http://localhost/provador/



📌 Requisitos de Implantação

Sistema Operacional: Linux com suporte a Apache 2.4+

PHP: Versão 7.4 ou superior com mysqli e curl

Banco de Dados: MySQL ou MariaDB

Navegador moderno (Chrome, Firefox, Edge)

