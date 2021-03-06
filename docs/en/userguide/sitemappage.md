# Sitemap User Guide

Sitemap Page - [Return to Contents](index.md)

## Summary

By default the Sitemap will render the selected template to the `$Sitemap` variable in the Content field. If the variable is ommitted then the Sitemap will render to the `$Form` variable (like the *UserDefinedForms* module).

## Templates

Sitemap templates are stored in the `/sitemap/templates/sitemap` folder. Templates only apply to Sitemap Pages.

### Default Template

You can specify the default template to select on the *Sitemap Page* by adding the following to your `app.yml` file.

```YAML
SitemapPage:
  default_template: 'SitemapContentPreview'
```

If the `default_template` is not specified then the `SitemapDefault` template will be used.