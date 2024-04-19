# Hey this my localhost server! 👋
### Localhost is always there with a single line of command.

📫 How to reach me **berkguclukol@gmail.com** | [https://guclukol.net](https://guclukol.net)

### Technologies included:
[![SkillIcons](https://skillicons.dev/icons?i=docker)](https://www.docker.com)
[![SkillIcons](https://skillicons.dev/icons?i=php)](https://hub.docker.com/_/php)
[![SkillIcons](https://skillicons.dev/icons?i=mysql)](https://hub.docker.com/_/mysql)
[![SkillIcons](https://skillicons.dev/icons?i=mongo)](https://hub.docker.com/r/mongodb/mongodb-community-server)
[![SkillIcons](https://skillicons.dev/icons?i=youtube)](https://www.youtube.com/c/berkguclukol)

### Settings:
All settings in 2 file;
```bash
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
[+] Running 6/6
 ✔ Network bglocalhost_default        Created      0.0s 
 ✔ Container Guclukol_PHP             Started      0.1s 
 ✔ Container Guclukol_MongoDB_Server  Started      0.1s 
 ✔ Container Guclukol_MySQLDB_Server  Started      0.1s 
 ✔ Container Guclukol_Apache_Httpd    Started      0.0s 
 ✔ Container Guclukol_MySQL_UI        Started      0.1s
```