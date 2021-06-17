# Qaton App

Qaton App - Powered by VirX Qaton, the Elemental PHP MVC Framework

## Requirements

- PHP7.4+

## Getting Started (Development Only)

There are several ways to get started quickly for development. However, these methods are **not recommended** for a production setup. Please visit http://qaton.virx.net for detailed documentation.

### METHOD 1: Quick Start using Git and Docker

Use this method if you have very little experience and do not have a development environemnt with PHP or a server enabled.

-  Clone the qatonapp repository with `git clone https://github.com/virxnet/qatonapp.git`or your favorite Git management tool.

-  Enter the project directory (e.g.: `cd qatonapp`).

- You may want to delete the `.git` directory if you plan on using your own version control repository for this project. 

- Install the [Docker Desktop/Engine](https://docs.docker.com/get-docker) for your operating system. Once, installed make sure it is running by launching the client app.

**Note:** You do not need to use Docker if you have another solution or prefer to use PHP directly from your host environment. 

- Provide executable permission to the `qaton` file which is located at the root directory of the project. This file expects to be excuted with BASH. If you are on Linux or Mac, it will run painlessly as long as you have given it permission to do so. To do that, open a terminal, make sure you are in the same directory and run:

`chmod +x qaton`

**Note:** If you are on Microsoft Windows you will need to setup [Microsoft WSL2](https://docs.microsoft.com/en-us/windows/wsl/install-win10). Also check [Docker WSL2 documentation](https://docs.docker.com/docker-for-windows/wsl/]) for Docker requirements.

- Using a BASH terminal, execute the Qaton Development Helper to install and start the container on the default port 8888

`./qaton start`

or if you wish to specify a port, run (replacing `[PortNumber]` with the desired port:

`./qaton serve [PortNumber]`

example:

`./qaton serve 9999`

**Note:** if the above commands fail, try running `bash qaton` instead.

- If successful, you should be taken to the development environment after the setup process completes. You can now type `qpm` anytime to access the Qaton Project Manager tool and run development commands.

- On your host machine, you should be able to visit http://localhost:8888 to view the web application using an internet browser like Firefox, Google Chrome, etc... (If you changed the port number, apply that here too. e.g. http://localhost:9999)

------------

### METHOD 2: Quick Install using Composer

Use this method if you already have a development environment readily installed with the minimum requirements (i.e. properly configured web server with rewrite enabled to index.php, the correct version of PHP, composer, etc...)

#### Start a new project with PHP [composer](https://getcomposer.org/)

`composer create-project virx/qatonapp:"dev-master" [ProjectDir] --remove-vcs`

#### Set the right permissions 

```bash
cd [ProjectDir]
chmod +x qaton
chmod +x qpm
```

#### Begin Development

There are two ways to get started with development quickly. The quickest way is 
using [Docker Desktop/Engine](https://docs.docker.com/get-docker). If you started th e project using composer but still wish to use Docker, you can follow the instructions outlined in Method 1 only skipping the first step (git clone). Otherwise, if your environment has already been setup correctly, then you should be already be able to begin at this point. If you have any issues, consider the following tips for troubleshoting: 

- Your web server's document root is correctly pointed to the public directory
- You have enabled URL rewriting so eveything points to the index.php file
- You have set the right permissions

#### Qaton Project Manager `qpm`

Type `qpm` in your BASH terminal window to view your development options. 

## Learn More

Please visit http://qaton.virx.net for detailed documentation
