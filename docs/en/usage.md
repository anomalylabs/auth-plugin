# Usage

To use the auth object simply call any of the public methods from the auth class prefixed with `auth_*`.

For documentation on the auth class and what methods are available check out the [Laravel Documentation](https://laravel.com/docs/5.1/auths).

    {% verbatim %}{{ auth_url(1) }}{% endverbatim %} // http://pyrocms.com/documentation/auth-plugin/usage

    {% verbatim %}{{ auth_segment(1) }}{% endverbatim %} // documentation

    {% verbatim %}{{ auth_is("admin/*") ? "Nope" : "Yes" }}{% endverbatim %} // Nope

    {% verbatim %}{{ auth_route().getParameter('project') }}{% endverbatim %} // auth-plugin
