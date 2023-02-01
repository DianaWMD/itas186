# Lab - Use Xdebug with VS Code

## Install Xdebug in XAMPP
[//]: # (make sure that it is clear that you must restart xampp)

## Setup Xdebug in VS Code

1. Install the ["PHP Debug"](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug) plug-in for VSCode made by Xdebug.
2. In your project, go to the debugger (arrow with the bug icon) and hit the 'create a launch.json file' link. A new launch configuration will be created for you. 
3. If this is your first time you may need to add the path of your php.exe file. To do this just right click to copy the path in the file explorer and paste it into the specified settings window VSCode opens.
4. Press the run button and refresh the page, it should now allow you to debug. 

Example debug:
1. Click on "Everything" checkbox in the "BREAKPOINTS" tab in the debug menu. 
2. Click on the beginning of any line to start your debugging. 
3. Stop the debugger program from running if it currently is.
4. Start the debugger and refresh the website page. 
