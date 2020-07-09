
To make a publisher and subscriber who share a topic in ROS, we follow these steps:

1- To create the workspace we head to make a directory 

    $ mkdir -p ~/catkin_ws/src

  Then we go and make the catkin workspace in the folder

    $ cd ~/catkin_ws/src

  Then we source our setup

    $ source devel/setup.bash

2- After that we start making our package.. we go the src folder:

  $ cd ~/catkin_ws/src
  
Then we create the package inside it
  
  $ catkin_create_pkg myfirstros
  
Now we go back to catkin_ws folder and build the package
  
  $ cd ~/catkin_ws
  
  $ catkin_make
 
and source the setup file
 
 $ . ~/catkin_ws/devel/setup.bash
 
3- Now we will make our publisher-subscriber nodes.. first we go to our package

    $ roscd myfirstros
    
   then we create a directory and name it "scripts" and we go inside it
   
   $ mkdir scripts
   
    $ cd scripts
    
   inside this script file we'll put our python file that we'll use as a topic for our publisher.. we'll clone it by using
   
   $ wget https://raw.github.com/ros/ros_tutorials/kinetic-devel/rospy_tutorials/001_talker_listener/talker.py

and in order to be able to run the script, we have to add execution permission to it:

    $ chmod +x talker.py
    
then we'll go to CMakeLists.txt file and add this part inside it:
    
    catkin_install_python(PROGRAMS scripts/talker.py
  DESTINATION ${CATKIN_PACKAGE_BIN_DESTINATION}
)

Now we go to our python file and run it:

  $ cd scripts

 $ python3 talker.py
 
 aaand you're done!! Good job!
