mysql -h db.ctuqbxteczua.us-east-1.rds.amazonaws.com -P 3306 -u admin -p<br>

loadbalancer: 3.223.88.39<br>
    server 1: 18.211.145.190<br>
    server 2: 3.233.18.65<br>
    database: db.ctuqbxteczua.us-east-1.rds.amazonaws.com<br>

ssh -i chave.pem ubuntu@3.223.88.39<br>
ssh -i chave.pem ubuntu@18.211.145.190<br>
ssh -i chave.pem ubuntu@3.233.18.65<br>

# apt-get install
apt-get update
apt-get install php-fpm
apt-get install mysql
apt-get instal phpmysql
apt-get install nginx
apt-get install openvpn

<img src="topologia.png" width="800"><br>

# openvpn
cd etc/openvpn
nano server.conf
cat server.conf > client.conf
openvpn --genkey --secret chave
systemctl stop openvpn
opevpn --config server.conf
opevpn --config client.conf

