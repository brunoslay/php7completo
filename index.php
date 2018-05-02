<?php 	
	echo 'ola mundão';

?>


Comandos Básicos Git

Introdução:

Click direito em uma pasta, escolha "Git GUI Here".
	Vai inicializar o cmd para os comandos git.

Acesse a pasta pelo cmd, copiando o link do diretorio:
	cd **c:\curso\php\pasta

comandos:

	mkdir nome_pasta = cria uma pasta chamada "nome_pasta"

	cd nome_pasta = acessa a pasta

	git init = inicia as configurações padrões do repositório git naquela pasta

	git config --global user.name "Seu nome"
	git config --global user.email "Seu email do github"
		--global para aplicar em todas seus repositorios
		obs: sem o --global vai aplicar somente para pasta/repositório atual


	git add nome_arquivo = adiciona o arquivo para o "stage area", é como se fosse uma sala de espera

	git add --all = adiciona todos os arquivos daquela pasta  para a "stage area"

	git commit -m "comentário" = comentário objetivo do porquê daquela alteração, como log de eventos

	git push origin master 
		master são "ramos ou brands", basicamente outras pastas do repositório
		origin deve ser a pasta de origem do comando

	git pull origin master = baixa os arquivos do repositorio do github

teste de alteração


