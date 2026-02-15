describe('CharleBin PasteMdp Test', () => {
    it('Crée un paste, récupère l\'URL et vérifie le contenu', () => {
        cy.visit('http://localhost:8080');

        //nettoyage des champs
        cy.get('#passwordinput').clear();
        cy.get('#message').clear();

        // saisie du message et du mot de passe
        cy.get('#message').type('fromage');
        cy.get('#passwordinput').type('fromage');
        cy.get('#sendbutton').click();

        // on verifie si le message est bien visible
        cy.get('#pasteurl').should('be.visible').click();
        
        // on met le mot de passe pour decripter le message
        cy.get('#passworddecrypt').clear({ force: true }).type('fromage', { force: true });
        cy.get('#passwordform > .btn').click();

        //on verifie le contenu
        cy.get('#prettyprint').should('have.text', 'fromage');

        // verification du bouton de copie
        cy.get('img').should('be.visible').click();
    });
});
