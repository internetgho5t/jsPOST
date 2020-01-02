// Access dictionary post.php made directly
alert(postVars["text"]); // Can access the 'text' POST param because dictionary.php put it in a JavaScript dictionary

// OR

// Use a function to write a little less code
function post(var) {
  return postVars[var];
}
