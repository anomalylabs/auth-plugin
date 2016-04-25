# Usage

The auth class provides restricted access to Laravel's `Guard` class often referred to as _Auth_.

### Checking if a user is logged in.

To check if a user is logged in or a guest use _check_ and _guest_ methods.

    {% verbatim %}{{ auth_check() }}{% endverbatim %} // true or false

    {% verbatim %}{{ auth_guest() }}{% endverbatim %} // true or false

### Returning the logged in user

The user method returns the decorated instance of the logged in user or _null_ if none.

    {% verbatim %}{{ auth_user() }}{% endverbatim %} // The user presenter

    {% verbatim %}{{ auth_user().display_name }}{% endverbatim %} // Ryan Thompson
