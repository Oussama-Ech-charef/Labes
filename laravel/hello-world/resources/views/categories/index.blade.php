<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories | Laravel</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 3rem auto; max-width: 48rem; padding: 0 1rem; color: #1f2937; }
        h1 { color: #1d4ed8; }
        li { padding: .6rem 0; border-bottom: 1px solid #e5e7eb; }
    </style>
</head>
<body>
    <main>
        <h1>Liste des catégories</h1>

        @forelse ($categories as $category)
            @if ($loop->first)
                <ul>
            @endif
                    <li>
                        <strong>{{ $category->name }}</strong>
                        @if ($category->desc)
                            <p>{{ $category->desc }}</p>
                        @endif
                    </li>
            @if ($loop->last)
                </ul>
            @endif
        @empty
            <p>Aucune catégorie pour le moment.</p>
        @endforelse
    </main>
</body>
</html>
