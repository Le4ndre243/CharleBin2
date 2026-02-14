# CharleBin

Service de partage de texte éphémère (pastebin) moderne.

##  Installation

```bash
git clone https://github.com/Le4ndre243/Charlebin2.git
cd charlebin
npm install
cp .env.example .env
npm run dev
```

##  Utilisation

- **Web** : Ouvrez `http://localhost:3000`, collez votre texte, choisissez l'expiration
- **API** : `POST /api/pastes` avec `{content, language, expiresIn}`

##  Commandes

```bash
npm run dev      # Développement
npm test         # Tests
npm run lint     # Vérifier le code
npm start        # Production
```

##  Contribution

Voir [CONTRIBUTING.md](CONTRIBUTING.md)

