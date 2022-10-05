## このリポジトリは？
dockerでnginx+php+mysqlが動くよう作成しました。
docker-composeはversion3で書いています。

https://docs.docker.com/compose/compose-file/

## 参考元
[参考：DockerでPHPの実行環境を作ろう](https://codelikes.com/beginner-guide-docker-php/)

ここをクローンし立ち上げるだけ
```
https://github.com/YasuakiHirano/codelike_web_docker
```

### コンテナに入る
```
$ docker exec -it codelike_web_php /bin/bash
```