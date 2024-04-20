# Hey this my localhost server! 👋
### Localhost is always there with a single line of command.

📫 How to reach me **berkguclukol@gmail.com** | [https://guclukol.net](https://guclukol.net)

### Technologies included:
[![SkillIcons](https://skillicons.dev/icons?i=docker)](https://www.docker.com)
[![SkillIcons](https://skillicons.dev/icons?i=php)](https://hub.docker.com/_/php)
[![SkillIcons](https://skillicons.dev/icons?i=mysql)](https://hub.docker.com/_/mysql)
[![SkillIcons](https://skillicons.dev/icons?i=mongo)](https://hub.docker.com/r/mongodb/mongodb-community-server)

### Settings:
All settings in 4 file;
```bash
./.env-example
# Rename to .env
./docker-compose.yml
./Dockerfile
./apache/Dockerfile
```
### Instructions:
```bash
git clone https://github.com/berkguclukol/bg-docker-localhost.git
cd bg-docker-localhost
docker-compose up --build -d
```

### Tailwind Support:
In app directory supported TailwindCss. After donwloading file run this command and install all package.

```bash
cd ./app/
npm install
npm run watch
```

### Result:
If you see the following texts, it means that the transaction has been completed successfully.
```bash
 [+] Running 7/7
 ✔ Network bg-docker-localhost_default  Created   0.0s 
 ✔ Container BG_MySQLDB_Server          Started   0.1s 
 ✔ Container BG_MongoDB_Server          Started   0.0s 
 ✔ Container BG_PHP_8.2                 Started   0.1s 
 ✔ Container BG_MongoDB_UI              Started   0.0s 
 ✔ Container BG_MySQL_UI                Started   0.0s 
 ✔ Container BG_Apache_Httpd            Started   0.0s 
```