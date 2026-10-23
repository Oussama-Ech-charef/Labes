// Correction : contrôler le statut et le type de contenu avant le parsing.
async function loadPosts() {
  const response = await fetch("/api/posts");
  const type = response.headers.get("content-type") ?? "";

  if (!response.ok) throw new Error(`HTTP ${response.status}`);
  if (!type.includes("application/json")) {
    throw new Error("Réponse API non JSON");
  }

  return response.json();
}

loadPosts().then(console.log).catch(console.error);
