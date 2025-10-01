<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Nova notícia em destaque</title>
</head>
<body>
    <h2>📰 Nova notícia em destaque!</h2>
    <p><strong>{{ $news->title }}</strong></p>

    <p>{{ Str::limit(strip_tags($news->description), 150) }}</p>

    <p>
        <a href="{{ route('site.newsView', ['news' => $news->id]) }}"
           style="display:inline-block;padding:10px 20px;background:#019D9E;color:#fff;text-decoration:none;border-radius:5px;">
            Ler notícia completa
        </a>
    </p>

    <br>
    <p>Equipe do Assessorarte</p>
</body>
</html>
