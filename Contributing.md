# Contribuer à CharleBin

## Workflow

```bash
# 1. Fork et clone
git clone https://github.com/VOTRE-USERNAME/charlebin.git

# 2. Créer une branche
git checkout -b feature/ma-fonctionnalite

# 3. Développer et tester
npm run lint
npm test

# 4. Commit
git commit -m "feat: description du changement"

# 5. Push et créer une PR
git push origin feature/ma-fonctionnalite
```

## Règles

**Nommage des branches :**
- `feature/` - Nouvelles fonctionnalités
- `fix/` - Corrections de bugs
- `docs/` - Documentation

**Format des commits :**
```
type: description courte

Types: feat, fix, docs, style, refactor, test, chore
```

**Avant la PR :**
- [ ] `npm run lint` passe
- [ ] `npm test` passe
- [ ] Code commenté si nécessaire
- [ ] Tests ajoutés

## Standards

- **ESLint** : Respecter la config du projet
- **Tests** : Couverture minimale 80%
- **Code** : 2 espaces, guillemets simples
