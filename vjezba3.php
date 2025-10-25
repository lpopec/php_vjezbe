<?php
$naslov    = "PHP dokument";
$autor     = "Lovro-Mijo Popec";
$opis      = "Ova stranica nadograđuje vježbu 1c: biramo temu (dark/light), odabiremo sliku i po želji prikazujemo opis.";
$dozvoljeneTeme = array("dark", "light");
$dozvoljeneSlike = array(
  "php" => "img/php.png",
  "server" => "img/server.png",
  "code" => "img/code.png"
);

$link_href = "https://hr.wikipedia.org/wiki/PHP";
$link_text = "Saznaj više o PHP-u";
$link_natrag = "vjezba2b.php";

$temaKey = isset($_GET["tema"]) && in_array($_GET["tema"], $dozvoljeneTeme) ? $_GET["tema"] : "dark";
$slikaKey = isset($_GET["slika"]) && isset($dozvoljeneSlike[$_GET["slika"]]) ? $_GET["slika"] : "php";
$prikazOpis = isset($_GET["opis"]);

$slikaPath = $dozvoljeneSlike[$slikaKey];

function h($s) { return htmlspecialchars($s, ENT_QUOTES, "UTF-8"); }

if($temaKey === "light"){
  $bg = "#f1f5f9";  // svijetla pozadina
  $card = "#ffffff";
  $text = "#0f172a";
  $muted = "#64748b";
  $accent = "#1d4ed8";
} else {
  $bg = "#0f172a";  // tamna pozadina
  $card = "#ffffff";
  $text = "#111827";
  $muted = "#6b7280";
  $accent = "#2563eb";
}

?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo h($naslov); ?></title>
  <meta name="description" content="Prvi PHP dokument s osnovnim CSS stilom.">
  <style>
    :root { 
      --bg: <?php echo $bg; ?>;
      --card: <?php echo $card; ?>;
      --text: <?php echo $text; ?>;
      --muted: <?php echo $muted; ?>;
      --accent: <?php echo $accent; ?>;
    }
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
    <h1><?php echo h($naslov); ?></h1>
    <p>Ovu stranicu izradio/la je <strong><?php echo h($autor); ?></strong>.</p>
    
    <div class="figure">
      <img src="<?php echo h($slikaPath); ?>" alt="<?php echo h($slikaKey); ?>">
    </div>

    <?php if ($prikazOpis): ?>
      <p><?php echo h($opis); ?></p>
    <?php endif; ?>

    <form method="get" action="vjezba3.php">
      <fieldset>
        <legend>Odaberi temu</legend>
        <label><input type="radio" name="tema" value="dark"  <?php echo $temaKey==="dark" ? "checked" : ""; ?>> Dark</label>
        <label><input type="radio" name="tema" value="light" <?php echo $temaKey==="light" ? "checked" : ""; ?>> Light</label>
      </fieldset>

      <fieldset>
        <legend>Odaberi sliku</legend>
        <label for="slika">Slika:</label>
        <select id="slika" name="slika">
          <option value="php"    <?php echo $slikaKey==="php"    ? "selected" : ""; ?>>PHP</option>
          <option value="server" <?php echo $slikaKey==="server" ? "selected" : ""; ?>>Server</option>
          <option value="code"   <?php echo $slikaKey==="code"   ? "selected" : ""; ?>>Code</option>
        </select>
      </fieldset>

      <label><input type="checkbox" name="opis" <?php echo $prikazOpis ? "checked" : ""; ?>> Prikaži opis</label>

      <div class="row" style="margin-top:10px">
        <button class="btn" type="submit">Primijeni odabir</button>
        <a class="btn" href="vjezba2b.php">Natrag na vježba 2b</a>
      </div>
    </form>
    <footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
  </main>
</body>
</html>
<!-- Naziv datoteke: vjezba3.php -->