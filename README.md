# EVCC Mercedes Integration 

Since I had problems with the original Mercedes integration of EVCC, I built a workaround and saved the Mercedes as a custom vehicle. I configured it so that the automatic vehicle detection works. So far, it is running very reliably, and the Mercedes is recognized every time.

Here are the steps to implement the solution:

 1. Set up an ioBroker (instruction: https://www.iobroker.net/#de/documentation)
 2. Install the following Mercedes me adapter on the ioBroker: https://github.com/TA2k/ioBroker.mercedesme (I use version 0.2.3)
 3. Login with your mercedes me account to the adapter and verify with tan
 4. Install the following rest-api adapter on the ioBroker: https://github.com/ioBroker/ioBroker.rest-api (I use version 1.1.0)
 5. Download the following script for the auto detection: [mercedes_status.php](files/mercedes_status.php)
 6. Serve the mercedes_status.php file on a webserver 
 7. Add your mercedes to the evcc.yaml config like this [evcc_mercedes_config.yaml](files/evcc_mercedes_config.yaml) and adjust the configuration accordingly
