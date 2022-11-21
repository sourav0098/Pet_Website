### Instructions to make it work in local

-   Register in the **petfinder** API
-   Generate the API key and secret
-   Add the following variables to the env file

```sh
API_BASE_URL = "https://api.petfinder.com/v2/animals"
API_TOKEN_URL = "https://api.petfinder.com/v2/oauth2/token"
CLIENT_ID = Your API key
CLIENT_SECRET = Your secret
```

### Instructions to use the petfinder API

To avoid code repetition the code to call the API is in the class RequestManager.php. Just call the getRequest method with your specific query String.

### Postman 

Import the PetFinder.postman_collection.json file to Postman to test the API. 

## **Project Phase 3 - Database Design**

## Tasks
* [x] Created front end of the website
* [x] Designed the database
* [x] Populated Database
* [x] Proper naming conventions for tables and columns
* [x] Table relationship (primary/foreign key)

## Resources
* Browser: Chrome
* Datbase: MySQL
* Server: XAMPP
* IDE: VS Code
* Bootstrap, Unsplash, Font Awesome, Git and GitHub


### Color
black: hsl(276, 7%, 30%);  
secondary:	hsl(273, 96%, 36%);  
hoverColor: hsl(273, 70%, 45%);  
footer: hsl(260, 100%, 73%);  
border: hsl(0, 0%, 82%);  

### Font

Font Family: Roboto

### Folder Structure

```
    │   .gitignore
    │   readme.md
    │   ... php files
    ├───css
    │       ... css files
    │
    ├───images
    │       ... images
    │
    ├───js
    │       ... js files
```

Run composer install
