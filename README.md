mysql -h db.ctuqbxteczua.us-east-1.rds.amazonaws.com -P 3306 -u admin -p<br>

loadbalancer: 3.223.88.39<br>
    server 1: 18.211.145.190<br>
    server 2: 3.233.18.65<br>
    database: db.ctuqbxteczua.us-east-1.rds.amazonaws.com<br>

ssh -i chave.pem ubuntu@3.223.88.39<br>
ssh -i chave.pem ubuntu@18.211.145.190<br>
ssh -i chave.pem ubuntu@3.233.18.65<br>

# apt-get install
apt-get update<br>
apt-get install php-fpm<br>
apt-get install mysql<br>
apt-get instal phpmysql<br>
apt-get install nginx<br>
apt-get install openvpn<br>
<br>
<img src="topologia.png" width="800"><br>

# openvpn
cd etc/openvpn<br>
nano server.conf<br>
cat server.conf > client.conf<br>
openvpn --genkey --secret chave<br>
systemctl stop openvpn<br>
opevpn --config server.conf<br>
opevpn --config client.conf<br>

