# Utilisation

La classe Auth donne accès à la classe `Guard` utilisée par Laravel sous le nom _Auth_.

### Vérifier que l'utilisateur est connecté

Pour vérifier qu'un utilisateur est connecté ou invité, utilisez les fonctions _check_ et _guest_.

    {% verbatim %}{{ auth_check() }}{% endverbatim %} // true ou false

    {% verbatim %}{{ auth_guest() }}{% endverbatim %} // true ou false

### Récupérer l'utilisateur connecté

La fonction _user_ retourne l'instance de l'utilisateur connecté ou _null_ s'il ne l'est pas.

    {% verbatim %}{{ auth_user() }}{% endverbatim %} // Le Presenter de l'utilisateur connecté.

    {% verbatim %}{{ auth_user().display_name }}{% endverbatim %} // Ryan Thompson
