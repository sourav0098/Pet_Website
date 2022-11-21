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
