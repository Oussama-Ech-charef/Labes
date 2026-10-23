// Erreur : Unexpected token '<'
// La route renvoie une page HTML ou une erreur PHP au lieu du JSON.
async function loadPosts() {
  const response = await fetch("/api/posts");
  return response.json();
}

loadPosts().catch((error) => console.error(error.message));
