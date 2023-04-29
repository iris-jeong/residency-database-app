# ITP 460 Team 1: Residency Database App Project
## By Iris Jeong, Victor Muljo, Jeffrey Lee, Sanko Shen, Larry Li, and Jalen Layfield 
## https://residency-database-app.herokuapp.com/

### Running the project locally
0. Make sure Docker Desktop is downloaded and running on your device
1. Download/clone the Github Repository
2. Open the .env file and make the following changes to the first 8 lines (comments out the production app code and switches to local development)
```
APP_NAME=Laravel
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost
# APP_NAME=ResidencyDatabaseApp
# APP_ENV=production
# APP_DEBUG=false
# APP_URL=https://residency_database_app.heroku.com
```
3. Open terminal and navigate to the root directory (.../residency-database-app/)
4. Run the following command to start the project (may take a while to run): 
```
vendor/bin/sail up
```
5. Open browser and navigate to 'localhost' and the project can be seen on your local device now


