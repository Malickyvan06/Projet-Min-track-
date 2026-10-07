<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MinTrack CI</title>
<style>
body{font-family:Arial,Helvetica,sans-serif;margin:0;background:#f4f4f4;color:#222}
header{background:#3b2f26;color:#fff;padding:1rem 2rem}
header h1{margin:0;font-size:1.5rem}
nav{background:#c8892b;padding:.6rem 2rem}
nav a{color:#fff;text-decoration:none;margin-right:1.5rem;font-weight:bold}
main{max-width:900px;margin:0 auto;padding:1.5rem}
section{background:#fff;padding:1.25rem;margin-bottom:1.5rem;border:1px solid #ddd}
h2{margin-top:0;font-size:1.2rem;color:#3b2f26}
table{width:100%;border-collapse:collapse}
th,td{border:1px solid #ccc;padding:.6rem;text-align:left}
th{background:#eee}
form{display:grid;gap:.8rem;max-width:400px}
label{display:grid;gap:.3rem}
input,select{padding:.5rem;font-size:1rem}
button{padding:.6rem;background:#3b2f26;color:#fff;border:none;font-size:1rem;cursor:pointer}
</style>
</head>
<body>
<header>
  <h1>MinTrack CI</h1>
</header>
<nav>
  <a href="#sites">Sites</a>
  <a href="#production">Production</a>
  <a href="#stock">Stock</a>
</nav>
<main>
  <section id="sites">
    <h2>Liste des sites</h2>
    <table>
      <thead>
        <tr><th>N°</th><th>Nom</th><th>Localisation</th></tr>
      </thead>
      <tbody></tbody>
    </table>
  </section>

  <section id="production">
    <h2>Ajouter une production</h2>
    <form>
      <label>Site
        <select><option value="">Choisir un site</option></select>
      </label>
      <label>Date
        <input type="date">
      </label>
      <label>Quantité (kg)
        <input type="number" min="0">
      </label>
      <label>Employé
        <select><option value="">Choisir un employé</option></select>
      </label>
      <button type="submit">Enregistrer</button>
    </form>
  </section>

  <section id="stock">
    <h2>Stock de matériel</h2>
    <table>
      <thead>
        <tr><th>Matériel</th><th>Quantité</th><th>Seuil d'alerte</th></tr>
      </thead>
      <tbody></tbody>
    </table>
  </section>
</main>
</body>
</html>
