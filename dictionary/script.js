// Access dictionary post.php made directly
alert(post['text']); // Can access the 'text' POST param because dictionary.php put it in a JavaScript dictionary

// Or use a function instead if you want to do stuff to it first
function Post(variable) {
  // do stuff to variable before returning...
  var thisVar = post[variable];
  return thisVar;
}

alert(Post('text'));
