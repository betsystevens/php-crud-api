```mermaid
graph LR
localhost--fetch-->browser--request-->anywhere.com
```
```mermaid
graph RL
anywhere.com--response-->browser-->localhost
```

## Safe requests

There are two types of cross-origin requests:
1. Safe requests
2. All the others.

A request is safe if it satisfies two conditions:

1. Safe method: GET, POST, or HEAD
2. Safe headers - 
  * Accept,
  * Accept-Language,
  * Content-Language,
  * Content-Type with value ...

All other requests are considered unsafe.

The Essential difference is a safe request can be made with   
```<form>``` or ```<script>```   
without any special methods.

## CORS for safe requests

If a request is cross-origin the browser adds the ```Origin``` header.

```html
GET /request
HOST: anywhere.com
Origin: https://javascript.info
```

```mermaid
sequenceDiagram
  JavaScript->>Browser:fetch()
  Browser->>Server:HTTP-request<br/>Origin:https://javascript.info
  Server->>Browser:HTTP-response<br/>Access-Control-Allow-Origin: *<br/>(or https://javascript.info)
  Browser->>JavaScript:If the header allows, <br/>then success, otherwise fail
  
```




