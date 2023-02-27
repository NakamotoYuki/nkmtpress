# nkmtpress

![png](https://nkmt.info/wp-content/uploads/2023/02/screenshot.png)

## Overview
The nkmtpress is a original wordpress theme.
This theme based on Twenty_Nineteen_Theme.

## Requirement
- php
- nginx
- mysql or mariadb
- node.js

## Usage
Please add this repository to your wordpress and use it.

## Features
- pagination
- generate Table of Contents

## Reference
This wordpress theme is very simple and easy to customuize.
Dockerfile is included in this repojitory.
Following way you can the build and run docker container.
- build docker container
```
docker build -t nkmtpress/nkmtpress .
```
- docker container start
```
docker run -itd --volume=/local wordpress path/html:/var/www/html/wordpress -p 9980:80 docker image id
```

## customize
You can customize the design using Webpack.
After customizing, execute the following command.
```
npx run build
```


## Author

[nkmt.info](https://nkmt.info)