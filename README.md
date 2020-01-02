# jsPOST

A PHP server is required for this code. This is not for getting POST data without using PHP or any other backend solution. So far as I know that's not really possible without some frontend trick, which in that case I would recommend just using cookies or sessionStorage.

This is mostly meant as a workaround if you need a way to access POST data submitted to the page as an alternative to using the GET method which clutters up the URL with parameters (e.g. `?bleh=value&blah=value`).

**Not for use with sensitive data.**

## Methods

There are two ways you could go about doing this. Using `var.php` will create javascript variables out of the POST data you can directly use in other javascript files you link to your page. 

```HTML
<script type="text/javascript" src="/path/to/var.php"></script> // creates variables: 'var field = "value";'
<script type="text/javascript" src="/path/to/your_script.js"></script> // so you can use variables in your JavaScript: 'alert(field);'
```

**--OR--**

Using `post.php` will create a dictionary that you can either use directly in your code, or you could create a function that will return the variable you need from the dictionary like `post("field")`. JavaScript examples are included.

```HTML
<script type="text/javascript" src="/path/to/post.php"></script> // creates dictionary: 'var postVars = {field:"Value"};'
<script type="text/javascript" src="/path/to/your_script.js"></script> // access directly postVars["field"] or use a function that returns the value post("field");
```

Both files are basically telling the browser to treat them as though they are JavaScript files so they can pass on POST data to the other javascript files on the page.

## Warnings

I already mentioned this at the top of this README but this is not intended for use with any sensitive data. The POST method exists for a reason; to send data securely to the backend, so using this for sensitive data defeats the purpose. It would be almost as insecure as using the GET method.

I would recommend you use a .htaccess file so you do not need to include the .php extension when you link to `var.php` or `post.php`.
