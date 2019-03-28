# ATHAN HOME
A fully customizable Athan for the Google Home Devices

### Installation

Athan Home Requires Golang to build the binary, and Apache or other WebServer + PHP + SQL
to fully function

Install these Golang dependencies.

```sh
$ go get -u github.com/evalphobia/google-home-client-go
$ go get -u github.com/gojektech/heimdall
$ go get -u github.com/micro/mdns
```


### Setting up the binary
Setup for the most part is pretty simple given you have some basic knowledge of using linux or have atleasted used a raspberry.
For running this I recommend using a raspberry pi Zero W, its small and very usfull it will allow you to enjoy the full functionality of this neat program

Instaling Golang
We first must install GoLang (this isnt required when running the actuall binary but will be required when trying to build the binrary)

Please Follow this tutorial: 
```
https://tecadmin.net/install-go-on-ubuntu/
```

#### Building the binnary
First go to the Users folder in the panel and move Both "main.go" and "config.json" to there.
```sh
$ go build
```
Install Screen to use in background
```sh
$ sudo apt-install screen
```
Then run the screen command
```sh
$ screen
$ ./Users or main.go
$ Ctrl + A + D
```

### Setting up the panel
Once you have setup the Application move the Binary and Config.json file to the Users Folder
once you have done that run the command


Setting Up the WebServer
Please Install and Setup This first (You may use Apache):
```
https://mediatemple.net/community/products/developer/204405534/install-nginx-on-ubuntu
```
Then Install and Setup Phpmyadmin:
```
https://pimylifeup.com/raspberry-pi-mysql-phpmyadmin/
```

```sh
$ sudo chmod 777 config.json
```
then visit the login.php page. and login. Default Login Details are
```
Username: Master
Password: Shadi1999
```

## Pictures
![Image of Dashboard] (https://i.gyazo.com/e3d0a6592466a7795fa700ef4e1f4701.png)
![Image of Dashboard] (https://i.gyazo.com/db811c3fd691fb1994755d7092f26ac3.png)
![Image of Support] (https://i.gyazo.com/3d9b27ee8795b479dc120df7802a718c.png)
![Image of Account Settings] (https://gyazo.com/1816aff649532aa05335c7d4c9261533)

### Todos

 - Unknown, give suggestions

