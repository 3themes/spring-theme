Spring theme
============

A vanilla WordPress theme that will be the foundation for all other 3themes themes.

###To start developing:
1. In your terminal, navigate to the /themes/ folder of your local WordPress install.
2. Type "git clone https://github.com/3themes/spring-theme.git" and hit enter. This will clone the repostory to your local machine.
3. We use Sassquatch in our themes (as a git submodule), so you'll need to run the following terminal commands to get Sassquatch on your computer as well:
  1. cd spring-theme
  2. git submodule update --init
4. To ensure you have the very latest Sassquatch, or to update an existing repo when we update Sassquatch, type the following commands into terminal:
  1. git submodule foreach git pull origin master   #This pulls the latest of every submodule
