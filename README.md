# OOP-PHP7
Desenvolvimento em OOP na versão 7 do PHP

Instalação do CentOS Linux release 7.4.1708 virtualizado no VMware Workstation 12 Player;

Instalação do NetTools
	yum install net-tools

Instalação do Apache Apache/2.4.6
	yum -y install httpd
	service httpd status

Instalação do PHP Version 7.0.27
	rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
	rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
	yum install php70w php70w-fpm
	apachectl restart

Instalação das extensões:
	GD					2.4.11
	json				1.4.0
	mbstring			1.3.2
	mcrypt				2.5.8
	mysqli				5.6.28-76.1
	PDO
	pdo_mysql			5.6.28-76.1
	pdo_sqlite			3.7.17
	soap
	xmlrpc				7.0.27
		php -m
		yum install php7.0-mysql
		yum list installed php*
		yum install php-soap php-xmlr
		yum install php70w-php-soap php70w-xmlrpc php70w-php-mbstring
		yum install php70w-soap php70w-mbstring
		yum install php70w-pdo_mysql
		apachectl restart


Instalação do Percona 5.7.21-20
	yum install http://www.percona.com/downloads/percona-release/redhat/0.1-4/percona-release-0.1-4.noarch.rpm
	yum install Percona-Server-server-57
	Configuração da senha padrão:
		cd /var/log/	
		cat mysqld.log | grep pass

Instalação Nano Editor
	yum install nano

Instalação do GIT 1.8.3.1
Configuração do firewall para o APACHE e MYSQL
	firewall-cmd --permanent --zone=trusted --add-port=3306/tcp
	firewall-cmd --zone=public --add-service=mysql --permanent
	firewall-cmd  --reload
	firewall-cmd --permanent --add-port=80/tcp
	firewall-cmd --permanent --add-port=443/tcp
	firewall-cmd --reload
	
Configuração do SELinux para segurança do diretório de sites /home/sites unconfined_u:object_r:httpd_sys_content_t:s0
	yum install policycoreutils-python
	semanage fcontext -a -t httpd_sys_content_t "/home/sites(/.*)?"
 	restorecon -Rv /home/sites