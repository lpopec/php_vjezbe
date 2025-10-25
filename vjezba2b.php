<?php
$naslov    = "PHP dokument";
$autor     = "Lovro-Mijo Popec";
$opis        = "Ova stranica nastavlja vježbu 1b i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
$link_href = "https://hr.wikipedia.org/wiki/PHP";
$link_text = "Saznaj više o PHP-u";
$link_natrag = "vjezba2a.php"
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $naslov; ?></title>
  <meta name="description" content="Prvi PHP dokument s osnovnim CSS stilom.">
  <style>
    :root { --bg:#0f172a; --card:#ffffff; --text:#111827; --muted:#6b7280; --accent:#2563eb; }
    * { box-sizing: border-box; }
    body { 
      margin:0; 
      font-family: system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;
      background:var(--bg); 
      color:var(--text); 
    }
    .wrap { 
      max-width:720px; 
      margin:48px auto; 
      background:var(--card); 
      padding:32px;
      border-radius:16px;
      box-shadow:0 10px 30px rgba(0,0,0,.08); 
    }
    h1 { 
      margin:0 0 12px; 
      font-size:2rem; 
    }
    p  { 
      margin:0 0 14px; 
      line-height:1.6; 
    }
    .btn { 
      display:inline-block; 
      padding:10px 16px; 
      border:1px solid var(--accent);
      border-radius:10px; 
      text-decoration:none; 
    }
    .btn:hover { 
      background:var(--accent); 
      color:#fff; 
    }
    footer { 
      margin-top:20px; 
      font-size:.9rem; 
      color:var(--muted); 
    }
  </style>
</head>
<body>
  <main class="wrap">
    <h1><?php echo htmlspecialchars($naslov); ?></h1>
    <p>Ovu stranicu izradio/la je <strong><?php echo htmlspecialchars($autor); ?></strong>.</p>
    <p><?php echo htmlspecialchars($opis); ?></p>
    <p>PHP je serverski jezik koji generira HTML ili JSON odgovor prema klijentu.</p>
    <p>
      <a class="btn" href="<?php echo htmlspecialchars($link_href); ?>"
         target="_blank" rel="noopener"><?php echo htmlspecialchars($link_text); ?></a>
      <a class="btn" href="<?php echo htmlspecialchars($link_natrag); ?>"
         rel="noopener"><?php echo htmlspecialchars($link_natrag); ?></a>
    </p>
    <footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
  </main>
</body>
</html>
<!-- Naziv datoteke: vjezba2b.php -->