// Erreur : ReferenceError
// La variable posts n'existe pas dans cette portée.
function renderPosts() {
  return posts.map((post) => `<article>${post.title}</article>`);
}

console.log(renderPosts());
