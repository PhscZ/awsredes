mysql -h db.ctuqbxteczua.us-east-1.rds.amazonaws.com -P 3306 -u admin -p<br>

loadbalancer: 3.223.88.39<br>
    server 1: 18.211.145.190<br>
    server 2: 3.233.18.65<br>
    database: db.ctuqbxteczua.us-east-1.rds.amazonaws.com<br>

ssh -i chave.pem ubuntu@18.211.145.190<br>
ssh -i chave.pem ubuntu@3.233.18.65<br>
