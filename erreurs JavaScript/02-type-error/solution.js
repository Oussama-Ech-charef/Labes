// Correction : vérifier la valeur avant de lire sa propriété.
const post = undefined;
const title = post?.title?.trim() ?? "Titre indisponible";

console.log(title);
