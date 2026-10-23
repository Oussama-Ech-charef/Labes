// Correction : recevoir la liste en paramètre.
function renderPosts(posts) {
  return posts.map((post) => `<article>${post.title}</article>`);
}

const posts = [{ title: "Premier article" }];
console.log(renderPosts(posts));
