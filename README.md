#Installation de docker sur Debian / Ubuntu
sudo apt-get -y install  apt-transport-https ca-certificates curl  software-properties-common 
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/$(lsb_release -is | tr '[:upper:]' '[:lower:]') $(lsb_release -cs) stable"
sudo apt-get update
sudo apt-get install -y docker-ce
sudo usermod -aG docker $USER

#Installation de docker-compose
sudo curl -L https://github.com/docker/compose/releases/download/1.18.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose

#Execution du docker labonneformation: écoute dur le port 8080 => http://localhost:8080
docker-compose up -d --build

#Attention cette installation n'est pas adaptée à un environnement de production
